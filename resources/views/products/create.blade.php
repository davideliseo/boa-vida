@extends('layouts.app')

@section('content')
    <x-card.create title="Agregar producto" resource="products">
        <x-slot name="fields">
            <x-form.row.create resource="products" key="name" />
            <x-form.row.create resource="products" key="quantity" />
            <x-form.row.create resource="products" key="price" />
            <x-form.row.create resource="products" key="manufacturing_date" />
            <x-form.row.create resource="products" key="expiry_date" />
        </x-slot>
    </x-card.create>
@endsection
