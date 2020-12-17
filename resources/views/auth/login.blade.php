@extends('layouts.app')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow" style="border-radius: 0.5rem 0.5rem 0rem 0rem;">
                    <div class="card-body p-4" style="background: linear-gradient(0deg, #dcdcdc 0%, white 10%); border-radius: 0.5rem 0.5rem 0rem 0rem; border-bottom: 0px;">
                        <img class="mx-auto d-block" src="/img/logo.png" width="50%" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card text-light bg-dark shadow">
                    <div class="card-header p-3">
                        <strong>Iniciar sesión</strong>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    Correo electrónico
                                </label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Contraseña
                                </label>

                                <div class="col-md-7">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-middle">
                                <div class="col-md-7 offset-md-4">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                               {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-md-7 offset-md-4">
                                    <button type="submit" class="btn-v2 btn-deg-dark-blue">
                                        Iniciar sesión
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link pt-2" href="{{ route('password.request') }}">
                                            ¿Olvidó su contraseña?
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow"
                     style="background: linear-gradient(180deg, #c1c0c0 0%, white 82%); border-radius: 0rem 0rem 0.5rem 0.5rem; border-top: 0px;">
                    <div class="card-body p-3" style=" border-radius: 0rem 0rem 0.5rem 0.5rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
