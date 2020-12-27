@props(['action' => 'index', 'resource', 'showText' => true])

<x-button.base
    :action="$action"
    label="Atrás"
    icon="arrow_back"
    color="btn-deg-dark"
    :item="null"
    :resource="$resource"
    :show-text="$showText" />
