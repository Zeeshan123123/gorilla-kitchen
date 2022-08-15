<!DOCTYPE html>
<head>
  <html lang="en">
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">   
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  
  <title>{{ config('app.name', 'Gorilla Kitchen') }} | @yield('page_title')</title>  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ASSETS_FRONTEND}}css/custom.css">
  <link rel="stylesheet" href="{{ASSETS_FRONTEND}}css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  

  <!-- Page CSS -->
  @yield('page_css')
</head>
<body>

@include('common.frontend.header')		

<!-- Start: Page Main Content -->
@yield('page_content')  
<!-- End: Page Main Content -->

@include('common.frontend.footer')

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>-->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>-->
<script type="text/javascript" src="{{ASSETS_FRONTEND}}js/main.js"></script>

<!-- Page Scripts -->
@yield('page_scripts')
</body>

</html>