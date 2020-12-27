@extends('layouts.app')

@section('content')
    <x-card.edit title="Editar producto" resource="products" :item="$product">
        <x-slot name="fields">
            <x-form.row.edit resource="products" key="name"               :item="$product" />
            <x-form.row.edit resource="products" key="quantity"           :item="$product" />
            <x-form.row.edit resource="products" key="price"              :item="$product" />
            <x-form.row.edit resource="products" key="manufacturing_date" :item="$product" input-type="date" :until-today="true" />
            <x-form.row.edit resource="products" key="expiry_date"        :item="$product" input-type="date" :until-today="false" />
        </x-slot>
    </x-card.edit>
@endsection
