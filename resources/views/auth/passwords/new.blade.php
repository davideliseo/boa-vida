@extends('layouts.app')

@section('content')
    <x-card.base type="form-like" title="Ingresar nueva contraseña">
        <x-slot name="body">
            <form method="post" action="{{ route('password.update') }}">
                @csrf
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">
                        Contraseña
                    </label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                        Confirmar contraseña
                    </label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required autocomplete="new-password">
                    </div>
                </div>


            </form>
        </x-slot>
        <x-slot name="footer">
            <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn-v2 btn-deg-dark-blue">
                            Confirmar
                        </button>
                    </div>
                </div>
        </x-slot>
    </x-card.base>
@endsection
