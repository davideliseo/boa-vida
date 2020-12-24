@props(['item', 'resource', 'showText' => true])

<x-button.base
    action="destroy"
    label="Eliminar"
    icon="delete"
    color="btn-deg-red"
    :item="$item"
    :resource="$resource"
    :show-text="$showText" />
