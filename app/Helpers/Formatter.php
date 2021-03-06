<?php

use Illuminate\Support\Arr;

function format($fieldMeta, $item, $key)
{
    if ($item[$key] == null) return null;
    switch ($fieldMeta['type']) {
        case 'id':
            return '#' . $item[$key];
        case 'datetime':
            return strftime("%d-%m-%Y (%H:%M:%S)", $item[$key]->getTimestamp());
        case 'date':
            $datetime = new DateTime($item[$key]);
            return strftime("%d-%m-%Y", $datetime->getTimestamp());
        case 'currency':
            return '$' . round($item[$key]);
        case 'ticket':
            switch ($item[$key]) {
                case 'receipt':
                    return 'Boleta';
                case 'bill':
                    return 'Factura';
                default:
                    return $item[$key];
            }
        case 'progress':
            switch ($item[$key]) {
                case 'completed':
                    return 'Completada';
                case 'pending':
                    return 'Pendiente';
                case 'failed':
                    return 'Fallida';
                default:
                    return $item[$key];
            }
        case 'foreign':
            switch ($fieldMeta['relation']['where']) {
                case 'areas':
                    return ($item['admin'] ? 'Administrador - ' : '') . implode(
                        ' - ',
                        Arr::pluck($item->areas()->get(), 'name')
                    );

                case 'products':
                    return implode(
                        ' - ',
                        Arr::pluck($item->products()->get(), 'name')
                    );
                case 'supplies':
                    return implode(
                        ' - ',
                        Arr::pluck($item->supplies()->get(), 'name')
                    );
                case 'suppliers':
                    return implode(
                        ' - ',
                        Arr::pluck($item->supplier()->get(), 'name')
                    );

                default:
                    return '';
            }
        case 'password':
            return 'Oculto';
        default:
            return $item[$key];
    }
}

function indexable($fields)
{
    return array_filter($fields, function ($field) {
        return $field['is-indexable'];
    });
}

function writable($fields)
{
    return array_filter($fields, function ($field) {
        return !$field['is-readonly'];
    });
}

function headers($fields)
{
    return array_keys($fields);
}
