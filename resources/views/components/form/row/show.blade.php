@props(['label', 'icon', 'key', 'item', 'leading' => ''])

<x-form.row
    type="show"
    :label="$label"
    :icon="$icon"
    :key="$key"
    :item="null"
    :input="false"
    :required="null"
    :leading="$leading">
    <x-slot name="value">
        {{ $value }}
    </x-slot>
</x-form.row>
