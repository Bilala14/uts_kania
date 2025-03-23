<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>{{$title}}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a class="navbar-brand" href="/beranda">Sistem Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="/jadwal-guru">Jadwal Guru</a></li>
          <li class="nav-item"><a class="nav-link" href="/jadwal-piket">Jadwal Piket</a></li>
          <li class="nav-item"><a class="nav-link" href="/kalender">Kalender</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown">
              Informasi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profil">Profil Sekolah</a></li>
              <li><a class="dropdown-item" href="/maps-sekolah">Maps Sekolah</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/bantuan">Bantuan</a></li>
            </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
