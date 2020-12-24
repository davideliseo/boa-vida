@props(['resource', 'showText' => true])

<x-button.base
    action="store"
    label="Agregar"
    icon="check_circle"
    color="btn-deg-dark-blue"
    :item="null"
    :resource="$resource"
    :show-text="$showText" />
