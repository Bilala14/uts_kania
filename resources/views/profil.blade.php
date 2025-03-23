<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - Sistem Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #b3d9ff;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/beranda">Sistem Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="/jadwal-guru">Jadwal Guru</a></li>
          <li class="nav-item"><a class="nav-link" href="/jadwal-piket">Jadwal Piket</a></li>
          <li class="nav-item"><a class="nav-link" href="/kalender">Kalender</a></li>
          <!-- Dropdown Informasi -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown">
              Informasi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profil">Profil Sekolah</a></li>
              <li><a class="dropdown-item" href="/maps-sekolah">Maps Sekolah</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/bantuan">Bantuan</a></li>
            </ul>
          </li>
        </ul>
        <a href="/logout" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten Profil Sekolah -->
  <div class="container mt-5">
    <div class="card p-4 shadow-lg">
      <h2 class="fw-bold text-center">Profil SDN 4 Meureudu</h2>
      <p class="text-center"><i>"Membangun Generasi Cerdas dan Berkarakter"</i></p>
      <hr>
      <h4 class="mt-4">🏫 Foto Sekolah</h4>
      <div class="text-center">
        <img src="{{ asset('image/sekolah.png') }}" alt="Foto Sekolah SDN 4 Meureudu" class="img-fluid rounded shadow-lg" style="max-width: 80%;">
        <p class="mt-2 text-muted">Tampak depan SDN 4 Meureudu</p>
      </div>


      <h4 class="mt-4">📌 Tentang Sekolah</h4>
      <p>SDN 4 Meureudu adalah sekolah dasar yang berlokasi di Meureudu, Aceh. Sekolah ini didirikan dengan tujuan untuk memberikan pendidikan berkualitas kepada siswa dalam lingkungan yang kondusif dan mendukung perkembangan akademik serta karakter mereka.</p>

      <h4 class="mt-4">📚 Fasilitas</h4>
      <ul>
        <li>Ruang Kelas yang Nyaman</li>
        <li>Perpustakaan dengan Koleksi Buku Lengkap</li>
        <li>Lapangan Olahraga</li>
        <li>Laboratorium Komputer</li>
        <li>Ruang Guru dan Kantor Administrasi</li>
      </ul>

      <h4 class="mt-4">🎓 Visi & Misi</h4>
      <h5>🌟 Visi:</h5>
      <p>"Terwujudnya Peserta Didik Yang Beriman,Cerdas,Terampil,Mandiri,dan Berwawasan
        Global."</p>

        <h5>🎯 Misi:</h5>
        <ul>
            <li>Menanamkan keimanan dan ketakwaan melalui pengamalan ajaran agama.</li>
            <li>Mengoptimalkan proses pembelajaran dan bimbingan.</li>
            <li>Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan potensi peserta didik.</li>
            <li>Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan pengembangan diri yang terencana dan berkesinambungan.</li>
            <li>Menjalin kerja sama yang harmonis antara warga sekolah dan lembaga lainnya yang terkait.</li>
        </ul>
        

      <h4 class="mt-4">📍 Alamat</h4>
      <p>Desa Kuta Trieng
        Beuracan, Kecamatan Meureudu, Kabupaten Pidie Jaya, Provinsi Aceh.</p>

      <h4 class="mt-4">📞 Kontak</h4>
      <p>Email: sdnegeribeuracan@yahoo.com</p>
      <p>Operator: Misnawati</p>
    </div>
  </div>
  <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
    Copyright &copy; Kania Nabila Muntaz - 2025
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
