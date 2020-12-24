@extends('layouts.app')

@section('card-header')
    <x-header title="Agregar proveedor" btntype="btn-dark" btntext="Atrás" btnroute="suppliers.index"/>
@endsection

@section('card-body')
    <x-form route="suppliers.store" btntext="Agregar" :headers="\App\Models\Supplier::$indexables" :item="null"/>
@endsection

@section('content')
    <x-card width="8"/>
@endsection
