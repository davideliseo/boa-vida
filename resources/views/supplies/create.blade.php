@extends('layouts.app')

@section('card-header')
    <x-header titulo="Agregar insumo" btntipo="btn-dark" btntexto="Atrás" btnruta="supplies.index" />
@endsection

@section('card-body')
    <x-form ruta="supplies.store" btntexto="Agregar" :encabezados="\App\Models\Supply::$indexables" :item="null" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
