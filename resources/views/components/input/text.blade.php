@props(['key', 'item', 'isRequired'])

<div>
    <input id="{{ $key }}" type="text" class="form-control @error($key) is-invalid @enderror"
        name="{{ $key }}" value="{{ old($key) ?? ($item[$key] ?? null) }}"
        @if ($isRequired) required @endif
        autocomplete="{{ $key }}" autofocus>

        @error($key)
            <span class="text-danger" role="alert">
                <div class="d-flex pt-1">
                    <small>{{ $message }}</small>
                </div>
            </span>
        @enderror
</div>
