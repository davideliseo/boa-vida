@props([
'resource',
'fields' => headers(writable(config("resources.${resource}.fields"))),
'item',
'title'
])

<x-card.edit :title="$title" :resource="$resource" :item="$item" >
        <x-slot name="fields">
            @foreach ($fields as $field)
                <x-form.row.edit :resource="$resource" :key="$field" :item="$item" />
            @endforeach
        </x-slot>
    </x-card.edit>
