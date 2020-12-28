@props(['resource', 'key', 'item'])

<x-form.row.base
    action="edit"
    :key="$key"
    :field-meta='config("resources.${resource}.fields.${key}")'
    :item="$item"
/>
