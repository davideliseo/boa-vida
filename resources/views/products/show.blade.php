@extends('layouts.app')

@section('content')
    <x-card.show title="Ficha de producto" resource="products" :item="$product">
        <x-slot name="fields">
            <x-form.row.show resource="products" key="id">
                <x-slot name="value">
                    {{ '#' . $product->id }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show resource="products" key="name" :item="$product" />
            <x-form.row.show resource="products" key="quantity" :item="$product" />

            <x-form.row.show resource="products" key="price">
                <x-slot name="value">
                    {{ '$' . $product->price }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show resource="products" key="manufacturing_date" :item="$product" />
            <x-form.row.show resource="products" key="expiry_date"        :item="$product" />
            <x-form.row.show resource="products" key="created_at"         :item="$product" />
            <x-form.row.show resource="products" key="updated_at"         :item="$product" />
        </x-slot>
    </x-card.show>
@endsection
