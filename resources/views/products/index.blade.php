@extends('layouts.app')

@section('card-header')
    <x-header titulo="Productos" btntipo="btn-deg-green-2" btntexto="Agregar" btnruta="products.create" />
@endsection

@section('card-body')
    <x-table tabla="products" :encabezados="App\Models\Product::$indexables" :coleccion="\App\Models\Product::all()" />
@endsection

@section('content')
    <x-card ancho="12" />
@endsection
