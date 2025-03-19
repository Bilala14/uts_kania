<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Kegiatan Guru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/id.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                initialView: 'dayGridMonth',
                events: [
                    { title: 'Rapat Guru', start: '2025-03-01' },
                    { title: 'Libur Nasional', start: '2025-04-01' },
                    { title: 'Rapat Guru', start: '2025-04-05', end: '2025-04-05' },
                    { title: 'Acara Sekolah', start: '2025-04-10' }
                ]
            });
            calendar.render();
        });
    </script>
    <style>
        body {
            background-color: #b3daff;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #calendar {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
    display: inline-block;
    padding: 8px 16px;
    background-color: #d3d3d3; /* Warna abu-abu muda */
    color: black;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    border: none;
    margin-top: 10px; 
}

.btn-custom:hover {
    background-color: #b0b0b0; /* Warna abu-abu sedikit lebih gelap saat hover */
}

    </style>
</head>
<body>
    <h2>Kalender Kegiatan Guru</h2>
    <div id="calendar"></div>
    <a href="/jadwal-guru" class="btn btn-lg btn-custom">Kembali ke Jadwal Guru</a>

</body>
</html>
