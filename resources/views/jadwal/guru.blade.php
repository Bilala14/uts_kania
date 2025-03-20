@extends('layout.master')

@section('title', 'Jadwal Guru - Sistem Penjadwalan')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 fw-bold">Jadwal Guru</h2>
        <br>

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

        {{-- Tombol Tambah Jadwal di kanan bawah --}}
        <div class="text-end mt-3">
            <a href="{{ url('/jadwal/tambah') }}" class="btn btn-primary">Tambah Jadwal</a>
            <br><br><br><br><br><br><br><br> <br><br><br><br><br>
        </div>
    </div>
@endsection
