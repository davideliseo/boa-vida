@extends('layouts.app')

@section('content')
    <x-card.index title="Productos" resource="products" collection-name="productos" :collection="$collection" :model="App\Models\Product::class">
        <x-slot name="table">
            <x-slot name="headers">
                <th scope="col" class="text-left"> {{ __('Nombre') }} </th>
                <th scope="col" class="text-left"> {{ __('Cantidad') }} </th>
                <th scope="col" class="text-left"> {{ __('Precio') }} </th>
                <th scope="col" class="text-left"> {{ __('Fecha de elaboración') }} </th>
                <th scope="col" class="text-left"> {{ __('Fecha de vencimiento') }} </th>
            </x-slot>
            <x-slot name="rows">
                @foreach ($collection as $product)
                    <tr>
                        <td scope="col" class="text-left"> {{ $product->name }} </td>
                        <td scope="col" class="text-left"> {{ $product->quantity }} </td>
                        <td scope="col" class="text-left"> {{ $product->price }} </td>
                        <td scope="col" class="text-left"> {{ $product->manufacturing_date }} </td>
                        <td scope="col" class="text-left"> {{ $product->expiry_date }} </td>
                        <td>
                            <x-table.row.actions resource="products" :item="$product" />
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-slot>
    </x-card.index>
@endsection
