<?php

function format($type, $value)
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

function headers($fields)
{
    return array_keys($fields);
}
