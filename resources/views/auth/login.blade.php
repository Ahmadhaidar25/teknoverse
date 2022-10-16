<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Login</title>
  <link href="{{url('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('admin/css/ruang-admin.min.css')}}" rel="stylesheet">
  <style type="text/css">
   .spinner {
    display: none;
  }
</style>

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="form" action="{{url('/post/auth')}}" method="POST" class="user">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-block text-white" 
                      style="background: #0CA8B4;">
                      <div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i></div>
                      <div class="hide-text">Login</div>
                    </button>
                  </div>
                </form>
                <hr>
                <div class="text-center">
                  <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                </div>
                <div class="text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Login Content -->
<script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{url('admin/js/ruang-admin.min.js')}}"></script>
</body>
@include('sweetalert::alert')

<script type="text/javascript">
  (function () {
    $('.form').on('submit', function () {
      $('.button-prevent').attr('disabled', 'true');
      $('.spinner').show();
      $('.hide-text').hide();
    })
  })();
</script>

</html>