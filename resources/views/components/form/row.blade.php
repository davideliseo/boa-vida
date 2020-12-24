<div class="form-group row">
    <label for="{{ $key }}" class="col-md-5 col-form-label text-md-left">
        <x-icon-label :label="$label" :icon="$icon" pr="3" md="auto" />
    </label>
    @if ($input)
        <div class="col-md-6">
            <x-input :required="$required" :key="$key" :item="$item" />
        </div>
    @else
        <div class="col-md-6 col-form-label fake-input">
            <div class="d-flex align-items-center">
                {{ $value ?? '' }}
            </div>
        </div>
    @endif
</div>
