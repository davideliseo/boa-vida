@extends('layouts.app')

@section('card-header')
    <x-header titulo="Agregar producto" btntipo="btn-dark" btntexto="Atrás" btnruta="products.index" />
@endsection

@section('card-body')
    <x-form ruta="products.store" btntexto="Agregar" :encabezados="\App\Models\Product::$indexables" :item="null" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
