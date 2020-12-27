@props(['title', 'resource', 'model', 'collection'])

<x-card.base type="index" :title='config("resources.${resource}.title")'>
    <x-slot name="header">
        @can('create', config("resources.${resource}.model"))
            <x-button.create :resource="$resource" />
        @endcan
    </x-slot>
    <x-slot name="body">
        <x-table>
            <x-slot name="header">
                {{ $headers }}
                <th scope="col"></th>
            </x-slot>
            <x-slot name="body">
                {{ $rows }}
            </x-slot>
        </x-table>
    </x-slot>
    <x-slot name="footer">
        {{ 'Total ' . strtolower(config("resources.${resource}.title")) }}: {{ $collection->count() }}
    </x-slot>
</x-card.base>
