<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <title>Jadwal Guru SD</title>
</head>
<body class="container mt-4">
    <h2 class="mb-4 text-center">Jadwal Guru Sekolah Dasar</h2>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/jadwal/piket') }}">Jadwal Piket</a>
        </li>
    </ul>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Tambah Jadwal -->
    <form action="{{ url('/jadwal/tambah') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="mata_pelajaran" class="form-control" placeholder="Mata Pelajaran" required>
            </div>
            <div class="col-md-2">
                <select name="hari" class="form-control">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="text" name="jam" class="form-control" placeholder="Jam (08:00-09:00)" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
            </div>
        </div>
    </form>

    <!-- Tabel Jadwal -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jadwal_guru as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data['nama_guru'] }}</td>
                <td>{{ $data['mata_pelajaran'] }}</td>
                <td>{{ $data['hari'] }}</td>
                <td>{{ $data['jam'] }}</td>
                <td>
                    <a href="{{ url('/jadwal/hapus/' . $key) }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada jadwal.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
