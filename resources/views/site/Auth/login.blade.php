<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title -->
    <title>إيجارات مصر</title>
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
</head>
<body >
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
                <a href="{{route('site_egareat_egypt')}}"> الرئيسية </a>
            </li>
            <li>
                <a href="{{route('register')}}" class=""> حساب جديد </a>
            </li>
            <li>
                <a href="login.html" class="active">  حسابي </a>
            </li>
        </ul>
        <figure>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                x="0px"
                y="0px"
                viewBox="0 0 300 100"
                style="margin-bottom: -35px; enable-background: new 0 0 300 100"
                class="injected-svg js-svg-injector"
                data-parent="#SVGwave1BottomSMShape"
            >
                <g>
                    <path
                        class="wave-bottom-1-sm-0"
                        fill="#fdfdfd"
                        opacity=".8"
                        d="M10.9,63.9c0,0,42.9-34.5,87.5-14.2c77.3,35.1,113.3-2,146.6-4.7C293.7,41,315,61.2,315,61.2v54.4H10.9V63.9z"
                    ></path>
                    <path
                        class="wave-bottom-1-sm-0"
                        fill="#fdfdfd"
                        opacity=".6"
                        d="M-55.7,64.6c0,0,42.9-34.5,87.5-14.2c77.3,35.1,113.3-2,146.6-4.7c48.7-4.1,69.9,16.2,69.9,16.2v54.4H-55.7     V64.6z"
                    ></path>
                    <path
                        class="wave-bottom-1-sm-0"
                        fill="#fdfdfd"
                        opacity=".4"
                        fill-opacity="0"
                        d="M23.4,118.3c0,0,48.3-68.9,109.1-68.9c65.9,0,98,67.9,98,67.9v3.7H22.4L23.4,118.3z"
                    ></path>
                    <path
                        class="wave-bottom-1-sm-0"
                        fill="#fdfdfd"
                        d="M-54.7,83c0,0,56-45.7,120.3-27.8c81.8,22.7,111.4,6.2,146.6-4.7c53.1-16.4,104,36.9,104,36.9l1.3,36.7l-372-3     L-54.7,83z"
                    ></path>
                </g>
            </svg>
        </figure>
    </section>
    <!-- end Banner -->
    <section class="contact_Us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3">
                    <div class="formBox">
                        <div class="Aform form-style" id="myForm" >

                            <div>
                                <div>
                                    <label for=""> البريد الاكتروني</label>
                                </div>
                                <input type="email"  id="data-email" name="email">
                            </div>


                            <div class="mb-4">
                                <div>
                                    <label for="">   كلمة المرور </label>
                                </div>
                                <input type="password" id="data-password" name="password">
                            </div>


                            <div class="text-center mb-3">
                                <button class="btn" id="btn-login" onclick="login()" > دخول</button>
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
<!-- ================ /Footer ================= -->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////JavaScript/////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<script src="{{asset('asset/site/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/site/js/popper.min.js')}}"></script>
<script src="{{asset('asset/site/js/jquery.appear.js')}}"></script>
<script src="{{asset('asset/site/js/wow.js')}}"></script>
<script src="{{asset('asset/site/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('asset/site/js/select2.min.js')}}"></script>
<script src="{{asset('asset/site/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('asset/site/js/odometer.min.js')}}"></script>
<script src="{{asset('asset/site/js/Custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>


     function login(){



         var email=$('#data-email').val();
         var password=$('#data-password').val();


         $.ajax({
             type:'GET',
             url:"{{route('handleLogin')}}",
             data:{
                 email:email,
                 password:password,
             },

             success:function(res){
                 if(res['status']==true)
                 {
                   //  location.reload();

                     window.location="{{route('site_egareat_egypt')}}";

                 }
                 else if(res['status']==false)
                 {
                     swal(" تسجيل الدخول ", "يرجي التاكد من البيانات المدخلة", "error", {button: "حسناً",});

                 }
                 else if(res['status']=='error')
                 {
                     swal(" تسجيل الدخول ", "يرجي ادخال بريد الكتروني وكلمة مرور مسجلين لدينا", "error", {button: "حسناً",});


                 }
                 else
                 {

                 }// location.reload();


             },
             error: function(data){
                 location.reload();
             }
         });



     }

</script>
<script>
    $("header").load("header.html");
    $("footer").load("footer.html");
</script>
</body>
</html>
