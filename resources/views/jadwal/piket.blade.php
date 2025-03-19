<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Piket Guru SD</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #b3daff; /* Biru muda */
        }
        .table {
            background-color: white; /* Tabel tetap putih */
        }
        thead {
            background-color: #4D4D4D !important; /* Abu-abu tua */
            color: white !important; /* Teks putih */
        }
    </style>
    
</head>
<body class="container mt-4">
    <h2 class="mb-4">Jadwal Piket Guru Sekolah Dasar</h2>

    <!-- Tabel Jadwal Piket -->
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Hari</th>
                <th>Guru Piket</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal_piket as $piket)
            <tr>
                <td>{{ $piket['hari'] }}</td>
                <td>{{ implode(', ', $piket['guru']) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Catatan Kegiatan Guru Piket -->
<div class="mt-4 p-3 bg-light border rounded">
    <h5>Catatan Kegiatan Guru Piket</h5>
    <ul>
        <li>Menyambut siswa di gerbang sekolah saat jam pagi</li>
        <li>Mengawasi siswa selama jam istirahat.</li>
        <li>Menjaga kebersihan dan ketertiban sekolah.</li>
        <li>Mengisi laporan harian piket guru.</li>
        <li>Mengantar di gerbang sekolah saat jam siswa pulang.</li>
    </ul>
</div>


    <div class="mt-3">
        <a href="{{ url('/beranda') }}" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
</body>
</html>
