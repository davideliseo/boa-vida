@extends('layouts.app')

@section('content')
    <x-card.create title="Agregar proveedor" resource="supplier">
        <x-slot name="fields">
            <x-form.row.create resource="supplier" key="name" />
            <x-form.row.create resource="supplier" key="rut" />
            <x-form.row.create resource="supplier" key="email" />
            <x-form.row.create resource="supplier" key="address" />
            <x-form.row.create resource="supplier" key="phone_number" />
        </x-slot>
    </x-card.create>
@endsection
