<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Guru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Tambah Jadwal Guru</h2>
    <form action="{{ url('/jadwal/simpan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
