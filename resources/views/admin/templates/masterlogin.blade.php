<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>App Name - @yield('title')</title>   <!--To fetch from database-->
   <link rel="stylesheet" href="{{asset('administration/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/css/vendor.bundle.base.css')}}">
   <link rel="stylesheet" href="{{asset('administration/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/css/custom.css')}}">
    <link rel="shortcut icon" href="" /> <!--To fetch from database-->
    
   

    
  </head>
  <body>

    @yield('content')
   
    <script src="{{asset('administration/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    
    <script src="{{asset('administration/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('administration/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('administration/assets/js/misc.js')}}"></script>
    <script src="{{asset('administration/assets/js/settings.js')}}"></script>
    <script src="{{asset('administration/assets/js/todolist.js')}}"></script>
    
  </body>
</html>