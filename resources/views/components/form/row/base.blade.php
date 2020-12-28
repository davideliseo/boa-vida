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
                @if ($fieldMeta['type'] == 'foreign')
                    @if ($fieldMeta['input']['format'] == 'select')
                        @php
                        $childResource = $fieldMeta['relation']['where'];
                        $child = config("resources.${childResource}.model")::find($item[$key]);
                        @endphp
                        @if ($child)
                            <a href="{{ route($childResource . '.show', $child) }}">
                                {{ $child->name }}
                            </a>
                        @endif
                    @elseif ($fieldMeta['input']['format'] == 'multiselect')
                        {{ format($fieldMeta, $item) }}
                    @endif

                @else
                    @if ($item)
                        {{ format($fieldMeta, $item[$key]) }}
                    @else
                        {{ $value ?? '' }}
                    @endif
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

        @elseif ($fieldMeta['type'] == 'foreign')
            @php
            $childResource = $fieldMeta['relation']['where'];
            $childModel = config("resources.${childResource}.model");
            @endphp
            @if ($fieldMeta['input']['format'] == 'select')
                <x-input.select :model="$childModel" :key="$key" />

            @elseif ($fieldMeta['input']['format'] == 'multiselect')
                <x-input.multiselect :model="$childModel" :key="$key" />

            @endif

        @elseif ($fieldMeta['type'] == "progress")
            <x-input.radio :is-required="$fieldMeta['is-required']" :key="$key" :item="$item" />

        @endif
    @endif
</div>
