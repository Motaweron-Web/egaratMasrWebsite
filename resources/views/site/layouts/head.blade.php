

    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title -->
    <title>@yield('page_name')</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/site/img/logo.png')}}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap.rtl.min.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/site/css/fontawesome.min.css')}}" />
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('assets/site/css/swiper-bundle.min.css')}}" />
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/site/css/animate.min.css')}}" />
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('assets/site/css/select2.min.css')}}" />
    <!-- img gallery -->
    <link rel="stylesheet" href="{{asset('assets/site/css/jquery.fancybox.min.css')}}" />
    <!-- odometer -->
    <link rel="stylesheet" href="{{asset('assets/site/css/odometer.min.css')}}" />
    <!-- Custom style  -->
    <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}" />

<!-- TOASTR CSS -->
@toastr_css
@yield('site_css')
