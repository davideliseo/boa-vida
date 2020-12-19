@extends('layouts.app')

@section('card-header')
    <x-header title="Ficha de venta" btntype="btn-dark" btntext="Atrás" btnroute="sales.index" />
@endsection

@section('card-body')
    <x-sheet :item="$venta" :headers="\App\Models\Sale::$indexables" btntext="Editar" table="sales" />
@endsection

@section('content')
    <x-card width="8" />
@endsection
