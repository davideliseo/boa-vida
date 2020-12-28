@props([
'resource',
'fields' => headers(writable(config("resources.${resource}.fields"))),
'title'
])

<x-card.create :title="$title" :resource="$resource">
        <x-slot name="fields">
            @foreach ($fields as $field)
                <x-form.row.create :resource="$resource" :key="$field" />
            @endforeach
        </x-slot>
    </x-card.create>
