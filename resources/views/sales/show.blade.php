@extends('layouts.app')

@section('content')
    <x-card.show title="Ficha de venta" resource="sales" :item="$sale">
        <x-slot name="fields">
            <x-form.row.show resource="sales" key="id"                  :item="$sale" />
            <x-form.row.show resource="sales" key="amount"              :item="$sale" />
            <x-form.row.show resource="sales" key="status"              :item="$sale" />
            <x-form.row.show resource="sales" key="client_name"         :item="$sale" />
            <x-form.row.show resource="sales" key="client_phone_number" :item="$sale" />
            <x-form.row.show resource="sales" key="created_at"          :item="$sale" />
            <x-form.row.show resource="sales" key="updated_at"          :item="$sale" />
        </x-slot>
    </x-card.show>
@endsection
