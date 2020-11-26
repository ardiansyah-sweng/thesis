@extends('layouts.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('flash-message')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bimbinganku</h1>
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

  {{-- <a href="/Topik/Add">[Tambah topik]</a>
<br> --}}

  <div class="card m-2">

    @if (session()->has('msg'))
    <div class="alert alert-success alert-dismissible m-2">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i> Berhasil</h5>
      {{ session()->get('msg') }}
    </div>
    @endif

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="1%">No</th>
            <th width="5%">NIM</th>
            <th width="10%">Mahasiswa</th>
            <th width="40%">Judul</th>
            <th width="8%">Penguji</th>
            <th>Periode</th>
            <th>Durasi</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bimbinganku as $item)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama_mahasiswa }}</td>
            <td><a href='/Topik/Details/{{ $item->id }}/dosen'> {{ $item->judul_topik }} </a></td>

            <?php
            $avatarDefault = 'avatar.png';
            if (!$item->avatarPenguji1 && !$item->avatarPenguji2) { ?>
              <td><img src="{{ url('adminLTE/dist/img/dosen/'.$avatarDefault) }}" style="width:35px;height:35px;" class="img-circle elevation-2" alt="{{ $item->namaPenguji1 }}" data-toggle="tooltip" data-placement="top" title="{{ $item->namaPenguji1 }}"> &nbsp;
                <img src="{{ url('adminLTE/dist/img/dosen/'.$avatarDefault) }}" style="width:35px;height:35px;" class="img-circle elevation-2" alt="{{ $item->namaPenguji2 }}" data-toggle="tooltip" data-placement="top" title="{{ $item->namaPenguji2 }}"></td>
            <?php } else { ?>
              <td><img src="{{ url('adminLTE/dist/img/dosen/'.$item->avatarPenguji1) }}" style="width:35px;height:35px;" class="img-circle elevation-2" alt="{{ $item->namaPenguji1 }}" data-toggle="tooltip" data-placement="top" title="{{ $item->namaPenguji1 }}"> &nbsp;
                <img src="{{ url('adminLTE/dist/img/dosen/'.$item->avatarPenguji2) }}" style="width:35px;height:35px;" class="img-circle elevation-2" alt="{{ $item->namaPenguji2 }}" data-toggle="tooltip" data-placement="top" title="{{ $item->namaPenguji2 }}"></td>
            <?php  }
            ?>


            <td> {{ $item->periode }} </a></td>
            <?php
            $lulus = config('constants.status_mahasiswa.lulus');
            $metopen = config('constants.status_mahasiswa.metopen');
            $skripsi = config('constants.status_mahasiswa.skripsi');
            $open = config('constants.status_mahasiswa.open');
            $blocked = config('constants.status_mahasiswa.blocked');

            if ($item->statusSkripsiMahasiswa == $lulus && $item->lamaSkripsiHinggaLulusDalamBulan > config('constants.lama_skripsi_ideal')) {
              echo "<td><span class='badge badge-danger'>$item->lamaSkripsiHinggaLulusDalamBulan bulan</td>";
            }
            if ($item->statusSkripsiMahasiswa == $lulus && $item->lamaSkripsiHinggaLulusDalamBulan <= config('constants.lama_skripsi_ideal')) {
              echo "<td><span class='badge badge-success'>$item->lamaSkripsiHinggaLulusDalamBulan bulan</td>";
            }
            if ($item->statusSkripsiMahasiswa == $skripsi && $item->lamaProsesSedangSkripsiDalamBulan <= config('constants.lama_skripsi_ideal')) {
              echo "<td><span class='badge badge-primary'>$item->lamaProsesSedangSkripsiDalamBulan bulan</td>";
            }
            if ($item->statusSkripsiMahasiswa == $skripsi && $item->lamaProsesSedangSkripsiDalamBulan > config('constants.lama_skripsi_ideal')) {
              echo "<td><span class='badge badge-danger'>$item->lamaProsesSedangSkripsiDalamBulan bulan</td>";
            }
            if ($item->statusSkripsiMahasiswa == $metopen) {
              echo "<td><span class='badge badge-secondary'>belum dihitung</td>";
            }

            if ($item->statusSkripsiMahasiswa == $metopen) {
              echo '<td><span class="badge badge-warning">metopen</span> </td>';
            }
            if ($item->statusSkripsiMahasiswa == $skripsi) {
              echo '<form action="/jadwal" method="post">';
              echo '<td><span class="badge badge-primary">Skripsi</span> </td>';
            }
            if ($item->statusSkripsiMahasiswa == $lulus) {
              echo "<td><span class='badge badge-success'>Lulus</span></td>";
            }
            if ($item->statusSkripsiMahasiswa == $open) {
              echo "<td><span class='badge badge-info'>Open</span></td>";
            }
            ?>
           
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  @endsection