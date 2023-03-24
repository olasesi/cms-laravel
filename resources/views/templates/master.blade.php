<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Title- -->
    <title>@yield('title', 'The news')</title> <!-- To get data from the boot method in the database -->

    <!-- CSS
   ==================================================== -->
    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- IcoFonts -->
    <link rel="stylesheet" href="{{ asset('css/icofonts.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owlcarousel.min.css') }}">

    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">



    <!-- navigation -->
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">

    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/colors/color-0.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body class="body-color">
<!--facebook-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0&appId=571331564159090&autoLogAppEvents=1" nonce="0xJOAAx1"></script>
 
<!--twitter-->
<script type="text/javascript">// <![CDATA[
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
    js.async=true;
    js.src="//platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js,fjs);
    }}(document,"script","twitter-wjs");
    // ]]></script>

@include('templates.header')

    {{-- View::make("templates.header"); --}}

    @yield('content')

    @include('templates.footer')
    {{-- View::make("templates.footer"); --}}




    <!-- javaScript Files
 =============================================================================-->

    <!-- initialize jQuery Library -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- navigation JS -->
    <script src="{{ asset('js/navigation.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- magnific popup JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>



    <!-- Bootstrap jQuery -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('js/owl-carousel.2.3.0.min.js') }}"></script>
    <!-- slick -->
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <!-- smooth scroling -->
    <script src="{{ asset('js/smoothscroll.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
    <script type="text/javascript">
        top_bar_time();
        footer_year();
    </script>
</body>

<!-- Mirrored from demo.themewinter.com/html/vinazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 07:25:18 GMT -->

</html>
