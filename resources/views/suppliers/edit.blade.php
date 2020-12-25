@extends('layouts.app')

@section('content')
    <x-card.edit title="Editar proveedor" resource="suppliers" :item="$supplier">
        <x-slot name="fields">
            <x-form.row.edit resource="suppliers" key="name"         :item="$supplier" />
            <x-form.row.edit resource="suppliers" key="rut"          :item="$supplier" />
            <x-form.row.edit resource="suppliers" key="email"        :item="$supplier" />
            <x-form.row.edit resource="suppliers" key="address"      :item="$supplier" />
            <x-form.row.edit resource="suppliers" key="phone_number" :item="$supplier" />
        </x-slot>
    </x-card.edit>
@endsection
