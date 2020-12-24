@props(['inputType' => 'text', 'label', 'icon', 'key', 'isRequired' => false])

<x-form.row.base
    type="create"
    :input-type="$inputType"
    :label="$label"
    :icon="$icon"
    :key="$key"
    :item="null"
    :is-input="true"
    :is-required="$isRequired"/>
