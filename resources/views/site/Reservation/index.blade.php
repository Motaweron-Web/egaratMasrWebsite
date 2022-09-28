<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title -->
    <title>إيجارات مصر| حجوزاتي</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" />

</head>

<body>
<!-- ================ Header ================= -->
<header></header>
<!-- ================ /Header ================= -->
<!--(((((((((((((((((((((((()))))))))))))))))))))))-->
<!--((((((((((((((((((( content )))))))))))))))))))-->
<!--(((((((((((((((((((((((()))))))))))))))))))))))-->
<content>
    <!-- Banner  -->
    <section class="mainBanner">
        <button onclick="history.back()" class="Back">
            <i class="fas fa-angle-left"></i>
        </button>
        <ul>
            <li>
                <a href="{{url('/')}}"> الرئيسية </a>
            </li>
            <li>
                <a href="#!" class="active"> حجوزاتي </a>
            </li>
        </ul>
        <figure>
            <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 300 100"
                 style="margin-bottom: -35px; enable-background: new 0 0 300 100"
                 class="injected-svg js-svg-injector" data-parent="#SVGwave1BottomSMShape">
                <g>
                    <path class="wave-bottom-1-sm-0" fill="#fdfdfd" opacity=".8"
                          d="M10.9,63.9c0,0,42.9-34.5,87.5-14.2c77.3,35.1,113.3-2,146.6-4.7C293.7,41,315,61.2,315,61.2v54.4H10.9V63.9z">
                    </path>
                    <path class="wave-bottom-1-sm-0" fill="#fdfdfd" opacity=".6"
                          d="M-55.7,64.6c0,0,42.9-34.5,87.5-14.2c77.3,35.1,113.3-2,146.6-4.7c48.7-4.1,69.9,16.2,69.9,16.2v54.4H-55.7     V64.6z">
                    </path>
                    <path class="wave-bottom-1-sm-0" fill="#fdfdfd" opacity=".4" fill-opacity="0"
                          d="M23.4,118.3c0,0,48.3-68.9,109.1-68.9c65.9,0,98,67.9,98,67.9v3.7H22.4L23.4,118.3z"></path>
                    <path class="wave-bottom-1-sm-0" fill="#fdfdfd"
                          d="M-54.7,83c0,0,56-45.7,120.3-27.8c81.8,22.7,111.4,6.2,146.6-4.7c53.1-16.4,104,36.9,104,36.9l1.3,36.7l-372-3     L-54.7,83z">
                    </path>
                </g>
            </svg>
        </figure>
    </section>
    <!-- end Banner -->
    <section class="contact_Us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3">
                    <div class="mt-3">
{{--                        <form action="{{route('user.updateImage',$user->id)}}" enctype="multipart/form-data" method="POST" id="form-id">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                            <label for="name" class="form-control-label">الصورة</label>--}}
{{--                            <input type="file" onchange="uploadImage()" class="dropify" name="image" data-default-file="{{asset(''.$user->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>--}}
{{--                          </div>--}}
{{--                        </form>--}}
                        <!-- <p class="text-muted text-center mt-2 mb-0">Max File size</p> -->
                        <div class="Boxprofile">
                            <div class="py-3 px-3">
                                <div class="button my-3">
                                    <h1>تفاصيل حجزك</h1>
                                </div>
                                <div class="profileBox">
                                    <div  class="profileBoxs ">

                                            <div class="col-md-6">
                                                <h4> الاسم</h4>

                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-black-50 "> {{$user->full_name}}</p>

                                            </div>
                                    </div>
                                    <div class="profileBoxs">

                                        <div class="col-md-6">
                                            <h4>الايميل</h4>

                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-black-50">
                                                {{ $user->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="profileBoxs">
                                        <div class="col-md-6">
                                            <h4> عدد الحجوزات</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-black-50">
                                                {{ $reservation->count() }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="profileBoxs">
                                        <div class="col-md-6">
                                            <h4>تكلفة الحجوزات</h4>
                                        </div>

                                        <div class="col-md-6">
                                            <p class="text-black-50">
                                                {{ number_format($allprice,2)  }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="profileBoxs">
                                        <div class="col-md-6">
                                            <h3>تفاصيل الحجوزات</h3>
                                        </div>
                                    </div>
                                    <hr class="w-auto">
                                    @foreach($reservation as $reservate)
                                    <div class="profileBoxs">
                                        <div class="col-md-6">
                                            <h4>حجز رقم {{ $loop->iteration }}</h4>
                                        </div>

                                        <div class="col-md-6">
                                            <p class="text-black-50">
                                                {{ ' تاريخ البداية '. $reservate->start_date }} <br> {{ ' تاريخ الانتهاء ' . $reservate->end_date }}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @foreach($reservation as $reservate)
                                    @foreach($realestate as $estate)
                                        @if($estate->id == $reservate->real_estate_id)
                                                <div class="profileBoxs">
                                                    <div class="col-md-6">
                                                        <h4>اسم المؤجر</h4>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <p class="text-black-50">
                                                            {{$estate->name}}
                                                        </p>
                                                    </div>
                                                </div>
                                        @endif
                                    @endforeach
                                    @endforeach

                                    <div class="profileBoxs">
                                        <div class="col-md-6" style="margin-top: 25px">
                                            <a style="background-color: #d9b026; color: white" class="btn btn-sm" href="{{ route('contactUs') }}"> <h3>للتعديل و الالغاء</h3></a>
                                        </div>
                                    </div>
                                    <div class="profileBoxs">
                                        <div class="col-md-6">
                                            <h4></h4>
                                        </div>
                                        <div class="col-md-6">

                                            <p class="text-black-50"> </p>
                                        </div>
                                    </div>
                                    <hr class="w-auto">
                                    <div class="profileBoxs">
                                        <div class="col-md-6">

                                          <h4>  عضو منذ</h4>
                                        </div>
                                        <div class="col-md-6">

                                        <p class="text-black-50">    {{ date_format($user->created_at,"Y/m/d ")}}</p>
                                        </div>
                                    </div>
                                    <div class="profileBoxs">
                                        <div class="col-md-6">

                                           <h4>  اخر تواجد</h4>
                                        </div>
                                        <div class="col-md-6">

                                        <p class="text-black-50">  {{ $user->last_seen}}  <span class="time">13:0:0</span>  10-8-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</content>
<!--(((((((((((((((((((((((()))))))))))))))))))))))-->
<!--((((((((((((((((( / content )))))))))))))))))))-->
<!--(((((((((((((((((((((((()))))))))))))))))))))))-->
<!-- ================ Footer ================= -->
<footer></footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<!-- ================ /Footer ================= -->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////JavaScript/////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>
<script>

    function uploadImage(){
        $('#form-id').submit();

    }


</script>
</body>

</html>
