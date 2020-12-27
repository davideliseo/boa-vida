@props(['item', 'resource', 'showText' => true])

<x-button.base
    action="edit"
    label="Editar"
    icon="edit"
    color="btn-deg-orange"
    :item="$item"
    :resource="$resource"
    :show-text="$showText" />
