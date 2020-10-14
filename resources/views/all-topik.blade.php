@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('flash-message')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Topik Skripsi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Topik</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<a href="/Topik/Add">[Tambah topik]</a>
<br>
@foreach($allTopikTA as $item)
  <?php 
      # Konversi status menjadi label {0 = Open, 1 = Closed}
      # Konversi default nim terpilih menjadi label {0 = Ambil topik ini, nim = Nama mahasiswa}
      if ($item->status == 0){ $status = 'Open'; }
      if ($item->status == 1){ $status = 'Closed'; }
      if ($item->nim_terpilih_fk == 0){ $mahasiswaTerpilih = 'Ambil topik ini'; }
  ?>
  Judul: {{ $item->judul_topik }} &nbsp; 
  Dosen: {{ $item->nama }} &nbsp; 
  Bidang: {{ $item->topik_bidang }} &nbsp; 
  Pendaftar: {{ $item->jumlah_pendaftar }} &nbsp; 
  Status: {{ $status }} &nbsp; 
  Terpilih: {{ $mahasiswaTerpilih }} &nbsp; 
  Aksi: view | edit | hapus <br>
@endforeach

@endsection