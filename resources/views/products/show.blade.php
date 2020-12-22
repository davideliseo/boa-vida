@extends('layouts.app')

@section('card-header')
    <div class="d-flex align-items-center justify-content-between">
        {{-- Título --}}
        <div class="font-weight-bold"> Productos </div>
        {{-- Botón atrás --}}
        <x-button-back />
    </div>
@endsection

@section('card-body')
    <div>
        {{-- Campo nombre --}}
        <div class="row row justify-content-center">
            <div class="col-md-6 text-md-right pb-4 font-weight-bold">Nombre:</div>
            <div class="col-md-6 pb-4"> {{ $product->name }} </div>
        </div>

        {{-- Campo cantidad --}}
        <div class="row row justify-content-center">
            <div class="col-md-6 text-md-right pb-4 font-weight-bold">Cantidad:</div>
            <div class="col-md-6 pb-4"> {{ $product->quantity }} </div>
        </div>

        {{-- Campo precio --}}
        <div class="row row justify-content-center">
            <div class="col-md-6 text-md-right pb-4 font-weight-bold">Precio:</div>
            <div class="col-md-6 pb-4"> {{ $product->price }} </div>
        </div>

        {{-- Campo fecha de elaboración --}}
        <div class="row row justify-content-center">
            <div class="col-md-6 text-md-right pb-4 font-weight-bold">Fecha de elaboración:</div>
            <div class="col-md-6 pb-4"> {{ $product->manufacturing_date }} </div>
        </div>

        {{-- Campo fecha de vencimiento --}}
        <div class="row row justify-content-center">
            <div class="col-md-6 text-md-right pb-4 font-weight-bold">Fecha de vencimiento:</div>
            <div class="col-md-6 pb-4"> {{ $product->expiry_date }} </div>
        </div>

        {{-- Pie de tarjeta --}}
        <div class="row justify-content-center">
            {{-- Botón editar --}}
            @can('update', $product)
                <div class="col-md-6 text-md-right pr-2 pt-2">
                    <x-button-update resource="products" :item="$product" />
                </div>
            @endcan

            {{-- Botón eliminar --}}
            @can('delete', $product)
                <div class="col-md-6 pt-2">
                    <x-button-delete resource="products" :item="$product" />
                </div>
            @endcan
        </div>
    </div>
@endsection

@section('content')
    <div class="container pt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    {{-- Encabezado de tarjeta --}}
                    <div class="card-header"> @yield('card-header') </div>
                    {{-- Cuerpo de tarjeta --}}
                    <div class="card-body"> @yield('card-body') </div>
                </div>
            </div>
        </div>
    </div>
@endsection
