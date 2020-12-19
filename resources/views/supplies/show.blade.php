@extends('layouts.app')

@section('card-header')
    <x-header title="Ficha de insumo" btntype="btn-dark" btntext="Atrás" btnroute="supplies.index" />
@endsection

@section('card-body')
    <x-sheet :item="$supply" :headers="\App\Models\Supply::$indexables" btntext="Editar" table="supplies" />
@endsection

@section('content')
    <x-card width="8" />
@endsection
