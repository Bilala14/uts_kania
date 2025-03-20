<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Guru - Sistem Penjadwalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #b3d9ff;">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="beranda">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/jadwal-guru">Jadwal Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jadwal-piket">Jadwal Piket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kalender">Kalender</a>
                    </li>
                </ul>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Jadwal Guru</h2>

        {{-- Menampilkan pesan sukses jika ada --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Cek apakah ada data jadwal guru --}}
        @if(empty($jadwal) || count($jadwal) == 0)
            <div class="alert alert-warning">Tidak ada jadwal yang tersedia.</div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $item['nama_guru'] }}</td>
                                <td>{{ $item['mata_pelajaran'] }}</td>
                                <td>{{ $item['hari'] }}</td>
                                <td>{{ $item['jam'] }}</td>
                                <td>{{ $item['kelas'] }}</td>
                                <td class="text-center">
                                    <a href="{{ url('/jadwal/edit/'.$item['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ url('/jadwal/hapus/'.$item['id']) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="mt-3">
            <a href="{{ url('/jadwal/tambah') }}" class="btn btn-primary">Tambah Jadwal</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
