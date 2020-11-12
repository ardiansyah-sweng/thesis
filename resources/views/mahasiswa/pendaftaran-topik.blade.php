@extends('mahasiswa.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('flash-message')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mendaftar Topik Tugas Akhir</h1>
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
                                    <h5>{{ $detail->judulTopikSkripsi }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Topik</label>
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
                                    <h5>{{$detail->namaDosbing}}</h5>
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
                        <div class="card-footer">
                            <?php
                            if ($isAmbil['idTopikSkripsi'] == 0 && $detail->statusTopikSkripsi == config('constants.status_topik_skripsi.open')) {
                                echo '<button type="submit" class="btn btn-primary mr-3" data-toggle="modal" data-target="#exampleModal">Mendaftar topik ini</button>';
                            }
                            if ($isAmbil['idTopikSkripsi'] != 0 && $detail->statusTopikSkripsi == config('constants.status_topik_skripsi.open')) {
                                echo '<button type="submit" class="btn btn-warning mr-3" disabled data-toggle="modal" data-target="#exampleModal">Anda sedang terdaftar di salah satu topik skripsi</button>';
                            }
                            if ($detail->statusTopikSkripsi == config('constants.status_topik_skripsi.closed')){
                                echo '<button type="submit" class="btn btn-danger mr-3" disabled data-toggle="modal" data-target="#exampleModal">Topik ini sudah ditutup</button>';
                            }                           
                            ?>
                            <a href="{{ route('allTopikTAMahasiswa') }}" class="btn btn-secondary">Batal</a>
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
                        <h4>Pendaftar</h4>
                        <ol>
                            @forelse ($listMahasiswa as $item)
                            <li>{{ $item->namaMahasiswaMendaftarTopikSkripsi }}</li>
                            @empty
                            Belum ada pendaftar
                            @endforelse
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
                        <p>Dengan mendaftar topik Skripsi ini, maka selama {{config('constants.blocking_time')}} hari ke depan saya tidak bisa mendaftar topik Skripsi lain.
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