<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Piket Guru - Sistem Sekolah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b3d9ff;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            max-width: 900px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .table {
            width: 100%;
            text-align: center;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="beranda">Sistem Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/jadwal-guru">Jadwal Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/jadwal-piket">Jadwal Piket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kalender">Kalender</a>
          </li>
        </ul>
        <a href="/logout" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten Jadwal Piket -->
  <div class="container">
    <h2 class="text-center">Jadwal Piket Guru</h2>
    <p class="text-center">Berikut adalah jadwal piket guru untuk minggu ini.</p>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Hari</th>
            <th>Nama Guru</th>
            <th>Jam Piket</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Senin</td>
            <td>Ahmad Syarif</td>
            <td>07:00 - 10:00</td>
          </tr>
          <tr>
            <td>Selasa</td>
            <td>Afdhal Muliani, Spd.I</td>
            <td>09:00 - 12:00</td>
          </tr>
          <tr>
            <td>Rabu</td>
            <td>Fitriani Rahma</td>
            <td>08:00 - 11:00</td>
          </tr>
          <tr>
            <td>Kamis</td>
            <td>Nurul Hidayah</td>
            <td>07:30 - 10:30</td>
          </tr>
          <tr>
            <td>Jumat</td>
            <td>Rahmat Hidayat</td>
            <td>09:00 - 11:00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
