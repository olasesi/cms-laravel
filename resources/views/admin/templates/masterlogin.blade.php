<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>App Name - @yield('title')</title>   <!--To fetch from database-->
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

    @yield('content')
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