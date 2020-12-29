@props(['resource', 'key'])

<x-form.row.base
    action="create"
    :key="$key"
    :field-meta='config("resources.${resource}.fields.${key}")'
/>
