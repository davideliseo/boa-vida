@extends('layouts.menu')

@section('content')
    <div class="container">
        <form action="/productos" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Agregar producto nuevo</h1>
                    </div>
                    <div class="form-group row">
                        <label for="nombre"
                            class="col-md-4 col-form-label">Nombre</label>

                        <input id="nombre" type="text"
                            class="form-control @error('nombre') is-invalid @enderror"
                            name="nombre" value="{{ old('nombre') }}"
                            autocomplete="nombre" autofocus>

                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="precio"
                            class="col-md-4 col-form-label">Precio</label>

                        <input id="precio" type="text"
                            class="form-control @error('precio') is-invalid @enderror"
                            name="precio" value="{{ old('precio') }}"
                            autocomplete="precio" autofocus>

                        @error('precio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="fecha_elaboracion"
                            class="col-md-4 col-form-label">Fecha de elebaroación</label>

                        <input id="fecha_elaboracion" type="text"
                            class="form-control @error('fecha_elaboracion') is-invalid @enderror"
                            name="fecha_elaboracion" value="{{ old('fecha_elaboracion') }}"
                            autocomplete="fecha_elaboracion" autofocus>

                        @error('fecha_elaboracion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="cantidad"
                            class="col-md-4 col-form-label">Cantidad</label>

                        <input id="cantidad" type="text"
                            class="form-control @error('cantidad') is-invalid @enderror"
                            name="cantidad" value="{{ old('cantidad') }}"
                            autocomplete="cantidad" autofocus>

                        @error('cantidad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Agregar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
