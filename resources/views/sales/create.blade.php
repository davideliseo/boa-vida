@extends('layouts.app')

@section('content')
    <x-card.create title="Agregar venta" resource="sales">
        <x-slot name="fields">
            <x-form.row.create resource="sales" key="amount" />
            {{-- TODO: agregar un botón radial para elegir el estado de la venta --}}
            {{-- <x-form.row.create resource="sales" key="status"           /> --}}
            <x-form.row.create resource="sales" key="client_name" />
            <x-form.row.create resource="sales" key="client_phone_number" />
        </x-slot>
    </x-card.create>
@endsection
