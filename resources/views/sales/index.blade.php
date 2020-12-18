@extends('layouts.app')

@section('card-header')
    <x-header titulo="Ventas" btntipo="btn-primary" btntexto="Agregar" btnruta="sales.create" />
@endsection

@section('card-body')
    <x-table tabla="sales" :encabezados="App\Models\Sale::$indexables" :coleccion="\App\Models\Sale::all()" />
@endsection

@section('content')
    <x-card ancho="12" />
@endsection
