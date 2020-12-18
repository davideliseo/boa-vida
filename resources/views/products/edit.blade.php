@extends('layouts.app')

@section('card-header')
    <x-header titulo="Editar producto" btntipo="btn-dark" btntexto="Atrás" btnruta="products.index" />
@endsection

@section('card-body')
    <x-form ruta="products.update" btntexto="Editar" :encabezados="\App\Models\Product::$indexables"
        :item="$producto" />
@endsection

@section('content')
    <x-card :ancho="8" />
@endsection
