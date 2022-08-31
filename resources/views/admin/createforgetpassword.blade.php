<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forget password</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('administration/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/css/custom.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('administration/assets/images/favicon.png')}}" />
    
   
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Forget Password</h3>
              
              
               
                <form action="{{route('admin.saveforgetpassword')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    @if($errors->any())
                    @error('errorMessage')
                    <div class="errors">{{$message}}</div>
                    @enderror
                    @endif

                    <label>Email</label>
                    <input type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" placeholder="Email" value={{ old('email') }}>
                    @error('email')
                    <div class="errors">{{ $message }}</div>
                @enderror
                    
                  </div>
                 
                 
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Submit</button>
                  </div>
                 
                  


                  <div class="form-group d-flex align-items-center justify-content-between">
                   
                    <a href="{{route('admin.index')}}" class="forgot-pass">Back to Login</a>
                  </div>


                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('administration/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('administration/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('administration/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('administration/assets/js/misc.js')}}"></script>
    <script src="{{asset('administration/assets/js/settings.js')}}"></script>
    <script src="{{asset('administration/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>
</html>