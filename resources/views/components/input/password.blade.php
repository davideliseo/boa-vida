<div>
    <div class="form-group row">
        <label for="password" class="col-md-5 col-form-label text-md-left">
            <x-icon-label label="Contraseña" icon="vpn_key" pr="3" md="auto" />
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
        <label for="password-confirm" class="col-md-5 col-form-label text-md-left">
            <x-icon-label label="Confirmar contraseña" icon="privacy_tip" pr="3" md="auto" />
        </label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                   autocomplete="new-password">
        </div>
    </div>
</div>
