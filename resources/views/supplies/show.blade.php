@extends('layouts.app')

@section('card-header')
    <x-header titulo="Ficha de insumo" btntipo="btn-dark" btntexto="Atrás" btnruta="supplies.index" />
@endsection

@section('card-body')
    <x-sheet :item="$supply" :encabezados="\App\Models\Supply::$indexables" btntexto="Editar" tabla="supplies" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
