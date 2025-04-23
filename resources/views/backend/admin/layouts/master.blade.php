<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ PROJECT_NAME }} Admin - @yield('title')</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com/" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('public/assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendors/bootstrap/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendors/bootstrap/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendors/bootstrap/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendors/bootstrap/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendors/bootstrap/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendors/bootstrap/datatables-style.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ url(BACKEND_CSS_PATH.'/assets/vendors/css/style.css') }}" rel="stylesheet" />
  {{-- <script src="{{ url('public/assets/vendors/bootstrap/tinymce/tinymce.min.js') }}"></script> --}}
    <script  type="text/javascript"  src='https://cdn.tiny.cloud/1/8f6c5hin5zey58xxgkrr7yvj0f74e0a022gw8u5cu4mz5z8v/tinymce/7/tinymce.min.js'  referrerpolicy="origin">
      </script>
    </script>
  <script type="text/javascript">
    const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;
  
  
    // this is standared only remove OLd or
    tinymce.init({
      selector: '#editor',
      // selector: 'textarea',
      contextmenu: false,
    // width: 600,
      //height: 300,
      browser_spellcheck: true,
      plugins: [
      'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
      'media', 'table', 'emoticons', 'help'
      ],
      toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
      menu: {
      favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css'
    });
  </script>	
 
</head>

<body>
  <!-- ======= Header ======= -->
  	@include('backend.admin.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
 	@include('backend.admin.common.sidebar')
  <!-- End Sidebar-->

  <!-- Start #main -->
  <main id="main" class="main">

	@yield('content')
   

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  	@include('backend.admin.common.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('public/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ url('public/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('public/assets/vendors/chart/chart.umd.js') }}"></script>
  <script src="{{ url('public/assets/vendors/chart/echarts.min.js') }}"></script>
  <script src="{{ url('public/assets/vendors/bootstrap/quill/quill.js') }}"></script>
  <script src="{{ url('public/assets/vendors/bootstrap/simple-datatables.js') }}"></script>
  
  <link href="{{ url('public/assets/vendors/bootstrap/datatables-style.css') }}" rel="stylesheet">
  <!-- <script src="assets/vendors/bootstrap/tinymce/php-email-form-validate.js"></script> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- Template Main JS File -->
  <script src="{{ url('public/assets/js/main.js') }}"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92686ded1bd7a752","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"68c5ca450bae485a842ff76066d69420","b":1}' crossorigin="anonymous"></script>


 {{-- Tiny Editor Start here  --}}


{{-- Tiny Editor End here  --}}
</body>
</html>