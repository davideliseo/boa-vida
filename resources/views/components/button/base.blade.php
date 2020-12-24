@if (in_array($action, ["edit", "show", "index", "create"]))
    <a class="btn-v2 {{ $color }} shadow-sm px-2"
       href="{{ route("${resource}.${action}", $item) }}" role="button">
        <x-icon-label :label="$label" :icon="$icon" :showText="$showText" />
    </a>
@endif

@if ($action == "destroy")
    <form method="post" action="{{ route("${resource}.${action}", $item) }}">
        @csrf
        @method('delete')
        <button type="submit" class="btn-v2 {{ $color }} shadow-sm px-2">
            <x-icon-label :label="$label" :icon="$icon" :showText="$showText" />
        </button>
    </form>
@endif

@if (in_array($action, ["store", "update"]))
    <button type="submit" class="btn-v2 {{ $color }} shadow-sm px-2">
        <x-icon-label :label="$label" :icon="$icon" :showText="$showText" />
    </button>
@endif
