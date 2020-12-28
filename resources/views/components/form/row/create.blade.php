@props(['resource', 'key'])

<x-form.row.base
    action="edit"
    :key="$key"
    :field-meta='config("resources.${resource}.fields.${key}")'
/>
