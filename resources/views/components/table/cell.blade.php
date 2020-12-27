@props(['resource', 'key', 'item'])

<td scope="col" class='text-{{ config("resources.${resource}.fields.${key}.text-align") }}'>
    {{ config("resources.${resource}.model")::format($key, $item[$key]) }}
</td>
