@extends('layout.master')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Bagian Jadwal Piket Guru -->
        <div class="col-12">
          <br><br><br>
            <div class="p-4" style="background: white; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
                <h2 class="p-3 text-white text-center" style="background-color: #0056b3; border-radius: 10px;">Jadwal Piket Guru</h2>
                <p class="text-center">Berikut adalah jadwal piket guru untuk minggu ini.</p>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: #007bff; color: white;">
                                <th>Hari</th>
                                <th>Nama Guru</th>
                                <th>Jam Piket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Senin</td><td>Rosmiati, S.Pd, Mulidayani, S.Pd, Darniati, S.Pd</td><td>07:00 - 12:00</td></tr>
                            <tr><td>Selasa</td><td>Nuriala, S.Pd, Mawarni, S.Pd, Yurniati, S.Pd</td><td>07:00 - 12:00</td></tr>
                            <tr><td>Rabu</td><td>Mardiana, S.Pd, Farhayati, S.Pd, Cut Misni, S.Pd</td><td>07:00 - 12:00</td></tr>
                            <tr><td>Kamis</td><td>Yurniati, S.Pd, Sumiati, S.Pd, Mulidayani, S.Pd</td><td>07:00 - 12:00</td></tr>
                            <tr><td>Jumat</td><td>Sri Wahyuni, S.Pd, Afdhal Muliani, S.Pd.I, Agamal, S.Pd</td><td>07:00 - 11:00</td></tr>
                            <tr><td>Sabtu</td><td>Dinaiti, S.Pd, Ekawati, S.Pd, Mawarni, S.Pd</td><td>07:00 - 12:00</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Catatan Tugas Piket (Diletakkan di Bawah) -->
        <div class="col-12">
            <div class="container mt-4 p-4" 
                style="background: white; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); width: 100%; display: block;">
                <h4 class="p-3 text-white text-center" style="background-color: #0056b3; border-radius: 10px;">Catatan Tugas Piket</h4>
                <ul style="font-size: 16px;">
                    <li>Menyambut Siswa di depan pagar sekolah setiap pagi.</li>
                    <li>Mempersiapkan kegiatan pagi sebelum belajar setiap hari seperti senam, literasi, muhadharah, dan Yasinan.</li>
                    <li>Mengawasi kedisiplinan siswa di sekolah.</li>
                    <li>Menjaga kebersihan dan kerapihan lingkungan sekolah.</li>
                    <li>Mengkoordinasikan ketertiban saat jam istirahat.</li>
                    <li>Mengisi laporan harian piket guru.</li>
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection
