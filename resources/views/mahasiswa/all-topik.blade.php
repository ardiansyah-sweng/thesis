@extends('mahasiswa.master')
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
        @foreach($allTopikSkripsiMahasiswa as $item)
      <tr>
        <td>{{ $loop->iteration}}</td>
        <td><a href='/Topik/Ambil/{{ $item->id }}'> {{ $item->judul_topik }} </a></td>
        <td><img src="{{ url('adminLTE/dist/img/dosen/'.$item->avatarPembimbing) }}" style="width:40px;height:40px;" class="img-circle elevation-2" alt="{{ $item->nama }}" data-toggle="tooltip" data-placement="top" title="{{ $item->nama }}"></td>
        <td>
          <?php  
            # Konversi default nim terpilih menjadi label {0 = Belum ada, nim = Nama mahasiswa}
            $mahasiswaTerpilih = $item->nim_terpilih_fk;
            if ($mahasiswaTerpilih == 0){ $mahasiswaTerpilih = 'Belum ada'; }
            if ($mahasiswaTerpilih != 0){ $mahasiswaTerpilih = $item->nama_mahasiswa; }
          ?>
          {{ $item->topik_bidang }}</td>
        <td>{{ $item->jumlah_pendaftar }}</td>
        <td>
          <?php
             # Konversi status menjadi label {0 = Open, 1 = Closed}
             $varStatus = $item->status;
                  if ($varStatus == 0){
                    ?>
                      <span class="badge badge-success"> Open </span>
                    <?php  
                  } else {
                    ?>
                    <span class="badge badge-danger">Closed</span>
                    <?php 
                  }
          ?>
        </td>
        <td>{{ $mahasiswaTerpilih }}</td>

      <?php
        
        if (Session::get('nim') != $item->nim_fk_nim){ ?>
          <td>
          <a class="btn btn-primary" href="/Topik/Ambil/{{ $item->id }}" ><span class="fa fa-pencil"></span>Ambil topik ini</a>
       <?php } ?>

       <?php
        if (Session::get('nim') == $item->nim_fk_nim){ ?>
          <td>
          <a class="btn btn-danger disabled" ><span class="fa fa-pencil"></span>Terdaftar</a>
       <?php } ?>

      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>

@endsection