<x-card.base type="index" :title="$title">
    <x-slot name="header">
        @can('create', $model)
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
        {{ __("Total ${collectionName}") }}: {{ $collection->count() }}
    </x-slot>
</x-card.base>
