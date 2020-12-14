@extends('layouts.menu')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@yield('form-header')</div>
                    <div class="card-body">@yield('form-body')</div>
                </div>
            </div>
        </div>
    </div>
@endsection
