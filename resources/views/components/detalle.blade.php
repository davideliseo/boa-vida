<div>
    @foreach ($encabezados as $key => $value)
        <div class="row">
            <div class="col-md-6 text-md-right pb-4">
                <strong>{{ $value['nombreCompleto'] }}:</strong>
            </div>

            <div class="col-md-6">
                {{ $item[$key] }}
            </div>
        </div>
    @endforeach
    <div class="row justify-content-center">
            <div class="col-md-6 text-md-right pr-2">
                <a class="btn btn-warning" href="{{ route($tabla.'.edit', $item) }}">
                    Editar
                </a>
            </div>

            <div class="col-md-6">
                <form method="POST" action="{{ route($tabla.'.destroy', $item) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Está seguro/a que desea eliminar este ítem?')">
                        Eliminar
                    </button>
                </form>
            </div>
    </div>
</div>
