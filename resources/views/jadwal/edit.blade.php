@extends('layout.app')

@section('title', 'Edit Jadwal Guru')

@section('content')
<div class="container">
    <h2 class="my-4">Edit Jadwal Guru</h2>

    @if(isset($data))
         @else
        <p style="color: red;">Data tidak ditemukan!</p>
    @endif
    

    @if(isset($data))
    <form action="{{ url('/jadwal/update/'.$id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control" value="{{ $data['nama_guru'] ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" class="form-control" value="{{ $data['mata_pelajaran'] ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $data['hari'] ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jam</label>
            <input type="text" name="jam" class="form-control" value="{{ $data['jam'] ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ url('/jadwal-guru') }}" class="btn btn-secondary">Batal</a>
    </form>
    @endif
</div>
@endsection
