<?php

function formatBase($key, $value)
{
    if ($key == 'id') {
        return '#' . $value;
    } else if (is_a($value, 'DateTime')) {
        return strftime("%d-%m-%Y (%H:%M:%S)", $value->getTimestamp());
    }

}
