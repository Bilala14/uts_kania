<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Piket Guru SD</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="container mt-4">
    <h2 class="mb-4">Jadwal Piket Guru Sekolah Dasar</h2>

    <!-- Tabel Jadwal Piket -->
    <table class="table table-bordered">
        <thead>
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

    <div class="mt-3">
        <a href="/beranda" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
</body>
</html>
