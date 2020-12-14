@extends('layouts.galeria.index')

@section('content-header')
    <div class="font-weight-bold">Productos</div>
    <a class="btn btn-primary" href="{{ route('productos.create') }}">
        Agregar
    </a>
@endsection

@section('table-header')
    <tr>
        <th scope="col">ID</th>
        <th scope="col" class="text-left">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col" class="text-left">Fecha de elaboración</th>
        <th scope="col"></th>
    </tr>
@endsection

@section('table-body')
    @foreach (\App\Models\Producto::all() as $producto)
        <tr>
            <th>{{ $producto->id }}</th>
            <td class="text-left">
                {{ $producto->nombre }}
            </td>
            <td>{{ '$' . $producto->precio }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td class="text-left">{{ $producto->fecha_elaboracion }}
            </td>

            <td>
                <div class="d-flex">
                    <div class="pr-2">
                        <a class="btn btn-warning" href="{{ route('productos.edit', $producto) }}">
                            Modificar
                        </a>
                    </div>

                    <form method="POST" action="{{ route('productos.destroy', $producto) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">
                            Eliminar
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
@endsection
