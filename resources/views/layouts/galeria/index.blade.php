@extends('layouts.menu')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            @yield('content-header')
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead> @yield('table-header') </thead>
                                <tbody> @yield('table-body') </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
