<div>
    <div class="d-flex align-items-center justify-content-between">
        <div class="font-weight-bold"> {{ $titulo }} </div>
        <div>
            <a class="btn {{ $btntipo }}" href="{{ route($btnruta) }}">
                {{ $btntexto }}
            </a>
        </div>
    </div>
</div>