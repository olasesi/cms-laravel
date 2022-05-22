<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../admin-asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../admin-asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../admin-asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../admin-asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../admin-asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              {{-- <div class="brand-logo">
                <img src="../../admin-asset/images/logo.svg" alt="logo">
              </div> --}}
              <h2>Admin Login</h2>
             
              @if(\Session::has('error'))
              <div class="alert alert-danger">
                {{\Session::get('error')}}
              </div>
            @endif

              <form method="POST" class="pt-3" action="{{route('admin.show')}}">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="{{ __('Username') }}" value="{{ old('username') }}" >
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="{{ __('Password') }}">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >{{ __('Log in') }}</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" style="opacity:1;">
                      {{ __('Keep me signed in') }}
                    </label>
                  </div>
                  <a href="{{ route('admin.forget') }}" class="auth-link text-black"> {{ __('Forgot your password?') }}</a>
                </div>
               
               
              </form>

          


 






















            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../admin-asset/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../admin-asset/js/off-canvas.js"></script>
  <script src="../../js/admin-asset/hoverable-collapse.js"></script>
  <script src="../../js/admin-asset/template.js"></script>
  <script src="../../js/admin-asset/settings.js"></script>
  <script src="../../js/admin-asset/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
