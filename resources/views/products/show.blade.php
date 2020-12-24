@extends('layouts.app')

@section('content')
    <x-card.show title="Ficha de producto" resource="products" :item="$product">
        <x-slot name="fields">
            <x-form.row.show label="ID" icon="qr_code" key="id">
                <x-slot name="value">
                    {{ '#' . $product->id }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Nombre" icon="font_download" key="name">
                <x-slot name="value">
                    {{ $product->name }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Cantidad" icon="workspaces" key="quantity">
                <x-slot name="value">
                    {{ $product->quantity }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Precio" icon="attach_money" key="price">
                <x-slot name="value">
                    {{ '$' . $product->price }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Fecha de elaboración" icon="event_available" key="manufacturing_date">
                <x-slot name="value">
                    {{ $product->manufacturing_date }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Fecha de vencimiento" icon="event_busy" key="expiry_date">
                <x-slot name="value">
                    {{ $product->expiry_date }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Fecha de creación" icon="more_time" key="created_at">
                <x-slot name="value">
                    {{ $product->created_at }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show label="Fecha de modificación" icon="update" key="updated_at">
                <x-slot name="value">
                    {{ $product->updated_at }}
                </x-slot>
            </x-form.row.show>
        </x-slot>
    </x-card.show>
@endsection
