@extends('layouts.galeria.form')

@section('form-header')
    Agregar producto
@endsection

@section('form-body')
    <form method="post" action="{{ route('productos.store') }}">
        @csrf

        <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                Nombre
            </label>

            <div class="col-md-6">
                <input id="nombre" type="text"
                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                    value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="precio" class="col-md-4 col-form-label text-md-right">
                Precio
            </label>

            <div class="col-md-6">
                <input id="precio" type="precio"
                    class="form-control @error('precio') is-invalid @enderror" name="precio"
                    value="{{ old('precio') }}" required autocomplete="precio">

                @error('precio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="cantidad" class="col-md-4 col-form-label text-md-right">
                Cantidad
            </label>

            <div class="col-md-6">
                <input id="cantidad" type="cantidad"
                    class="form-control @error('cantidad') is-invalid @enderror" name="cantidad"
                    value="{{ old('cantidad') }}" required autocomplete="cantidad">

                @error('cantidad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="fecha_elaboracion" class="col-md-4 col-form-label text-md-right">
                Fecha de elaboración
            </label>

            <div class="col-md-6">
                <input id="fecha_elaboracion" type="fecha_elaboracion"
                    class="form-control @error('fecha_elaboracion') is-invalid @enderror"
                    name="fecha_elaboracion" value="{{ old('fecha_elaboracion') }}" required
                    autocomplete="fecha_elaboracion">

                @error('fecha_elaboracion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-5">
                <button type="submit" class="btn btn-primary">
                    Agregar
                </button>
            </div>
        </div>
    </form>
@endsection
