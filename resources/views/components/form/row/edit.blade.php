@props(['inputType' => 'text', 'label', 'icon', 'key', 'item', 'isRequired' => false])

<x-form.row.base
    type="edit"
    :input-type="$inputType"
    :label="$label"
    :icon="$icon"
    :key="$key"
    :item="$item"
    :is-input="true"
    :is-required="$isRequired" />
