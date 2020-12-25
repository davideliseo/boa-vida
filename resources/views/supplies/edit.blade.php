@extends('layouts.app')

@section('content')
    <x-card.edit title="Editar insumo" resource="supplies" :item="$supply">
        <x-slot name="fields">
            <x-form.row.edit resource="supplies" key="name"          :item="$supply" />
            <x-form.row.edit resource="supplies" key="quantity"      :item="$supply" />
            <x-form.row.edit resource="supplies" key="price"         :item="$supply" />
            <x-form.row.edit resource="supplies" key="expiry_date"   :item="$supply" />
            <x-form.row.edit resource="supplies" key="purchase_date" :item="$supply" />
        </x-slot>
    </x-card.edit>
@endsection
