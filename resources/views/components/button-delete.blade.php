<form method="POST" action="{{ route($resource.'.destroy', $item) }}">
    @csrf
    @method('delete')
    <button type="submit" class="btn-v2 btn-deg-red shadow-sm">
        Eliminar
    </button>
</form>
