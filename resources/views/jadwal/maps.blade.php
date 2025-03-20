<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Sekolah - Sistem Penjadwalan Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #b3d9ff;"> <!-- Latar belakang biru muda -->

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
            <a class="nav-link" href="/jadwal-guru">Jadwal Guru</a> <!-- Tambahan menu Jadwal Guru -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/jadwal-piket">Jadwal Piket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kalender">Kalender</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="menuDropdown">
              <li><a class="dropdown-item" href="/profil">Profil Sekolah</a></li>
              <li><a class="dropdown-item" href="/maps">Maps Sekolah</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/bantuan">Bantuan</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Konten Lokasi Sekolah -->
  <div class="container mt-4">
    <h2 class="text-center">Lokasi Sekolah</h2>
    <div class="text-center">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1986.5723269543137!2d96.22461748402166!3d5.2399601677700485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040ba62de59a115%3A0x55956989a2f19cff!2sSD%20Negeri%20Beuracan!5e0!3m2!1sid!2sid!4v1742481680059!5m2!1sid!2sid" 
            width="100%" 
            height="450" 
            style="border:0; border-radius: 10px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
