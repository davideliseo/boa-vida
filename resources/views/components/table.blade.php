<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                @foreach ($headers as $key => $value)
                    <th scope="col" class="{{ $value['class'] ?? 'text-center' }}">
                        {{ $value['displayName'] }}
                    </th>
                @endforeach
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    @foreach ($headers as $key => $value)
                        <td scope="col" class="{{ $value['class'] ?? 'text-center' }}">
                            @if ($loop->first)
                                <a href="{{ route($table . '.show', $item) }}">{{ $item[$key] }}</a>
                            @else
                                {{ $item[$key] }}
                            @endif
                        </td>
                    @endforeach

                    <td>
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a class="btn-v2 btn-deg-orange shadow-sm" href="{{ route($table . '.edit', $item) }}">
                                    Editar
                                </a>
                            </div>

                            <form method="POST" action="{{ route($table . '.destroy', $item) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-v2 btn-deg-red shadow-sm"
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
