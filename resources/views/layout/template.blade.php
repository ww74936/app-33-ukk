<!DOCTYPE html>
<html lang="zxx">

   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Anime Template">
      <meta name="keywords" content="Anime, unica, creative, html">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Perpustakaan | page</title>

      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">

      <!-- Css Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" >
      <link href="{{ asset('css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" >
      <link href="{{ asset('css/elegant-icons.css') }}" type="text/css" rel="stylesheet">
      <link href="{{ asset('css/plyr.css') }}" type="text/css" rel="stylesheet" >
      <link href="{{ asset('css/nice-select.css') }}" type="text/css" rel="stylesheet" >
      <link href="{{ asset('css/owl.carousel.min.css') }}" type="text/css" rel="stylesheet" >
      <link href="{{ asset('css/slicknav.min.css') }}" type="text/css" rel="stylesheet" >
      <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" >
   </head>

   <body>
      @include('layout.header')
      @yield('konten')

      <!-- Search model Begin -->
      <div class="search-model">
         <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                  <input type="text" id="search-input" placeholder="Search here.....">
            </form>
         </div>
      </div>
        
      <!-- Product Section End -->
      @include('layout.footer')

         <!-- Js Plugins -->
         <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
         <script src="{{ asset('js/player.js')}}"></script>
         <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
         <script src="{{ asset('js/mixitup.min.js') }}"></script>
         <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
         <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
         <script src="{{ asset('js/main.js') }}"></script>
   </body>
</html>