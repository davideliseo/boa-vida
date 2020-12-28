@props(['resource', 'key', 'item'])

@php
    $fieldMeta = config("resources.${resource}.fields.${key}");
@endphp

<td scope="col" class="text-{{ $fieldMeta['text-align'] ?? 'left' }}">
    {{ format($fieldMeta['type'], $item[$key]) }}
</td>
