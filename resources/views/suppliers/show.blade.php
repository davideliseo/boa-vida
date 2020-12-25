@extends('layouts.app')

@section('content')
    <x-card.show title="Ficha de proveedor" resource="suppliers" :item="$supplier">
        <x-slot name="fields">
            <x-form.row.show resource="suppliers" key="id">
                <x-slot name="value">
                    {{ '#' . $supplier->id }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show resource="suppliers" key="name"         :item="$supplier" />
            <x-form.row.show resource="suppliers" key="rut"          :item="$supplier" />
            <x-form.row.show resource="suppliers" key="email"        :item="$supplier" />
            <x-form.row.show resource="suppliers" key="address"      :item="$supplier" />
            <x-form.row.show resource="suppliers" key="phone_number" :item="$supplier" />
            <x-form.row.show resource="suppliers" key="created_at"   :item="$supplier" />
            <x-form.row.show resource="suppliers" key="updated_at"   :item="$supplier" />
        </x-slot>
    </x-card.show>
@endsection
