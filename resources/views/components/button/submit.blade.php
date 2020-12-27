@props(['resource', 'formId' => true, 'color', 'label', 'icon', 'showText' => true, 'confirm' => null])

<button type="submit" @if ($formId) form="{{ $resource . '_form' }}" @endif
        class="btn-v2 {{ $color }} shadow-sm px-2"
        @if ($confirm) onclick="return confirm('{{ $confirm }}')" @endif>
    <x-icon-label :label="$label" :icon="$icon" :showText="$showText" />
</button>
