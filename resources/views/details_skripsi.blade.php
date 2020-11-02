@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('flash-message')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Topik Skripsi</h1>
                </div> 
            </div>
        </div><!-- /.container-fluid -->
    </section>
 

    <section class="content">
        @include('flash-message')
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <div class="card card-primary">
                        @forelse ($detailsTopikSkripsi as $detail)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Judul</label>
                                </div>
                            <div class="col-12 col-md-10">
                                <h5><strong>{{ $detail->judulTopikSkripsi }}</strong></h5>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Bidang</label>
                                </div>
                                <div class="col-12 col-md-10">
                                    <h5>{{$detail->topik_bidang}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Dosbing</label>
                                </div>
                                <div class="col-12 col-md-10">
                                    <h5><img src="{{ url('adminLTE/dist/img/dosen/'.$detail->avatarDosbing) }}" style="width:40px;height:40px;" class="img-circle elevation-2" alt="{{ $detail->namaDosbing }}" data-toggle="tooltip" data-placement="top" title="{{ $detail->namaDosbing }}">  &nbsp; {{$detail->namaDosbing}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                <label>Penguji 1</label>
                                </div>
                                <div class="col-12 col-md-10">
                                    <?php
                                        if (!$detail->avatarPenguji1) {
                                            echo '<h5>Belum ada</h5>';
                                        }
                                        if ($detail->avatarPenguji1) { ?>
                                            <h5><img src="{{ url('adminLTE/dist/img/dosen/'.$detail->avatarPenguji1) }}" style="width:40px;height:40px;" class="img-circle elevation-2" alt="{{ $detail->namaPenguji1 }}" data-toggle="tooltip" data-placement="top" title="{{ $detail->namaPenguji1 }}">  &nbsp; {{ $detail->namaPenguji1 }}</h5>
                                     <?php   }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Penguji 2</label>
                                </div>
                                <div class="col-12 col-md-10">
                                <?php
                                        if (!$detail->avatarPenguji2) {
                                            echo '<h5>Belum ada</h5>';
                                        }
                                        if ($detail->avatarPenguji2) { ?>
                                            <h5><img src="{{ url('adminLTE/dist/img/dosen/'.$detail->avatarPenguji2) }}" style="width:40px;height:40px;" class="img-circle elevation-2" alt="{{ $detail->namaPenguji2 }}" data-toggle="tooltip" data-placement="top" title="{{ $detail->namaPenguji2 }}">  &nbsp; {{$detail->namaPenguji2}}</h5>
                                <?php   }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-12 col-md-10">
                                    <p>{{ $detail->deskripsiTopikSkripsi }}</p>
                                </div>
                            </div>
                        </div>
                        <form action="/Topik/Decision/" method="post">
                        @csrf       
                        <div class="card-footer">
                            <a href="{{ route('allTopikSkripsi') }}" class="btn btn-secondary">Batal</a>
                            <?php 
                             $nipyDosbing = Session::get('nipy');
                             if ($nipyDosbing == $detail->nipyDosbing && $detail->jumlahPendaftarTopikSkripsi != 0){
                                echo '<button type="submit" class="btn btn-primary">Proses</button>';
                             }     
                             if ($nipyDosbing == $detail->nipyDosbing && $detail->jumlahPendaftarTopikSkripsi == 0){
                                echo '<a class="btn btn-primary disabled">Proses</a>';
                             } 
                             if ($nipyDosbing != $detail->nipyDosbing){
                                echo '<a class="btn btn-primary disabled">Proses</a>';
                             }  
                            ?>
                        </div>
                        @empty
                        <div class="row card-body">
                            <div class="col-12 col-md-12">
                                <label>Data Not Available</label>
                            </div>
                        </div>
                        @endforelse
                    </div>
        </div>
        <div class="col-md-3 card card-primary">
            <div class="card-body">
            @foreach ($detailsTopikSkripsi as $detail)
                <h4>Pendaftar ({{ $detail->jumlahPendaftarTopikSkripsi }})</h4>
            @endforeach
                <ol>
                @forelse ($listMahasiswa as $item)
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radioNIM" value="{{ $item->nimMahasiswaMendaftarTopikSkripsi }}">
                          <label class="form-check-label">{{ $item->namaMahasiswaMendaftarTopikSkripsi }}</label>
                        </div>
                    {{ Form::hidden('inputHiddenIDTopikTugasAkhir', $detail->idTopikSkripsi) }}
                @empty
                    Belum ada pendaftar              
                @endforelse
                </form>
                </ol>
            </div>
        </div>
</div>
</div>
</section>
</div>

{{-- MODAL KONFIRMASI --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"> 
            <form role="form" method="POST" action="/Topik/PendaftaranTopik">
                @csrf
                <div class="modal-body">
                    @foreach ($detailsTopikSkripsi as $item)
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="inputHiddenIDTopikSkripsi" value="{{ $item->idTopikSkripsi }}">
                        <p>Dengan mendaftar topik Skripsi ini, maka {{ config('constants.blocking_time') }} hari ke depan saya tidak bisa mendaftar topik Skripsi lain.
                        </p>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
