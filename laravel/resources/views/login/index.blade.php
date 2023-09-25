<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Overtime</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('ui-html')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('ui-html')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('ui-html')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page bg-dark">
  @if (session()->has('success'))
      
  @endif

  @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError')}}
      </div>
  @endif
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body bg-success rounded">
      <p class="login-box-msg">Login to start your session</p>
      <div class="d-flex align-items-center justify-content-center mb-3">
        <img src="{{asset('ui-html')}}/dist/img/LogoUser.jpg" alt="" width="150">
      </div>
      <form id="login-page" action="" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror " id="username" placeholder="Username" value="{{old('username')}}">
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12 mb-4">
            <button type="submit" class="btn btn-dark btn-block">Login Now !</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
{{-- <script>
  $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      username: {
        required: true,
        username: true,
      },
      password: {
        required: true,
        minlength: 8
      },
    },
    messages: {
      username: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        username: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
  </script> --}}
  
<!-- jQuery -->
<script src="{{asset('ui-html')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('ui-html')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('ui-html')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('ui-html')}}/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('ui-html')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('ui-html')}}/dist/js/demo.js"></script> --}}
</body>
</html>
