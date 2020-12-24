@extends('layouts.app')

@section('card-header')
    <x-header title="Editar proveedor" btntype="btn-dark" btntext="Atrás" btnroute="suppliers.index"/>
@endsection

@section('card-body')
    <x-form route="suppliers.update" btntext="Editar" :headers="\App\Models\Supplier::$indexables"
        :item="$proveedor"/>
@endsection

@section('content')
    <x-card :width="8"/>
@endsection
