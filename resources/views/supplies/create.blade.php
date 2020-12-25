@extends('layouts.app')

@section('content')
    <x-card.create title="Agregar insumo" resource="supplies">
        <x-slot name="fields">
            <x-form.row.create resource="supplies" key="name" />
            <x-form.row.create resource="supplies" key="quantity" />
            <x-form.row.create resource="supplies" key="price" />
            <x-form.row.create resource="supplies" key="expiry_date" />
            <x-form.row.create resource="supplies" key="purchase_date" />
        </x-slot>
    </x-card.create>
@endsection
