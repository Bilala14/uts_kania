<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Jadwal Guru - SDN 4 Meuredu</title>

    <style>
        body {
            background: linear-gradient(to right, #b3e0ff, #80d0ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 900px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
        }
        table {
            width: 100%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <div class="container w-80 mt-5 p-5 bg-white rounded shadow">
        <h2>Jadwal Mengajar Guru SDN 4 Meuredu</h2>
       

        <div class="mb-3 d-flex justify-content-between">
            <input type="text" class="form-control w-25" placeholder="Nama Guru">
            <input type="text" class="form-control w-25" placeholder="Mata Pelajaran">
            <select class="form-control w-25">
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
                <option>Sabtu</option>
            </select>
            <input type="text" class="form-control w-25" placeholder="Jam (08:00 - 09:00)">
            <button class="btn btn-primary">Tambah Jadwal</button>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
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
                @foreach ($jadwal_guru as $index => $jadwal)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $jadwal['nama_guru'] }}</td>
                    <td>{{ $jadwal['mata_pelajaran'] }}</td>
                    <td>{{ $jadwal['hari'] }}</td>
                    <td>{{ $jadwal['jam'] }}</td>
                    <td>
                        <a href="{{ url('/jadwal/edit/'.$index) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ url('/jadwal/hapus/'.$index) }}" class="btn btn-danger btn-sm"  
                           onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
                           Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center mb-3">
            <a href="{{ route('jadwal.piket') }}">Lihat Jadwal Piket</a>
         <p class="text-center">
            <a href="{{ url('/kalender') }}" class="text-primary">Lihat Kalender</a>
         </p>
         
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
