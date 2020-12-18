@extends('layouts.app')

@section('card-header')
    <x-header titulo="Proveedores" btntipo="btn-primary" btntexto="Agregar" btnruta="suppliers.create" />
@endsection

@section('card-body')
    <x-table tabla="suppliers" :encabezados="App\Models\Supplier::$indexables" :coleccion="\App\Models\Supplier::all()" />
@endsection

@section('content')
    <x-card ancho="12" />
@endsection
