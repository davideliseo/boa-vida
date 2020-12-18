@extends('layouts.app')

@section('card-header')
    <x-header titulo="Editar proveedor" btntipo="btn-dark" btntexto="Atrás" btnruta="suppliers.index" />
@endsection

@section('card-body')
    <x-form ruta="suppliers.update" btntexto="Editar" :encabezados="\App\Models\Supplier::$indexables"
        :item="$proveedor" />
@endsection

@section('content')
    <x-card :ancho="8" />
@endsection
