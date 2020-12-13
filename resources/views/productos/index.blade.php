@extends('layouts.galeria')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="font-weight-bold">Productos</div>
                            <a class="btn btn-primary" href="{{ route('productos.create') }}">
                                Agregar
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col" class="text-left">Nombre
                                        </th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col" class="text-left">Fecha de elaboración</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                                        <a class="btn btn-warning"
                                                            href="{{ route('productos.edit', $producto) }}">
                                                            Modificar
                                                        </a>
                                                    </div>

                                                    <form method="POST"
                                                        action="{{ route('productos.destroy', $producto) }}">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
