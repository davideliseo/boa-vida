@props(['label', 'icon', 'key', 'required' => false])

<x-form.row
    type="create"
    :label="$label"
    :icon="$icon"
    :key="$key"
    :item="null"
    :input="true"
    :required="$required"
    :leading="null" />
