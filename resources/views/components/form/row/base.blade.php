@props([
'action',
'item' => null,
'key',
'fieldMeta'
])

<div class="form-group row">
    <label for="{{ $key }}" class="col-md-5 col-form-label text-md-left">
        <x-icon-label :label="$fieldMeta['label']" :icon="$fieldMeta['icon']" pr="3" md="auto" />
    </label>

    @if ($action == 'show')
        <div class="col-md-6 col-form-label fake-input">
            <div class="d-flex align-items-center">
                @if ($item)
                    {{ format($fieldMeta['type'], $item[$key]) }}
                @else
                    {{ $value ?? '' }}
                @endif
            </div>
        </div>

    @elseif ($action == 'create' || $action == 'edit')
        @if (in_array($fieldMeta['type'], ['text', 'integer', 'currency']))
            <div class="col-md-6">
                <x-input.text :is-required="$fieldMeta['is-required']" :key="$key" :item="$item" />
            </div>

        @elseif ($fieldMeta['type'] == "date")
            <x-input.date :until-today="$fieldMeta['input']['until']" :is-required="$fieldMeta['is-required']"
                          :key="$key" :item="$item" />

        @elseif ($fieldMeta['type'] == 'multiselect')
            <x-input.multiselect />

        @elseif ($fieldMeta['type'] == "progress")
            <x-input.radio :is-required="$fieldMeta['is-required']" :key="$key" :item="$item" />

        @endif
    @endif
</div>
