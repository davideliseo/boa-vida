@extends('layouts.app')

@section('card-header')
    <x-header titulo="Ficha de proveedor" btntipo="btn-dark" btntexto="Atrás" btnruta="suppliers.index" />
@endsection

@section('card-body')
    <x-sheet :item="$supplier" :encabezados="\App\Models\Supplier::$indexables" btntexto="Editar" tabla="suppliers" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection
