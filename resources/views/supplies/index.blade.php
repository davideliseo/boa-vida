@extends('layouts.app')

@section('card-header')
    <x-header titulo="Insumos" btntipo="btn-primary" btntexto="Agregar" btnruta="supplies.create" />
@endsection

@section('card-body')
    <x-table tabla="supplies" :encabezados="App\Models\Supply::$indexables" :coleccion="\App\Models\Supply::all()" />
@endsection

@section('content')
    <x-card ancho="12" />
@endsection
