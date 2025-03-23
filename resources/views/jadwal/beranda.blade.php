@extends('layout.master')

@section('title', 'Beranda - Sistem Penjadwalan Guru')

@section('content')

    <style>
        body {
            background-color: #b3d9ff;
            margin: 0;
        }
        .container-content {
            width: 85%;
            max-width: 1000px; /* Lebih proporsional */
            padding: 30px 20px;
            margin-top: 30px; /* Naik sedikit, tapi tidak terlalu tinggi */
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 position-fixed top-0">
        <div class="container">
            <a class="navbar-brand" href="/beranda">Sistem Sekolah</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="d-flex justify-content-center align-items-start">
        <div class="container-content card shadow-lg text-center">
            <h1 class="fw-bold">Selamat Datang di Sistem Penjadwalan Guru SDN 4 Meureudu</h1>
            <p class="mt-3">Sistem ini digunakan untuk melihat jadwal mengajar guru di sekolah dasar.</p>
            <a href="/jadwal-guru" class="btn btn-primary">Lihat Jadwal Guru</a>
        </div>
    </div>

    <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
        Copyright &copy; Kania Nabila Muntaz - 2025
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
