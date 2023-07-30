@extends('layouts.app2')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-end">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Ponto') }}</div>

                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/index.global.min.js'></script>
<script src='fullcalendar/core/index.global.js'></script>
<script src='fullcalendar/core/locales/pt.global.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

            initialView: 'timeGridWeek',
            editable: true,
            locale: 'pt',
            timeZone: 'America/Fortaleza',
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>

     