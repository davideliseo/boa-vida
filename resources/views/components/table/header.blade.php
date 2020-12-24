@props(['resource', 'key'])

<th scope="col" class='text-{{ config("resources.${resource}.fields.${key}.text-align") }}'>
    {{ config("resources.${resource}.fields.${key}.label") }}
</th>
