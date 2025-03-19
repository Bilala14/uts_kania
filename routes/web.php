<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Login
Route::get('login', function () {
    return view('layout.login');
});

// Halaman Beranda
Route::get('beranda', function () {
    return view('jadwal.beranda');
});

// Data jadwal guru (manual, tidak menggunakan database)
$jadwal_guru = [
    ['nama_guru' => 'Mawarni,S.pd', 'mata_pelajaran' => 'Matematika', 'hari' => 'Senin', 'jam' => '08:00 - 09:00'],
    ['nama_guru' => 'Afdhal Muliani,Spd.i', 'mata_pelajaran' => 'PAI', 'hari' => 'Selasa', 'jam' => '09:00 - 10:00'],
    ['nama_guru' => 'Agamal,S.pd', 'mata_pelajaran' => 'Pjok', 'hari' => 'Rabu', 'jam' => '10:00 - 11:00'],
];

// Halaman Jadwal Guru
Route::get('jadwal-guru', function () use ($jadwal_guru) {
    return view('jadwal.index', compact('jadwal_guru'));
});

// Data jadwal piket guru (manual)
$jadwal_piket = [
    ['hari' => 'Senin', 'guru' => ['Rosmiati,S.pd', 'Mulidayani,S.pd', 'Darniati,S.pd']],
    ['hari' => 'Selasa', 'guru' => ['Nurlaila,S.pd', 'Mawarni,S.pd', 'Yurniati,S.pd']],
    ['hari' => 'Rabu', 'guru' => ['Mardiana,S.pd', 'Farhayati,S.pd', 'Cut Misni,S.pd']],
    ['hari' => 'Kamis', 'guru' => ['Yurniati,S.pd', 'Sumiati,S.pd', 'Mulidayani,S.pd']],
    ['hari' => 'Jumat', 'guru' => ['Sri Wahyuni,S.pd', 'Afdhal Muliani,S.pd.i', 'Agamal,S.pd']],
    ['hari' => 'Sabtu', 'guru' => ['Diniati,S.pd', 'Ekawati,S.pd', 'Mawarni,S.pd']],
];

// Halaman Jadwal Piket Guru
Route::get('jadwal/piket', function () use ($jadwal_piket) {
    return view('jadwal.piket', compact('jadwal_piket'));
});
