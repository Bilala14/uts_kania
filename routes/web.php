<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

Route::get('login', function () {
    return view('layout.login');
});


// Halaman Beranda
Route::get('beranda', function () {
    return view('jadwal.beranda');
});

// Data jadwal guru (manual, tidak menggunakan database)
$jadwal_guru = [
    [
        'nama_guru' => 'Budi Santoso',
        'mata_pelajaran' => 'Matematika',
        'hari' => 'Senin',
        'jam' => '08:00 - 09:00'
    ],
    [
        'nama_guru' => 'Siti Aisyah',
        'mata_pelajaran' => 'Bahasa Indonesia',
        'hari' => 'Selasa',
        'jam' => '09:00 - 10:00'
    ],
    [
        'nama_guru' => 'Ahmad Fauzi',
        'mata_pelajaran' => 'IPA',
        'hari' => 'Rabu',
        'jam' => '10:00 - 11:00'
    ]
];

// Halaman utama jadwal
Route::get('/jadwal', function () use ($jadwal_guru) {
    return view('jadwal.index', compact('jadwal_guru'));
});

#halaman jadwal
use Illuminate\Http\Request;

// Halaman utama jadwal
Route::get('/jadwal', function () {
    // Ambil data jadwal dari session
    $jadwal = session('jadwal', []);

    return view('jadwal.index', compact('jadwal'));
});

// Proses tambah jadwal (disimpan di session)
Route::post('/jadwal/tambah', function (Request $request) {
    // Ambil data jadwal dari session
    $jadwal = session('jadwal', []);

    // Tambahkan data baru
    
    $jadwal[] = [
        'nama_guru' => $request->nama_guru,
        'mata_pelajaran' => $request->mata_pelajaran,
        'hari' => $request->hari,
        'jam' => $request->jam
    ];

    // Simpan kembali ke session
    session(['jadwal' => $jadwal]);

    return redirect('/jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
});

// Proses hapus jadwal
Route::get('/jadwal/hapus/{index}', function ($index) {
    $jadwal = session('jadwal', []);

    if (isset($jadwal[$index])) {
        unset($jadwal[$index]); // Hapus item berdasarkan index
        session(['jadwal' => array_values($jadwal)]); // Reset indeks array
    }

    return redirect('/jadwal')->with('success', 'Jadwal berhasil dihapus!');
});

// Halaman Beranda
Route::get('beranda', function () {
    return view('jadwal.beranda');
});

// Data jadwal guru (manual)
$jadwal_guru = [
    ['nama_guru' => 'Budi Santoso', 'mata_pelajaran' => 'Matematika', 'hari' => 'Senin', 'jam' => '08:00 - 09:00'],
    ['nama_guru' => 'Siti Aisyah', 'mata_pelajaran' => 'Bahasa Indonesia', 'hari' => 'Selasa', 'jam' => '09:00 - 10:00'],
    ['nama_guru' => 'Ahmad Fauzi', 'mata_pelajaran' => 'IPA', 'hari' => 'Rabu', 'jam' => '10:00 - 11:00'],
];

// Halaman Jadwal Mengajar
Route::get('jadwal', function () use ($jadwal_guru) {
    return view('jadwal.index', compact('jadwal_guru'));
});

// Data jadwal piket guru (manual)
$jadwal_piket = [
    ['hari' => 'Senin', 'guru' => ['Budi Santoso', 'Dewi Lestari']],
    ['hari' => 'Selasa', 'guru' => ['Siti Aisyah', 'Rina Kartini']],
    ['hari' => 'Rabu', 'guru' => ['Ahmad Fauzi', 'Joko Widodo']],
    ['hari' => 'Kamis', 'guru' => ['Dian Sastro', 'Agus Priyono']],
    ['hari' => 'Jumat', 'guru' => ['Rahmat Hidayat', 'Tina Susanti']],
];

// Halaman Jadwal Piket Guru
Route::get('jadwal-piket', function () use ($jadwal_piket) {
    return view('jadwal.piket', compact('jadwal_piket'));
});
