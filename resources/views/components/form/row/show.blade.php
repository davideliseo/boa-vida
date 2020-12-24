@props(['inputType' => 'fake', 'resource', 'key', 'item' => null])

<x-form.row.base
    type="edit"
    :input-type="$inputType"
    :label='config("resources.${resource}.fields.${key}.label")'
    :icon='config("resources.${resource}.fields.${key}.icon")'
    :key="$key"
    {{-- Si el ítem no es nulo, se imprimirá el valor por defecto de la llave en el ítem,
    no importando si se proporiona el slot "value". --}}
    :item="$item"
    :is-required="null">

    <x-slot name="value">
        {{ $value ?? ''}}
    </x-slot>

</x-form.row.base>
