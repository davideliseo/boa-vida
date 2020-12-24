@props(['inputType' => 'fake', 'label', 'icon', 'key', 'item'])

<x-form.row.base
    type="show"
    :input-type="$inputType"
    :label="$label"
    :icon="$icon"
    :key="$key"
    :item="null"
    :is-input="false"
    :is-required="null">

    <x-slot name="value">
        {{ $value }}
    </x-slot>

</x-form.row.base>
