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
                        @forelse ($detailTopik as $detail)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Judul</label>
                                </div>
                            <div class="col-12 col-md-10">
                                <h5>{{ $detail->judul_topik }}</h5>
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
                                    <h5>{{$detail->nama}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-12 col-md-10">
                                    <p>{{ $detail->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            @foreach ($ruleTopik as $item)
                                @if ($item->jumlah_topik == 0 and ($item->masa_blocking > 7 or $item->masa_blocking == null))
                                        <button type="submit" class="btn btn-primary mr-3" data-toggle="modal"
                                        data-target="#exampleModal">Mendaftar topik ini</button>
                                @else
                                <button type="submit" class="btn btn-primary mr-3" data-toggle="modal"
                                data-target="#exampleModal" disabled>Mendaftar topik ini</button>    
                                @endif
                            @endforeach
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
                    <li>{{ $item->nama_mahasiswa }}</li>
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
                    @foreach ($detailTopik as $item)
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_topik" value="{{ $item->id }}">
                        <p>Dengan mendaftar topik TA ini, maka 7 hari ke depan saya tidak bisa mendaftar topik TA lain.
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
