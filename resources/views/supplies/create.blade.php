@extends('layouts.app')

@section('content')
    <x-card.create title="Agregar producto" resource="products">
        <x-slot name="fields">
            <x-form.row.create label="Nombre"               icon="font_download"   key="name"               :is-required="true" />
            <x-form.row.create label="Cantidad"             icon="workspaces"      key="quantity"           :is-required="true" />
            <x-form.row.create label="Precio"               icon="attach_money"    key="price"              :is-required="true" />
            <x-form.row.create label="Fecha de elaboración" icon="event_available" key="manufacturing_date" />
            <x-form.row.create label="Fecha de vencimiento" icon="event_busy"      key="expiry_date"        />
        </x-slot>
    </x-card.create>
@endsection
