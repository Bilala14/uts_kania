@extends('layout.master')

@section('title', 'Kalender Kegiatan Guru')

@section('content')
<div class="container text-center mt-4">
    <h2>Kalender Kegiatan Guru</h2>
    <div id="calendar"></div>
</div>

<style>
    /* Warna latar belakang halaman  */
    body {
        background-color: #b3daff; 
        font-family: Arial, sans-serif;
    }
    
    #calendar {
        max-width: 600px;
        margin: 10px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
        display: inline-block;
        padding: 8px 16px;
        background-color: #d3d3d3;
        color: black;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        border: none;
        margin-top: 10px;
    }
    .btn-custom:hover {
        background-color: #b0b0b0;
    }
</style>

<!-- FullCalendar & Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/id.js"></script>
<
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'id',
            initialView: 'dayGridMonth',
            aspectRatio: 1.5,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [
                { title: 'Rapat Guru', start: '2025-03-01' },
                { title: 'Libur Nasional', start: '2025-03-15' },
                { title: 'Rapat Guru', start: '2025-04-05' },
                { title: 'Acara Sekolah', start: '2025-03-10' }
            ]
        });
        calendar.render();
    });

    
</script>
<footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
    Copyright &copy; Kania Nabila Muntaz - 2025
</footer>
@endsection
