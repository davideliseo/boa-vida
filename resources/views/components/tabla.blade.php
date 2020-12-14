<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                @foreach ($encabezados as $key => $value)
                    <th scope="col" class="{{ $value['class'] ?? 'text-center' }}">
                        {{ $value['nombreCompleto'] }}
                    </th>
                @endforeach
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coleccion as $item)
                <tr>
                    @foreach ($encabezados as $key => $value)
                        <td scope="col" class="{{ $value['class'] ?? 'text-center' }}">
                            {{ $item[$key] }}
                        </td>
                    @endforeach

                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a class="btn btn-warning" href="{{ route($tabla . '.edit', $item) }}">
                                    Modificar
                                </a>
                            </div>

                            <form method="POST" action="{{ route($tabla . '.destroy', $item) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Está seguro/a que desea eliminar este ítem?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
