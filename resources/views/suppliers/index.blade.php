@extends('layouts.app')

@section('card-header')
    <x-header title="Proveedores" btntype="btn-primary" btntext="Agregar" btnroute="suppliers.create"/>
@endsection

@section('card-body')
    <x-table table="suppliers" :headers="App\Models\Supplier::$indexables" :collection="\App\Models\Supplier::all()"/>
@endsection

@section('content')
    <x-card width="12"/>
@endsection
