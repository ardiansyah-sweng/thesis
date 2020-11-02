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

    <div class="card-header">
      <a href="/Topik/Add" type="submit" class="btn btn-primary"><span class="fa fa-plus"> Tambah Topik</span></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Dosbing</th>
            <th width="10%">Bidang</th>
            <th>Pendaftar</th>
            <th>Status</th>
            <th>Terpilih</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($allTopikSkripsi as $item)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td><a href='/Topik/Details/{{ $item->idTopikSkripsi }}/dosen'> {{ $item->judulTopikSkripsi }} </a></td>
            <td><img src="{{ url('adminLTE/dist/img/dosen/'.$item->avatarDosbing) }}" style="width:40px;height:40px;" class="img-circle elevation-2" alt="{{ $item->namaDosbing }}" data-toggle="tooltip" data-placement="top" title="{{ $item->namaDosbing }}"></td>
            <td>

              {{ $item->topikBidangSkripsi }}</td>
            <td>{{ $item->jumlahPendaftarTopikSkripsi }}</td>
            <td>
              <?php
              # Konversi status menjadi label {0 = Open, 1 = Closed}
              $varStatus = $item->statusTopikSkripsi;
              if ($varStatus == config('constants.status_topik_skripsi.open') && !empty($item->sisaBlockingDay)) {
                echo '<span class="badge badge-success"> Open </span><br>';
                echo '<span class="badge badge-warning">' . $item->sisaBlockingDay . ' hari menuju penetapan</span>';
              }
              if ($varStatus == config('constants.status_topik_skripsi.open') && empty($item->sisaBlockingDay)) {
                echo '<span class="badge badge-success"> Open </span><br>';
              }
              if ($varStatus == config('constants.status_topik_skripsi.closed')) {
                echo '<span class="badge badge-danger">Closed</span>';
              }
              ?>
            </td>
            <?php
            $mahasiswaTerpilih = $item->nimMahasiswaTerpilih;
            if ($mahasiswaTerpilih == 0) {
              echo '<td><span class="badge badge-success">belum ada</span></td>';
            }
            if ($mahasiswaTerpilih != 0) {
              echo '<td>' . $item->namaMahasiswaTerpilih . '</td>';
            }
            if (Session::get('nipy') != $item->nipyDosbing) { ?>
              <td>
                <a class="btn btn-primary disabled" href="/Topik/updateTopikTA/{{$item->idTopikSkripsi}}"><span class="fa fa-pencil"></span>Edit</a>
                <a class="btn btn-danger disabled" href=""><span class="fa fa-pencil"></span>Hapus</a>
              </td>
            <?php } ?>

            <?php
            if (Session::get('nipy') == $item->nipyDosbing) { ?>
              <td>
                <a class="btn btn-primary" href="/Topik/updateTopikTA/{{$item->idTopikSkripsi}}"><span class="fa fa-pencil"></span>Edit</a>
                <a class="btn btn-danger" href=""><span class="fa fa-pencil"></span>Hapus</a>
              </td>
            <?php } ?>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  @endsection