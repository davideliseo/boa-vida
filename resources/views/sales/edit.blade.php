@extends('layouts.app')

@section('card-header')
    <x-header titulo="Editar venta" btntipo="btn-dark" btntexto="Atrás" btnruta="sales.index" />
@endsection

@section('card-body')
    <x-form ruta="sales.update" btntexto="Editar" :encabezados="\App\Models\Sale::$indexables"
        :item="$venta" />
@endsection

@section('content')
    <x-card :ancho="8" />
@endsection
