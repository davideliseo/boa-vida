@extends('layouts.app')

@section('content')
    <x-card.index resource="supplies" :collection="$collection">
        <x-slot name="table">
            <x-slot name="headers">
                    <x-table.header resource="supplies" key="name"  />
                    <x-table.header resource="supplies" key="quantity" />
                    <x-table.header resource="supplies" key="price" />
                    <x-table.header resource="supplies" key="expiry_date" />
                    <x-table.header resource="supplies" key="purchase_date" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($collection as $supply)
                    <tr>
                        <x-table.cell resource="supplies" key="name"          :item="$supply" />
                        <x-table.cell resource="supplies" key="quantity"      :item="$supply" />
                        <x-table.cell resource="supplies" key="price"         :item="$supply" />
                        <x-table.cell resource="supplies" key="expiry_date"   :item="$supply" />
                        <x-table.cell resource="supplies" key="purchase_date" :item="$supply" />
                        <td>
                            <x-table.row.actions resource="supplies" :item="$supply" />
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-slot>
    </x-card.index>
@endsection
