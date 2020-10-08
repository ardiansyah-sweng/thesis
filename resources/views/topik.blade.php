@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambahkan Topik Skripsi</h1>
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
                        <form role="form" method="POST" action="/Topik" >
                          @csrf
                        <div class="card-body">
                            <div class="form-group">
                              <label>Topik</label>
                                <select class="form-control select2 @error('topik_bidang') is-invalid @enderror" style="width: 100%;" name="topik_bidang">
                                  <option selected="selected">--- Pilih Topik ---</option>
                                  @foreach ($topik as $item)                                     
                                    <option value="{{ $item->topik_bidang}}" {{ (old("topik_bidang") == $item->topik_bidang ? "selected":"") }}>{{ $item->topik_bidang}}</option>
                                  @endforeach
                                </select>
                                @error('topik_bidang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" id="exampleInputPassword1" name="judul" placeholder="Judul">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Deskripsi....">{{ old('deskripsi') }}</textarea>
                              @error('deskripsi')
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