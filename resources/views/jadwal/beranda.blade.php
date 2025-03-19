<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Beranda - Jadwal Guru SD</title>

    <style>
        body {
            background-color: #b3e0ff; /* Warna biru muda */
            height: 100vh; /* Pastikan halaman penuh */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container-box {
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            margin-bottom: 30px; /* Jarak lebih besar */
            font-size: 2.5rem; /* Ukuran teks lebih besar */
            font-weight: bold;
        }
        p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <div class="container-box">
        <h1>Selamat Datang di Sistem Penjadwalan Guru SDN 4 Meuredu</h1>
        <p class="mb-4">Sistem ini digunakan untuk melihat jadwal mengajar guru di sekolah dasar.</p>

        <a href="jadwal-guru" class="btn btn-primary btn-lg">Lihat Jadwal Guru</a>
    </div>

    <script src
