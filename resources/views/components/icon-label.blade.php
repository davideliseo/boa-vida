<div class="d-flex align-items-center">
    <i class="material-icons-round @if ($showText) pr-{{ $pr }} @endif md-{{ $md }}"> {{ $icon }} </i>
    @if ($showText)
        {{ $label }}
    @endif
</div>
