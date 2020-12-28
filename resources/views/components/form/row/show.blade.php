@props(['resource', 'key', 'item'])

<x-form.row.base
    action="show"
    :key="$key"
    :field-meta='config("resources.${resource}.fields.${key}")'
    :item="$item">

    <x-slot name="value">
        {{ $value ?? '' }}
    </x-slot>

</x-form.row.base>
