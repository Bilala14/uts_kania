<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - Sistem Penjadwalan Guru</title>
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
            <a class="nav-link" href="/jadwal-guru">Jadwal Guru</a>
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
              <li><a class="dropdown-item" href="/maps-sekolah">Maps Sekolah</a></li>
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

  <!-- Konten Bantuan -->
  <div class="container mt-4">
    <h2 class="text-center">Bantuan</h2>
    
    <div class="card shadow-lg p-4">
      <h4>🛠️ Cara Menggunakan Sistem</h4>
      <p>Berikut adalah langkah-langkah dasar dalam menggunakan sistem penjadwalan guru:</p>
      <ol>
        <li>Buka halaman <strong>Jadwal Guru</strong> untuk melihat jadwal mengajar setiap guru.</li>
        <li>Buka halaman <strong>Jadwal Piket</strong> untuk melihat jadwal piket harian.</li>
        <li>Gunakan fitur <strong>Kalender</strong> untuk melihat event sekolah.</li>
        <li>Jika ada kendala, hubungi admin melalui kontak di bawah.</li>
      </ol>

      <h4>📞 Hubungi Kami</h4>
      <p>Jika mengalami masalah atau butuh bantuan lebih lanjut, silakan hubungi:</p>
      <ul>
        <li><strong>Email:</strong> sdnegeribeuracan@yahoo.com</li>
        <li><strong>Oprator:</strong> Misnawati</li>
        <li><strong>Telepon:</strong> +62 812-3456-7890</li>
        <li><strong>Alamat:</strong> SDN 4 Meureudu, Aceh</li>
      </ul>

      <h4>❓ FAQ (Pertanyaan yang Sering Diajukan)</h4>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Bagaimana cara melihat jadwal mengajar guru?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Anda bisa melihat jadwal guru dengan membuka menu <strong>Jadwal Guru</strong> di navbar.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Apakah sistem ini bisa diakses melalui HP?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Ya, sistem ini dirancang agar responsif dan bisa diakses melalui HP, tablet, atau komputer.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              Bagaimana jika saya menemukan kesalahan dalam sistem?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Anda bisa melaporkan masalah melalui email support atau menghubungi pihak sekolah.
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
    Copyright &copy; Kania Nabila Muntaz - 2025
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
