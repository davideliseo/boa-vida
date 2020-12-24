<div class="form-group row">
    <label for="{{ $key }}" class="col-md-5 col-form-label text-md-left">
        <x-icon-label :label="$label" :icon="$icon" pr="3" md="auto" />
    </label>
    @if ($inputType == "text")
        <div class="col-md-6">
            <x-input.text :is-required="$isRequired" :key="$key" :item="$item" />
        </div>
    @elseif ($inputType == "fake")
        <div class="col-md-6 col-form-label fake-input">
            <div class="d-flex align-items-center">
                {{ $value ?? '' }}
            </div>
        </div>
    @elseif ($inputType == "date")
        <div></div>
    @endif
</div>
