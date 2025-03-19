<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


// Menampilkan halaman login
Route::get('/login', function () {
    return view('login');
});

// Proses login
Route::post('/login/proses', function (Request $request) {
    // Simulasi akun login (tanpa database)
    $akun = [
        'username' => 'admin',
        'password' => '12345' // Ganti dengan password yang kamu inginkan
    ];

    // Cek kredensial
    if ($request->username === $akun['username'] && $request->password === $akun['password']) {
        // Simpan sesi login
        Session::put('login', true);
        Session::put('username', $request->username);
        
        return redirect('/beranda')->with('success', 'Login berhasil!');
    }

    return back()->with('error', 'Username atau password salah!');
});

// Logout
Route::get('/logout', function () {
    Session::forget('login');
    Session::forget('username');

    return redirect('/login')->with('success', 'Anda telah logout.');
});


// Halaman Beranda
Route::get('beranda', function () {
    if (!Session::has('login')) {
        return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
    }
    return view('jadwal.beranda');
});


// Pastikan Session Jadwal Guru Tidak Kosong
Route::get('jadwal-guru', function () {
    if (!Session::has('jadwal-guru')) {
        Session::put('jadwal-guru', []);
    }

    $jadwal_guru = Session::get('jadwal-guru');
    return view('jadwal.index', compact('jadwal_guru'));
});

// Halaman Tambah Jadwal
Route::get('/jadwal/tambah', function () {
    return view('jadwal.tambah');
});


// Proses Simpan Jadwal Baru
Route::post('/jadwal/simpan', function (Request $request) {
    $jadwal_guru = Session::get('jadwal-guru', []);

// Tambahkan data baru
    $jadwal_guru[] = [
        'nama_guru' => $request->nama_guru,
        'mata_pelajaran' => $request->mata_pelajaran,
        'hari' => $request->hari,
        'jam' => $request->jam,
    ];

    Session::put('jadwal-guru', $jadwal_guru);
    return redirect('/jadwal-guru')->with('success', 'Jadwal berhasil ditambahkan!');
});

//  Halaman Edit Jadwal
Route::get('/jadwal/edit/{id}', function ($id) {
    $jadwal_guru = Session::get('jadwal-guru', []);

    if (!isset($jadwal_guru[$id])) {
        return redirect('/jadwal-guru')->with('error', 'Data tidak ditemukan!');
    }

    return view('jadwal.edit', ['id' => $id, 'data' => $jadwal_guru[$id]]);
});


//  Proses Update Jadwal
Route::post('/jadwal/update/{id}', function (Request $request, $id) {
    $jadwal_guru = Session::get('jadwal-guru', []);

    if (!isset($jadwal_guru[$id])) {
        return redirect('/jadwal-guru')->with('error', 'Data tidak ditemukan!');
    }

    // Update data berdasarkan ID
    $jadwal_guru[$id] = [
        'nama_guru' => $request->nama_guru,
        'mata_pelajaran' => $request->mata_pelajaran,
        'hari' => $request->hari,
        'jam' => $request->jam,
    ];

    Session::put('jadwal-guru', $jadwal_guru);
    return redirect('/jadwal-guru')->with('success', 'Jadwal berhasil diperbarui!');
});

// Proses Hapus Jadwal
Route::get('/jadwal/hapus/{id}', function ($id) {
    $jadwal_guru = Session::get('jadwal-guru', []);

    if (!isset($jadwal_guru[$id])) {
        return redirect('/jadwal-guru')->with('error', 'Data tidak ditemukan!');
    }

    unset($jadwal_guru[$id]);
    $jadwal_guru = array_values($jadwal_guru); 

    Session::put('jadwal-guru', $jadwal_guru);
    return redirect('/jadwal-guru')->with('success', 'Jadwal berhasil dihapus!');
});

// Route untuk halaman Jadwal Piket
Route::get('/jadwal/piket', function () {
    $jadwal_piket = [
        ['hari' => 'Senin', 'guru' => ['Budi Santoso', 'Ani Widodo']],
        ['hari' => 'Selasa', 'guru' => ['Ahmad Yani', 'Siti Aminah']],
        ['hari' => 'Rabu', 'guru' => ['Rina Susanti', 'Joko Prasetyo']],
        ['hari' => 'Kamis', 'guru' => ['Wahyudi', 'Dewi Sartika']],
        ['hari' => 'Jumat', 'guru' => ['Bambang Supriadi', 'Kartini']],
    ];

    return view('jadwal.piket', compact('jadwal_piket'));
})->name('jadwal.piket');

