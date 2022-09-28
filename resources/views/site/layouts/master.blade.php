<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}">
<head>
    @include('site.layouts.head')
</head>
<body @yield('body_style')>
    @yield('content')
@include('site/layouts/footer')
@include('site/layouts/scripts')
@toastr_js
@toastr_render
@yield('site-js')
</body>
</html>




