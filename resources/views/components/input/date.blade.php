@props(['key', 'item', 'isRequired' => false, 'untilToday' => null])

<div class="col-md-6">
    <input type="text" class="form-control datepicker" data-date-end-date="{{ $untilToday ? 'today' : 'Infinity' }}"
           id="{{ $key }}" name="{{ $key }}" value="{{ old($key) ?? ($item[$key] ?? null) }}">
</div>

<script>
    $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
            "Octubre", "Noviembre", "Diciembre"
        ],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy",
        monthsTitle: "Meses",
        clear: "Borrar",
        weekStart: 1,
        format: "dd-mm-yyyy"
    };

    $('.datepicker').datepicker({
        todayBtn: "linked",
        maxViewMode: 2,
        clearBtn: true,
        todayHighlight: true,
        assumeNearbyYear: true,
        enableOnReadonly: false,
        templates: {
            leftArrow: '<i class="material-icons-round md-18" style="display:table-cell;"> arrow_back </i>',
            rightArrow: '<i class="material-icons-round md-18" style="display:table-cell;"> arrow_forward </i>'
        },
        language: "es",
    });

</script>
