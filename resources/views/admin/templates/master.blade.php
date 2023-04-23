<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - {{$website_info[0]->value}}</title> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/css/vendor.bundle.base.css')}}">
    
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
   
    <link rel="stylesheet" href="{{asset('administration/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('administration/assets/css/custom.css')}}">
    
    <link rel="shortcut icon" href="{{$website_info[2]->value}}" />
    
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
   
   
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  </head>
  
  <body>
    <div class="container-scroller">
      
      
      <!-- partial:partials/_sidebar.html -->
     @include('admin.templates.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.templates.header')
        
        @yield('content')

        @include('admin.templates.footer')

    </div>
   
 
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
 
   <script src="{{asset('administration/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('administration/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('administration/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <script src="{{asset('administration/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
  <script src="{{asset('administration/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('administration/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
  <script src="{{asset('administration/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('administration/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('administration/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('administration/assets/js/misc.js')}}"></script>
  <script src="{{asset('administration/assets/js/settings.js')}}"></script>
  <script src="{{asset('administration/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{asset('administration/assets/js/dashboard.js')}}"></script>
  <script src="{{asset('administration/assets/js/custom.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/@yaireo/tagify"></script>
  <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
  <script>
    // The DOM element you wish to replace with Tagify
var input = document.querySelector('input[name=tags]');

// initialize Tagify on the above input node reference
new Tagify(input)
  </script>
  {{-- <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> --}}
<script type="text/javascript">
  CKEDITOR.replace('body', {
      filebrowserUploadUrl: "{{route('admin.savepost', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
  });
</script>
  <!-- End custom js for this page -->
</body>
</html>