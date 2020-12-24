@extends('layouts.app')

@section('content')
    <x-card.index title="Ventas" resource="sales" :model="App\Models\Sale::class" :collection="$collection">
        <x-slot name="table">
            <x-slot name="headers">
                    <x-table.header resource="sales" key="amount" />
                    <x-table.header resource="sales" key="status" />
                    <x-table.header resource="sales" key="client_name" />
                    <x-table.header resource="sales" key="client_phone_number" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($collection as $sale)
                    <tr>
                        <x-table.cell resource="sales" key="amount"              :item="$sale" />
                        <x-table.cell resource="sales" key="status"              :item="$sale" />
                        <x-table.cell resource="sales" key="client_name"         :item="$sale" />
                        <x-table.cell resource="sales" key="client_phone_number" :item="$sale" />
                        <td>
                            <x-table.row.actions resource="sales" :item="$sale" />
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-slot>
    </x-card.index>
@endsection
