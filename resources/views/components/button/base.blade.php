@if (in_array($action, ['edit', 'show', 'index', 'create']))
    <a class="btn-v2 {{ $color }} shadow-sm px-2" href="{{ route("${resource}.${action}", $item) }}" role="button">
        <x-icon-label :label="$label" :icon="$icon" :showText="$showText" />
    </a>
@elseif ($action == "destroy")
    <form method="post" action="{{ route("${resource}.${action}", $item) }}">
        @csrf
        @method('delete')
        <x-button.submit :resource="$resource" :form-id="false" :color="$color" :label="$label" :icon="$icon"
                         :showText="$showText"
                         confirm="¿Está seguro/a que desea eliminar éste ítem?" />
    </form>
@elseif (in_array($action, ["store", "update"]))
    <x-button.submit :resource="$resource" :color="$color" :label="$label" :icon="$icon" :showText="$showText" />
@endif
