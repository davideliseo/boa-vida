@extends('layouts.app')

@section('content')
    <x-card.show title="Ficha de insumo" resource="supplies" :item="$supply">
        <x-slot name="fields">
            <x-form.row.show resource="supplies" key="id">
                <x-slot name="value">
                    {{ '#' . $supply->id }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show resource="supplies" key="name" :item="$supply" />
            <x-form.row.show resource="supplies" key="quantity" :item="$supply" />

            <x-form.row.show resource="supplies" key="price">
                <x-slot name="value">
                    {{ '$' . $supply->price }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show resource="supplies" key="expiry_date"   :item="$supply" />
            <x-form.row.show resource="supplies" key="purchase_date" :item="$supply" />
            <x-form.row.show resource="supplies" key="created_at"    :item="$supply" />
            <x-form.row.show resource="supplies" key="updated_at"    :item="$supply" />
        </x-slot>
    </x-card.show>
@endsection
