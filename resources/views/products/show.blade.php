@extends('layouts.app')

@section('card-header')
    <x-header titulo="Ficha de producto" btntipo="btn-dark" btntexto="Atrás" btnruta="products.index" />
@endsection

@section('card-body')
    <x-sheet :item="$producto" :encabezados="\App\Models\Product::$indexables" btntexto="Editar" tabla="products" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
