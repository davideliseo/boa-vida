@extends('layouts.app')

@section('content')
    <x-card.edit title="Editar venta" resource="sales" :item="$sale">
        <x-slot name="fields">
            <x-form.row.edit resource="sales" key="amount"              :item="$sale" />
            {{-- TODO: agregar un botón radial para elegir el estado de la venta --}}
            {{-- <x-form.row.edit resource="sales" key="status"              :item="$sale" /> --}}
            <x-form.row.edit resource="sales" key="client_name"         :item="$sale" />
            <x-form.row.edit resource="sales" key="client_phone_number" :item="$sale" />
        </x-slot>
    </x-card.edit>
@endsection
