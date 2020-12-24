@props(['resource', 'formId' => true, 'color', 'label', 'icon', 'showText' => true])

<button type="submit" @if ($formId) form="{{ $resource . '_form' }}" @endif class="btn-v2 {{ $color }} shadow-sm px-2">
    <x-icon-label :label="$label" :icon="$icon" :showText="$showText" />
</button>
