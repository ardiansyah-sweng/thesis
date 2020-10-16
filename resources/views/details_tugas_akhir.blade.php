@foreach($detailsTopikTA as $item)
<?php
    $jumlahPendaftar = $item->jumlah_pendaftar;
    if ($jumlahPendaftar == 0) { $jumlahPendaftar = 'Belum ada'; }
    $mahasiswaTerpilih = $item->nim_terpilih_fk;
    if ($mahasiswaTerpilih == 0) { $mahasiswaTerpilih = 'Belum ada'; }
    if ($mahasiswaTerpilih != 0) { $mahasiswaTerpilih = $item->nama_mahasiswa; }
    $idTopikTA = $item->id;
    $judulTopikTA = $item->judul_topik;
    $namaDosen = $item->nama;
    $topikBidang = $item->topik_bidang;
?>
Judul: {{ $judulTopikTA }} <br>
Dosen: {{ $namaDosen }} <br>
Bidang: {{ $topikBidang }} <br>
Deskripsi: {{ $item->deskripsi }} <br>
Terpilih: {{ $mahasiswaTerpilih }} <br>
@endforeach
Pendaftar: {{ $jumlahPendaftar }} mahasiswa <br>
<!-- form start -->
<form role="form" method="POST" action="/Topik/Decision/">
    @csrf
    @foreach($listMahasiswa as $item)
    <input class="form-check-input" type="radio" name="nim" value="{{ $item->nim }}">
    {{ Form::hidden('idTopikTugasAkhir', $idTopikTA) }}
    {{ Form::hidden('emailMahasiswa', $item->email_mahasiswa) }}
    {{ Form::hidden('namaMahasiswa', $item->nama_mahasiswa) }}
    {{ Form::hidden('namaDosen', $namaDosen) }}
    {{ Form::hidden('judulTopikTA', $judulTopikTA) }}
    {{ Form::hidden('topikBidang', $topikBidang) }}
    <label class="form-check-label">{{ $item->nama_mahasiswa }}</label>
    <br>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>