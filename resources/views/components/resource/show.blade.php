@props([
'resource',
'fields' => headers(config("resources.${resource}.fields")),
'item',
'title'
])

<x-card.show :title="$title" :resource="$resource" :item="$item">
    <x-slot name="fields">
        @foreach ($fields as $field)
            <x-form.row.show :resource="$resource" :key="$field" :item="$item" />
        @endforeach
    </x-slot>
</x-card.show>
