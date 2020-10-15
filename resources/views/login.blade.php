<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('adminLTE/dist/css/adminlte.min.cs')}}s">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{ url('adminLTE/plugins/summernote/summernote-bs4.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
{{-- @section('content') --}}
<body class="hold-transition login-page">
    <div class="login-box">
     
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body p-3">
          <p class="login-box-msg">Login</p>
    @if (session()->has('msg'))
          <div class="alert alert-danger">{{ session()->get('msg') }}</div>
      @endif
          <form action="/aksiLogin" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="password" class="form-control  @error('nipy') is-invalid @enderror" placeholder="Masukan NIPY Dosen" name="nipy">
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('nipy')
                      <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
              <div class="col">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    </body>

