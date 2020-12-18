@extends('layouts.app')

@section('card-header')
    <x-header titulo="Agregar venta" btntipo="btn-dark" btntexto="Atrás" btnruta="sales.index" />
@endsection

@section('card-body')
    <x-form ruta="sales.store" btntexto="Agregar" :encabezados="\App\Models\Sale::$indexables" :item="null" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
