<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Proses Login
Route::post('/login/proses', function (Request $request) {
    $akun = [
        'username' => 'admin',
        'password' => '12345'
    ];

    if ($request->username === $akun['username'] && $request->password === $akun['password']) {
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
Route::get('/beranda', function () {
    return view('jadwal.beranda');
});

//Jadwal Guru
Route::get('/jadwal-guru', function () {
    $jadwal = Session::get('jadwal_guru', []);
    return view('jadwal.guru', compact('jadwal'));
});



// Form Tambah Jadwal
Route::get('/jadwal/tambah', function () {
    return view('jadwal.tambah');
});

// **Simpan Data Jadwal ke Session**
Route::post('/jadwal/simpan', function (Request $request) {
    $jadwal = Session::get('jadwal_guru', []); // Ambil data jadwal dari session

    $data = [
        'id' => count($jadwal) + 1,
        'nama_guru' => $request->nama_guru,
        'mata_pelajaran' => $request->mata_pelajaran,
        'hari' => $request->hari,
        'jam' => $request->jam,
        'kelas' => $request->kelas,
    ];

    $jadwal[] = $data; // Tambahkan data baru ke array
    Session::put('jadwal_guru', $jadwal); 
    
    // Simpan kembali ke session
    Route::get('/cek-session', function () {
        return response()->json(Session::all()); // Menampilkan semua session
    });
    
    return redirect('/jadwal-guru')->with('success', 'Jadwal berhasil ditambahkan!');
});

// **Edit Jadwal**
Route::get('/jadwal/edit/{id}', function ($id) {
    $jadwal = Session::get('jadwal_guru', []);
    $data = collect($jadwal)->firstWhere('id', $id);

    if (!$data) {
        return redirect('/jadwal-guru')->with('error', 'Data tidak ditemukan');
    }

    return view('jadwal.edit', compact('data'));
});

// **Update Jadwal**
Route::post('/jadwal/update/{id}', function (Request $request, $id) {
    $jadwal = Session::get('jadwal_guru', []);

    foreach ($jadwal as &$item) {
        if ($item['id'] == $id) {
            $item['nama_guru'] = $request->nama_guru;
            $item['mata_pelajaran'] = $request->mata_pelajaran;
            $item['hari'] = $request->hari;
            $item['jam'] = $request->jam;
            $item['kelas'] = $request->kelas;
            break;
        }
    }

    Session::put('jadwal_guru', $jadwal);
    return redirect('/jadwal-guru')->with('success', 'Jadwal berhasil diperbarui!');
});

// **Hapus Jadwal**
Route::get('/jadwal/hapus/{id}', function ($id) {
    $jadwal = Session::get('jadwal_guru', []);
    $jadwal = array_values(array_filter($jadwal, fn($item) => $item['id'] != $id));

    Session::put('jadwal_guru', $jadwal);
    return redirect('/jadwal-guru')->with('success', 'Jadwal berhasil dihapus!');
});

//Jadwal Piket
Route::get('/jadwal-piket', function () {
    $jadwal_piket = Session::get('jadwal_piket', []);
    return view('jadwal.piket', compact('jadwal_piket'));
});

// Form Tambah Piket
Route::get('/jadwal-piket/tambah', function () {
    return view('jadwal.tambah_piket');
});

// Simpan Jadwal Piket
Route::post('/jadwal-piket/simpan', function (Request $request) {
    $jadwal_piket = Session::get('jadwal_piket', []);
    $jadwal_piket[] = [
        'hari' => $request->hari,
        'guru' => $request->guru,
    ];
    Session::put('jadwal_piket', $jadwal_piket);
    return redirect('/jadwal-piket')->with('success', 'Jadwal Piket berhasil ditambahkan!');
});

// Kalender
Route::get('/kalender', function () {
    return view('jadwal.kalender');
});

// Provil Sekolahnya
Route::get('/profil', function () {
    return view('profil');
});

// maps sekolah
Route::get('/maps-sekolah', function () {
    return view('jadwal.maps');
});

// Bantuan
Route::get('/bantuan', function () {
    return view('jadwal.bantuan');
});

