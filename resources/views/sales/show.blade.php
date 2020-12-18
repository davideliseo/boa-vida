@extends('layouts.app')

@section('card-header')
    <x-header titulo="Ficha de venta" btntipo="btn-dark" btntexto="Atrás" btnruta="sales.index" />
@endsection

@section('card-body')
    <x-sheet :item="$venta" :encabezados="\App\Models\Sale::$indexables" btntexto="Editar" tabla="sales" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
