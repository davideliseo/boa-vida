@props(['label', 'icon', 'key', 'item', 'required' => false])

<x-form.row
    type="edit"
    :label="$label"
    :icon="$icon"
    :key="$key"
    :item="$item"
    :input="true"
    :required="$required"
    :leading="null">
</x-form.row>
