<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>COTO</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{url('assets/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="{{url('assets/images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item ">
                        <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif " href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'about') active @endif" href="{{ route('about') }}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'services') active @endif" href="{{ route('services') }}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'projects') active @endif" href="{{ route('projects') }}">Projects</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'contact') active @endif" href="{{ route('contact') }}">Contact Us</a>
                     </li>
                  </ul>
                  <div class="search_icon"><a href="#"><img src="{{url('assets/images/search-icon.png')}}"></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->

      @yield('content')

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="{{url('assets/images/map-icon.png')}}" class="image_main"><span class="padding_left_10">No.123 Chalingt Gates, Supper market New York</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="{{url('assets/images/call-icon.png')}}" class="image_main"><span class="padding_left_10">(+71 7986543234)</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="{{url('assets/images/mail-icon.png')}}" class="image_main"><span class="padding_left_10">demo@gmail.com</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{url('assets/js/jquery.min.js')}}"></script>
      <script src="{{url('assets/js/popper.min.js')}}"></script>
      <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('assets/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('assets/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('assets/js/custom.js')}}"></script>
      <!-- javascript -->
      <script src="{{url('assets/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
