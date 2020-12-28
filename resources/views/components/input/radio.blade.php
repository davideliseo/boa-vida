@props(['key', 'item', 'isRequired'])

<div class="col-md-6">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-primary active">
            <input type="radio" name="status" id="status1" value="completed" autocomplete="off" checked>
            {{ __('Completada') }}
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="status" id="status2" value="pending" autocomplete="off">
            {{ __('Pendiente') }}
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="status" id="status3" value="failed" autocomplete="off">
            {{ __('Fallida') }}
        </label>
    </div>
</div>
