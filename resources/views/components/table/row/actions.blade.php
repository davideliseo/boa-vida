<div class="d-flex align-items-center justify-content-start">
    @can('view', $item)
        <x-button.show :resource="$resource" :item="$item" :show-text="false" />
    @endcan
    @can('update', $item)
        <div class="pl-2 pr-2">
            <x-button.edit :resource="$resource" :item="$item" :show-text="false" />
        </div>
    @endcan
    @can('delete', $item)
        <x-button.destroy :resource="$resource" :item="$item" :show-text="false" />
    @endcan
</div>
