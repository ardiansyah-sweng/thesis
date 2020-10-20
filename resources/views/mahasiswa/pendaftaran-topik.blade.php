
@extends('mahasiswa.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran Topik Skripsi</h1>
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


    <section class="content">
    @include('flash-message')
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/Topik/PendaftaranTopik" >
                          @csrf
                        <div class="card-body">
                            <div class="form-group">
                              <label>Topik</label>
                                <select class="form-control select2 @error('judul_topik') is-invalid @enderror" style="width: 100%;" name="id_judul_topik">
                                  <option selected="selected">--- Pilih Topik ---</option>
                                  @foreach ($listTopik as $item)                             
                                    <option value="{{ $item->id}}" {{ (old("judul_topik") == $item->judul_topik ? "selected":"") }}>{{ $item->judul_topik}}</option>
                                  @endforeach
                                </select>
                                @error('judul_topik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection