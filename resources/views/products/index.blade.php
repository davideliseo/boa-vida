@extends('layouts.app')

@section('content')
    <x-card.index title="Productos" resource="products" :model="App\Models\Product::class" :collection="$collection">
        <x-slot name="table">
            <x-slot name="headers">
                @foreach (config("resources.products.fields") as $key => $value)
                    @if ($value['is-indexable'])
                        <x-table.header resource="products" :key="$key" />
                    @endif
                @endforeach
            </x-slot>
            <x-slot name="rows">
                @foreach ($collection as $product)
                    <tr>
                        <x-table.cell resource="products" key="name"               :item="$product" />
                        <x-table.cell resource="products" key="quantity"           :item="$product" />
                        <x-table.cell resource="products" key="price"              :item="$product" />
                        <x-table.cell resource="products" key="manufacturing_date" :item="$product" />
                        <x-table.cell resource="products" key="expiry_date"        :item="$product" />
                        <td>
                            <x-table.row.actions resource="products" :item="$product" />
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-slot>
    </x-card.index>
@endsection
