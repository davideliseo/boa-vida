@extends('layouts.app')

@section('card-header')
    <x-header title="Ficha de proveedor" btntype="btn-dark" btntext="Atrás" btnroute="suppliers.index"/>
@endsection

@section('card-body')
    <x-sheet :item="$supplier" :headers="\App\Models\Supplier::$indexables" btntext="Editar" table="suppliers"/>
@endsection

@section('content')
    <x-card width="8"/>
@endsection
