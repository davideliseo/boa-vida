@extends('layouts.app')

@section('content')
    <x-card.index resource="suppliers" :collection="$collection">
        <x-slot name="table">
            <x-slot name="headers">
                    <x-table.header resource="suppliers" key="name" />
                    <x-table.header resource="suppliers" key="rut" />
                    <x-table.header resource="suppliers" key="email" />
                    <x-table.header resource="suppliers" key="address" />
                    <x-table.header resource="suppliers" key="phone_number" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($collection as $supplier)
                    <tr>
                        <x-table.cell resource="suppliers" key="name"         :item="$supplier" />
                        <x-table.cell resource="suppliers" key="rut"          :item="$supplier" />
                        <x-table.cell resource="suppliers" key="email"        :item="$supplier" />
                        <x-table.cell resource="suppliers" key="address"      :item="$supplier" />
                        <x-table.cell resource="suppliers" key="phone_number" :item="$supplier" />
                        <td>
                            <x-table.row.actions resource="suppliers" :item="$supplier" />
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-slot>
    </x-card.index>
@endsection
