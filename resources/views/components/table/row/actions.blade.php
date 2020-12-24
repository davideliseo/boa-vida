<div class="d-flex align-items-center justify-content-center">
    @can('view', $item)
        <x-button type="show" :resource="$resource" :item="$item" :show-text="false" />
    @endcan
    @can('update', $item)
        <div class="pl-2 pr-2">
            <x-button type="edit" :resource="$resource" :item="$item" :show-text="false" />
        </div>
    @endcan
    @can('delete', $item)
        <x-button type="destroy" :resource="$resource" :item="$item" :show-text="false" />
    @endcan
</div>
