<?php

function format($type, $value, $format = null)
{
    if ($value == null) return null;
    switch ($type) {
        case 'id':
            return '#' . $value;
        case 'datetime':
            return strftime("%d-%m-%Y (%H:%M:%S)", $value->getTimestamp());
        case 'date':
            $datetime = new DateTime($value);
            return strftime("%d-%m-%Y", $datetime->getTimestamp());
        case 'currency':
            return '$' . round($value);
        case 'progress':
            switch ($value) {
                case 'completed':
                    return 'Completada';
                case 'pending':
                    return 'Pendiente';
                case 'failed':
                    return 'Fallida';
                default:
                    return $value;
            }
        default:
            return $value;
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
