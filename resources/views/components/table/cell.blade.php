@props(['resource', 'key', 'item'])

@php
$fieldMeta = config("resources.${resource}.fields.${key}");
@endphp

<td scope="col" class="text-{{ $fieldMeta['text-align'] ?? 'left' }}">
    @if ($fieldMeta['type'] == 'progress')
        <div class="d-flex align-items-center justify-content-center">
            @if ($item[$key] == 'completed')
                <i class="material-icons-round md-18" style="color: #76b88c;"> check_circle </i>
            @elseif ($item[$key] == 'pending')
                <i class="material-icons-round md-18" style="color: #fda744;"> warning </i>
            @elseif ($item[$key] == 'failed')
                <i class="material-icons-round md-18" style="color: #f55e6f;"> error </i>
            @endif
        </div>
    @else
        {{ format($fieldMeta, $item, $key) }}
    @endif
</td>
