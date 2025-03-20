<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Jadwal Guru</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama Guru</th>
                    <th>Mata Pelajaran</th>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                @if(empty($jadwal_guru))
                    <tr><td colspan="4" class="text-center">Belum ada jadwal</td></tr>
                @else
                    @foreach($jadwal_guru as $jadwal)
                        <tr>
                            <td>{{ $jadwal['nama_guru'] }}</td>
                            <td>{{ $jadwal['mata_pelajaran'] }}</td>
                            <td>{{ $jadwal['hari'] }}</td>
                            <td>{{ $jadwal['jam'] }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <a href="{{ url('/jadwal/tambah') }}" class="btn btn-primary">Tambah Jadwal</a>
    </div>
</body>
</html>
