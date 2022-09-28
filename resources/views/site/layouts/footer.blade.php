
<foter>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-2 py-4">
                <img class="logo" src="{{asset('assets/site/img/logo.png')}}" alt="" />
                <p class="info">
                    نوفر منصة ايجارات مصر لكل من ملاك الواحدات والمستأجرين ونقوم بخدمات
                    التأجير والحجز الالكتروني نيابة عن الملاك
                </p>
                <div class="socialIcons">
                    <a href="{{$facebook->link??''}}" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="{{$whatsapp->link??''}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="{{$twitter->link??''}}" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="{{$envelope->link??''}}" target="_blank"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 p-2 py-4">
                <h5 class="head">خدمتنا</h5>
                <div class="Links">
                    <ul>
                        <li>
                            <a href="{{route('aboutUs')}}"> من نحن </a>
                        </li>
                        <li>
                            <a href="{{route('register')}}"> افتح حساب مجاناً </a>
                        </li>
                        <li>
                            <a href="{{route('contactUs')}}"> اتصل بنا </a>
                        </li>
                        <li>
                            <a href="{{route('user.myProfile')}}"> حسابي </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 col-lg-6 p-2 py-4">
                <div class="apps">
                    <img class="mobile " src="{{asset('assets/site/img/mobile.svg')}}" alt="" />

                    <div class="downloadLinks ">
                        <h5>يمكنك تحميل تطبيقنا الآن</h5>
                        <p>
                            يمكنك الاستمتاع بجميع الخدمات الموجوده علي الموقع الالكتروني ولكن
                            عن طريق الجوال
                        </p>
                        <div class="download">
                            <a href="#!" target="_blank">
                                <img src="{{asset('assets/site/img/appStore.svg')}}" alt="" />
                            </a>
                            <a href="#!" target="_blank">
                                <img src="{{asset('assets/site/img/google.svg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Copyright">
            <p>
                جميع الحقوق محفوظة @2022 . <a target="_blank" href="http://www.motaweron.com/"> المطورون </a>
            </p>
        </div>
    </div>
</section>
</foter>
