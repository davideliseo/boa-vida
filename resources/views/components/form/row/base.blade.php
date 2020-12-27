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
                @if ($item)
                    {{ $model::format($key, $item[$key]) }}
                @else
                    {{ $value ?? ''}}
                @endif
            </div>
        </div>
    @elseif ($inputType == "date")
        <x-input.date :until-today="$untilToday" :is-required="$isRequired" :key="$key" :item="$item" />
    @elseif ($inputType == "enum")
        <x-input.enum :is-required="$isRequired" :key="$key" :item="$item" />
    @endif
</div>
