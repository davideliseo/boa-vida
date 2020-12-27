@props(['inputType' => 'text', 'untilToday' => null, 'resource', 'key', 'item'])

<x-form.row.base
    type="edit"
    :input-type="$inputType"
    :until-today="$untilToday"
    :label="config('resources.' . $resource . '.fields.' . $key . '.label')"
    :icon="config('resources.' . $resource . '.fields.' . $key . '.icon')"
    :model="null"
    :key="$key"
    :item="null"
    :is-required="config('resources.' . $resource . '.fields.' . $key . '.is-required') ?? false" />
