<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Kegiatan Guru</title>

    <!-- Bootstrap & FullCalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #b3daff;
            font-family: Arial, sans-serif;
        }
        #calendar {
            max-width: 500px;
            margin: 20px auto;
            background: white;
            padding: 15px;
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
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/beranda">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/jadwal-guru">Jadwal Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jadwal-piket">Jadwal Piket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/kalender">Kalender</a>
                    </li>
                </ul>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Konten Kalender -->
    <div class="container text-center mt-4">
        <h2>Kalender Kegiatan Guru</h2>
        <div id="calendar"></div>
        <a href="/jadwal-guru" class="btn btn-lg btn-custom">Kembali ke Jadwal Guru</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/id.js"></script>

    <script>
        window.onload = function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                initialView: 'dayGridMonth',
                events: [
                    { title: 'Rapat Guru', start: '2025-03-01' },
                    { title: 'Libur Nasional', start: '2025-03-15' },
                    { title: 'Rapat Guru', start: '2025-04-05' },
                    { title: 'Acara Sekolah', start: '2025-03-10' }
                ]
            });
            calendar.render();
        };
    </script>

</body>
</html>
