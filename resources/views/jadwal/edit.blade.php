<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Guru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Jadwal Guru</h2>
    <form action="{{ url('/jadwal/update/' . $data['id']) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control" value="{{ $data['nama_guru'] }}" required>
        </div>
        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" class="form-control" value="{{ $data['mata_pelajaran'] }}" required>
        </div>
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $data['hari'] }}" required>
        </div>
        <div class="mb-3">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control" value="{{ $data['jam'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
