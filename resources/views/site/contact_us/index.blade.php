@extends('site.layouts.master')
@section('page_name')
    إيجارات مصر | الصفحة الرئيسية
@endsection
@section('site_css')

@endsection
@section('content')
    @include('site.layouts.social-navbar')

    <content>
        <!-- Banner  -->
        <section class="mainBanner">
            <button onclick="history.back()" class="Back">
                <i class="fas fa-angle-left"></i>
            </button>
            <ul>
                <li>
                    <a href="{{ route('site_egareat_egypt') }}"> الرئيسية </a>
                </li>
                <li>
                    <a href="#!" class="active"> اتصل بنا </a>
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
                <p class="m wow fadeInDown " >
                    يسعدنا تلقي طلباتكم و إستفسارتكم على مدار الساعة عبر الخط الساخن
                    01277779200 من أي هاتف داخل مصر او 00201277779200 من أي مكان بالعالم
                    ونتشرف بإستقبالكم فى أي من فروعنا بمدينة نصر - القاهرة و سموحة -
                    الإسكندرية أو فرع الرياض بالمملكة العربية السعودية فى مواعيد العمل
                    الرسمية.
                </p>
                <p class="mt-3 m wow fadeInDown">
                    جميع موظفينا جاهزون لخدمتكم من العاشرة صباحاً وحتى السادسة مساءاً
                    بالتوقيت المحلي لجمهورية مصر العربية فى جميع الأيام عدا يومي الخميس
                    والجمعة لفرع مدينة ونصر والجمعة فقط فرع الاسكندرية بالإضافة للعطلات
                    الرسمية.
                </p>
                <p class="text-black-50 py-3 smallText wow fadeInDown"
                >يمكنكم مراسلتنا عبر نموذج الإتصال البريدي أدناه أو الإتصال مباشرة
                    على أحد أرقام الإتصال الخاصة بفريق العمل.</p
                >
                <!-- form + adders -->
                <div class="row justify-content-between ">
                    <div class="col-lg-6 col-sm-6 col-12 wow fadeInRight delay-1s">
                        <form class="Aform" action="{{route('contactUs.store')}}" method="post">
                            @csrf
                            <div>
                                <div>
                                    <label for="full_name" >الاسم كاملا</label>
                                </div>
                                <input name="full_name" required  id="full_name" type="text">
                            </div>
                            <div>
                                <div>
                                    <label for="company_name"> اسم الشركة</label>
                                </div>
                                <input name="company_name" required id="company_name" type="text">
                            </div>

                            <div>
                                <div>
                                    <label for="phone">  رقم الهاتف</label>
                                </div>
                                <input type="number" name="phone" required id="phone">
                            </div>
                            <div>
                                <div>
                                    <label for="email"> البريد الاكتروني</label>
                                </div>
                                <input name="email" required id="email" type="email">
                            </div>
                            <div class="">
                                <div>
                                    <label  for="purpose_message">غرض الرسالة </label>
                                </div>
                                <input name="purpose_message" required id="purpose_message" type="text">
                            </div>
                            <div class="mb-3">
                                <div>
                                    <label for="message">الرسالة</label>
                                </div>
                                <textarea name="message" required id="message" cols="30" rows="10">

                        </textarea>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn">ارسال</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInLeft delay-1s">
                        <div class="boxAdders  ">
                            <div class="tittle mb-3">
                                <h5 class="pb-1">الفروع والوكلاء فى مصر</h5>
                                <h6 class="pb-3">القاهرة - بلدو</h6>
                                <p class="pb-1"><i class="fa-light fa-location-dot pe-1"></i>مدينة نصر - 90 شارع حسن مأمون - الطابق السادس</p>
                                <p class="pb-1"> <i class="fa-light fa-mobile-notch pe-1"></i> 012-7777-9200</p>
                                <p class="pb-1"> <i class="fa-light fa-phone pe-1"></i> 02-26774410</p>
                            </div>
                            <div class="tittle mb-3">
                                <h5 class="pb-1">  الفروع فى المملكة العربية السعودية </h5>
                                <h6 class="pb-3"> الرياض - عطلات النخبة للسفر والسياحة </h6>
                                <p class="pb-1"><i class="fa-light fa-location-dot pe-1"></i> تقاطع طريق أبو بكر الصديق مع طريق الملك عبدالله </p>
                                <p class="pb-1"> <i class="fa-light fa-mobile-notch pe-1"></i>  054-565-9170</p>

                            </div>
                            <div class="tittle mb-3">
                                <h5 class="pb-1">  للاعلان عن وحدتك من خلال موقعنا
                                </h5>
                                <p class="pb-3">يرجي مراسلة الإدارة من خلال نموذج المراسلة مع ذكر كافة التفاصيل </p>
                                <p class="pb-1">  أو الإتصال على الرقم التالي اذا كنت داخل مصر </p>
                                <p class="pb-3"> <i class="fa-light fa-mobile-notch pe-1"></i>  054-565-9170</p>

                                <p class="pb-1">  أو الإتصال على الرقم التالي اذا كنت خارج مصر </p>
                                <p class="pb-1"> <i class="fa-light fa-mobile-notch pe-1"></i>  054-565-9170</p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </content>






@endsection
@section('site_js')

@endsection


