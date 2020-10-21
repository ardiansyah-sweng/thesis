@extends('email.layouts')

@section('content')

<div class="row bg-secondary p-0 pt-4 shadow">
    <div class="card col-4 mx-auto bg-light p-n5">
        <div class="row">
            <div class="col-12 pt-2 pb-2 shadow-sm">
                <h5 class="display-4 text-center"><strong>{{$judul}}</strong> </h5>
            </div>
        </div>
        <div class="card-body mt-3">
            <h5 class="card-title mb-4">Halo <strong>{{$nama}}</strong>,</h5>
            <p class="card-text">
                {{$deskripsi}}
            </p>
            <?php
            // Check Button jika aktif
            if ($statusButton['button'] != 0) { ?>
                <a href="{{$statusButton['link']}}" class="btn btn-outline-secondary btn-lg btn-block shadow mt-4 mb-4">{{$statusButton['buttonText']}}</a>
            <?php } ?>
            <p class="card-text">
                Untuk informasi lebih lanjut, hubungi tim pengembang.
            </p>
            <br>
            <p>
                Semoga Harimu Menyenangkan! <br>
                Tim Pengembang.
            </p>
        </div>
    </div>
</div>
<div class="row bg-secondary">
    <div class="col-5 mx-auto">
        <p class="text-center ">
            This is a service notification mailing.<br>
            © 2020 Thesis Dev. All rights reserved<br>
        </p>
    </div>
</div>

@endsection