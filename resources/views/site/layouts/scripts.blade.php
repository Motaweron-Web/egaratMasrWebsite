<script src="{{asset('assets/site/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/js/popper.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/site/js/wow.js')}}"></script>
<script src="{{asset('assets/site/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/site/js/select2.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/site/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/site/js/Custom.js')}}"></script>
<script>
    $("header").load("header.html");
    $("footer").load("footer.html");
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@toastr_js
@toastr_render
<script>
    window.addEventListener('online', () =>{
        // window.location.reload();
        toastr.success('تم استعادة الاتصال بالانترنت');
    });
    window.addEventListener('offline', () =>{
        toastr.error('انقطع الاتصال , يرجي التحقق من جودة الانترنت لديك');
    });
</script>
@yield('site_js')
