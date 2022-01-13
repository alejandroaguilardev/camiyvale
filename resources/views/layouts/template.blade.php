<!DOCTYPE html>
<html dir="ltr" lang="es">

<!-- Mirrored from html.kodesolution.live/h/dentalpro/v3.0/demo/features-header-modern-style5-white.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 21:48:29 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

@yield('metadata')

<!-- Page Title -->
@yield('title')


<!-- Favicon and Touch Icons -->
<link href="{{asset('img/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('img/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('img/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('img/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="{{asset('css/menuzord-megamenu.css')}}" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{asset('css/colors/theme-skin-color-set5.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
@yield('links')


</head>


<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <img src="{{asset('img/8.gif')}}" alt="preloader">      
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">desactivar preloader</div>
  </div>
  
  @include('layouts.partials.header')
  
  <!-- Start main-content -->
  <div class="main-content">
    @yield('content')
  </div>
  <!-- end main-content -->

  @include('layouts.partials.footer')

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>




<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems ! 
			 The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

@yield('scripts')

</body>

</html>