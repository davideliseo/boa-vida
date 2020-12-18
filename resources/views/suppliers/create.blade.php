@extends('layouts.app')

@section('card-header')
    <x-header titulo="Agregar proveedor" btntipo="btn-dark" btntexto="Atrás" btnruta="suppliers.index" />
@endsection

@section('card-body')
    <x-form ruta="suppliers.store" btntexto="Agregar" :encabezados="\App\Models\Supplier::$indexables" :item="null" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
