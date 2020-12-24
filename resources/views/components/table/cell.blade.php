@props(['resource', 'key', 'item'])

<td scope="col" class='text-{{ config("resources.${resource}.fields.${key}.text-align") }}'>
    {{ $item[$key] }}
</td>
