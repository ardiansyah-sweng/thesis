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
                        <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                              <label>Topik</label>
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">--Pilih--/option>
                                  <option>Topik A</option>
                                  <option>Topik B</option>
                                  <option>Topik C</option>
                                  <option>Topik C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Judul">
                            </div>
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <textarea class="form-control" rows="3" placeholder="Deskripsi...."></textarea>
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