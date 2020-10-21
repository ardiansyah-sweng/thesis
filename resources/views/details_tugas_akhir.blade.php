@foreach($detailsTopikTA as $item)
<?php
    $idTopikTA = $item->id;
    $judulTopikTA = $item->judul_topik;
    $namaDosen = $item->nama;
    $topikBidang = $item->topik_bidang;
?>
Judul: {{ $judulTopikTA }} <br>
Dosen: {{ $namaDosen }} <br>
Bidang: {{ $topikBidang }} <br>
Deskripsi: {{ $item->deskripsi }} <br>
Terpilih: {{ $item->mahasiswa_terpilih }} <br>
@endforeach
Pendaftar: {{ $item->jumlah_pendaftar }} mahasiswa <br>
<!-- form start -->
<form role="form" method="POST" action="/Topik/Decision/">
    @csrf
    @foreach($listMahasiswa as $val)
    <input class="form-check-input" type="radio" name="nim" value="{{ $val->nim }}">
    <label class="form-check-label">{{ $val->nama_mahasiswa }}</label>
    {{ Form::hidden('idTopikTugasAkhir', $idTopikTA) }}
    {{ Form::hidden('email_mahasiswa', $val->email_mahasiswa) }}
    {{ Form::hidden('namaMahasiswa', $val->nama_mahasiswa) }}
    {{ Form::hidden('namaDosen', $namaDosen) }}
    {{ Form::hidden('judulTopikTA', $judulTopikTA) }}
    {{ Form::hidden('topikBidang', $topikBidang) }}
    <br>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>