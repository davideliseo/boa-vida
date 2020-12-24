<x-card.base type="form-like" :title="$title">
    <x-slot name="header">
        <x-button.back :resource="$resource" :show-text="true" />
    </x-slot>
    <x-slot name="body">
        {{ $fields }}
    </x-slot>
    <x-slot name="footer">
        @can('update', $item)
            <div class="pr-3">
                <x-button.edit :resource="$resource" :item="$item" :show-text="true" />
            </div>
        @endcan
        @can('delete', $item)
            <x-button.destroy :resource="$resource" :item="$item" :show-text="true" />
        @endcan
    </x-slot>
</x-card.base>
