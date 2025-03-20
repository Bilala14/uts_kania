<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda - Sistem Penjadwalan Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b3d9ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            width: 80%;
            max-width: 900px;
            padding: 40px;
        }
    </style>
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 position-absolute top-0">
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
            <a class="nav-link" href="/jadwal-piket">Jadwal Piket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kalender">Kalender</a>
          </li>
          <!-- Dropdown Informasi -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
              <li><a class="dropdown-item" href="/profil">Profil Sekolah</a></li>
              <li><a class="dropdown-item" href="/maps-sekolah">Maps Sekolah</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/bantuan">Bantuan</a></li>
            </ul>
          </li>
        </ul>

        <!-- Tombol Logout -->
        <a href="/logout" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <div class="card shadow-lg text-center">
    <h1 class="fw-bold">Selamat Datang di Sistem Penjadwalan Guru SDN 4 Meureudu</h1>
    <p class="mt-4">Sistem ini digunakan untuk melihat jadwal mengajar guru di sekolah dasar.</p>
    <a href="/jadwal-guru" class="btn btn-primary">Lihat Jadwal Guru</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
