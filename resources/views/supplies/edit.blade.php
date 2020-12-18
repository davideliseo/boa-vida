@extends('layouts.app')

@section('card-header')
    <x-header titulo="Editar insumo" btntipo="btn-dark" btntexto="Atrás" btnruta="supplies.index" />
@endsection

@section('card-body')
    <x-form ruta="supplies.update" btntexto="Editar" :encabezados="\App\Models\Supply::$indexables"
        :item="$supply" />
@endsection

@section('content')
    <x-card :ancho="8" />
@endsection
