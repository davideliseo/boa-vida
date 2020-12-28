@props([
'resource',
'fields' => headers(indexable(config("resources.${resource}.fields"))),
'collection'
])

<x-card.index :resource="$resource" :collection="$collection">
    <x-slot name="table">
        <x-slot name="headers">
            @foreach ($fields as $field)
                <x-table.header :resource="$resource" :key="$field" />
            @endforeach
        </x-slot>
        <x-slot name="rows">
            @foreach ($collection as $item)
                <tr>
                    @foreach ($fields as $field)
                        <x-table.cell :resource="$resource" :key="$field" :item="$item" />
                    @endforeach
                    <td>
                        <x-table.row.actions :resource="$resource" :item="$item" />
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-slot>
</x-card.index>
