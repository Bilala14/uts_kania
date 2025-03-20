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
            <td>Rosmiati, S.Pd, Mulidayani, S.Pd, Darniati, S.Pd</td>
            <td>07:00 - 12:00</td>
          </tr>
          <tr>
            <td>Selasa</td>
            <td>Nuriala, S.Pd, Mawarni, S.Pd, Yurniati, S.Pd</td>
            <td>07:00 - 12:00</td>
          </tr>
          <tr>
            <td>Rabu</td>
            <td>Mardiana, S.Pd, Farhayati, S.Pd, Cut Misni, S.Pd</td>
            <td>07:00 - 12:00</td>
          </tr>
          <tr>
            <td>Kamis</td>
            <td>Yurniati, S.Pd, Sumiati, S.Pd, Mulidayani, S.Pd</td>
            <td>07:00 - 12:00</td>
          </tr>
          <tr>
            <td>Jumat</td>
            <td>Sri Wahyuni, S.Pd, Afdhal Muliani, S.Pd.I, Agamal, S.Pd</td>
            <td>07:00 - 11:00</td>
          </tr>
          <tr>
            <td>Sabtu</td>
            <td>Dinaiti, S.Pd, Ekawati, S.Pd, Mawarni, S.Pd</td>
            <td>07:00 - 12:00</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Catatan Tugas -->
    <div class="mt-4">
      <h4>Catatan Tugas Piket:</h4>
      <ul>
        <li>Menyambut Siswa di depan pagar sekolah setiap pagi.</li>
        <li>Mempersiapkan kegiatan pagi sebelum belajar setiap hari seperti senam,literasi,muhadharah,dan Yasinan.</li>
        <li>Mengawasi kedisiplinan siswa di sekolah.</li>
        <li>Menjaga kebersihan dan kerapihan lingkungan sekolah.</li>
        <li>Mengkoordinasikan ketertiban saat jam istirahat.</li>
        <li>Mengisi laporan harian piket guru.</li>
      </ul>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
