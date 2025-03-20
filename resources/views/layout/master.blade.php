<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b3d9ff;
            margin: 0;
            padding: 0;
        }
        .container-content {
            margin-top: 80px; /* Supaya tidak tertutup navbar */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/beranda') }}">Sistem Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="{{ url('/jadwal-guru') }}">Jadwal Guru</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/jadwal-piket') }}">Jadwal Piket</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/kalender') }}">Kalender</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown">
              Informasi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/profil') }}">Profil Sekolah</a></li>
              <li><a class="dropdown-item" href="{{ url('/maps-sekolah') }}">Maps Sekolah</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('/bantuan') }}">Bantuan</a></li>
            </ul>
          </li>
        </ul>
        <a href="{{ url('/logout') }}" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten Halaman -->
  <div class="container container-content">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
