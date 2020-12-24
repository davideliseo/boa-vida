@extends('layouts.app')

@section('content')
    <x-card.edit title="Editar producto" resource="products" :item="$product">
        <x-slot name="fields">
            <x-form.row.edit label="Nombre"               icon="font_download"   key="name"               :item="$product" :is-required="true" />
            <x-form.row.edit label="Cantidad"             icon="workspaces"      key="quantity"           :item="$product" :is-required="true" />
            <x-form.row.edit label="Precio"               icon="attach_money"    key="price"              :item="$product" :is-required="true" />
            <x-form.row.edit label="Fecha de elaboración" icon="event_available" key="manufacturing_date" :item="$product" />
            <x-form.row.edit label="Fecha de vencimiento" icon="event_busy"      key="expiry_date"        :item="$product" />
        </x-slot>
    </x-card.edit>
@endsection
