@extends('site.layouts.master')
@section('page_name')
    ايجارات مصر |تفاصبل العقار
@endsection
@section('site_css')
    <script src="{{asset('assets/site/js/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/site/css/main.min.css')}}" />
    <script src="{{asset('assets/site/js/main.min.js')}}"></script>



    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: "{{$realEstate->start_date}}",
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                locale:'ar',
                direction:'rtl',
                buttonText:{
                    'today':'اليوم',
                    'week':'الاسبوع',
                    'day':'اليوم',
                    'list':'لائحة',
                    'month':'الشهر',
                },
                events: [

                        {
                            start: "{{$realEstate->start_date}}",
                            end: "{{$enddate}}",

                            display: 'background',
                            color: 'green'
                        },

                        {
                            start: "{{$enddate}}",
                            end: "{{$endCancelDate}}",
                            overlap: false,
                            display: 'background',
                            color: 'red'
                        }  ,


                    @foreach(\App\Models\Reservation::where('real_estate_id',$realEstate->id)->get() as $reservation)

                    {
                        start: "{{$reservation->start_date}}",
                        end:"{{$reservation->end_date}}",
                        display: 'background',
                        color: 'blue'
                    },

                    @endforeach
                ] ,
                select:function (start,end,allDays){
                   var start_date= start['startStr'];
                   $('#start_date').val(start_date);

                    $('#exampleModal').modal('toggle');

                },

            });

            calendar.render();
        });

    </script>
    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            max-height: 500px;
            margin: 0 auto;
        }

    </style>
@endsection
@section('content')

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
                    <a href="{{route('site_egareat_egypt')}}"> الوحدات </a>
                </li>
                <li>
                    <a href="#!" class="active"> تفاصيل الوحدة </a>
                </li>
            </ul>
            <figure>
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 300 100"
                     style="margin-bottom: -35px; enable-background: new 0 0 300 100" class="injected-svg js-svg-injector"
                     data-parent="#SVGwave1BottomSMShape">
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
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 p-2">
                        <!--  thumbs View -->
                        <div class="swiper thumbsView">
                            <div class="swiper-wrapper">
                                @foreach($realEstate->images as $image)

                                    <div class="swiper-slide">
                                        <a data-fancybox="products" href="img/home.webp" data-caption="">
                                            <img src="{{asset(''.$image->image)}}" style="height: 500px ;width: 700px">
                                        </a>
                                    </div>

                                @endforeach

                            </div>
                        </div>
                        <!-- thumbs Slider  -->
                        <div class="swiper thumbsSlider">
                            <div class="swiper-wrapper">
                                <!-- slide -->
                                @foreach($realEstate->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{asset(''.$image->image)}}">
                                    </div>

                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="InfoAdvertiser  wow fadeInDown">
                            <div class="AdvertiserName  ">
                                <!-- صورة المعلن -->
                                <div class="img-model wow fadeInRight delay-1s">
                                    <img src="{{asset(''.$realEstate->owner_image)}}" width="200" height="200" style="border-radius: 50%;" alt="img">
                                </div>
                                <!-- بيانات المعلن -->
                                <div class="info wow fadeInLeft delay-1s">
                                    <!-- name -->
                                    <h5>
                                        {{$realEstate->owner}}
                                    </h5>
                                    <!-- rate -->
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="detailsAdvertiser">
                                <div class="button">
                                    <a href="#calendar" class="btn me-3">احجز وحدته</a>
                                    <a href="https://wa.me/2{{$realEstate->phone}}" class="btn me-3">اتصل بنا<br><span> {{$realEstate->phone}}</span></a>
{{--                                    <button class="btn"> اتصل بنا</button>--}}
                                </div>

                            </div>
                            <div class="descriptionAdvertiser">
                                <h5 class="text-black-50">
                                    عن <span class="ms-1">{{$realEstate->owner}}</span>
                                </h5>
                                <p class="text-black-50 lh-lg description">
                                    أتشرف باستقبالكم في أي من وحداتي وسوف أعمل جاهداً على راحتكم من أجل قضاء إجازة ممتعة. جميع أماكن
                                    الاقامة التي أقدمها دائماً نظيفة وعلى استعداد دائم لاستقبال الزوار في أي وقت.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- *********** -->
        <section class="Villa">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 p-2  wow fadeInRight delay-2s">
                        <div class="title_villa">
                            <!-- عنوان الفيلا   -->
                            <h5> الساحل الشمالي , {{$realEstate->category->name??''}} </h5>
                            <!--وصف الفيلا  -->
                            <p class="text-black-50">
                               {{$realEstate->description}}
                            </p>
                        </div>
                        <!-- تفاصيل الفيلا -->
                        <div class="details_villa">
                            <div class="infoDetails">
                                <h6>
                                    سعر الليلة
                                </h6>
                                <p>
                                    <SPAN class="me-2">{{$realEstate->price}}</SPAN>
                                    جنية مصري
                                </p>
                            </div>
                            <div class="infoDetails">
                                <h6>
                                    التامين المسترد
                                </h6>
                                <p>
                                    {{$realEstate->insurance}}
                                </p>
                            </div>
                            <div class="infoDetails">
                                <h6>الخصم</h6>
                                <p>
                                    {{$realEstate->discount}}
                                </p>
                            </div>
                            <div class="infoDetails">
                                <h6>بيانات اساسية</h6>
                                <div class="MainInfo">
                                    <i class="fa-duotone fa-key"></i>
                                    <span class="ms-1">{{$realEstate->rooms}}</span>
                                </div>
                                <div class="MainInfo">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span class="ms-1"> {{$realEstate->toilet}}</span>
                                </div>
                                <div class="MainInfo">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span class="ms-1">{{$realEstate->numperofperson}}</span>
                                </div>
                                <div class="MainInfo">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span class="ms-1">{{$realEstate->beds}}</span>
                                </div>
                            </div>
                            <div class="infoDetails">
                                <h6>الاستلام</h6>
                                <p>
                                    من <span class="ms-1">{{$realEstate->start_date}}</span>
                                </p>
                            </div>
                            <div class="infoDetails">
                                <h6>المغادرة</h6>
                                <p>
                                    قبل <span class="ms-1">{{$realEstate->end_date}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2 align-self-start">
                        <div class="FeaturesVilla wow fadeInLeft delay-2s">
                            <h5 class="TitleFeatures">مميزات متوفرة</h5>
                            <div class="allCheck row">
                                @foreach($realEstate->fetures as $feature)

                                    <div class="checkBox col-md-6">
                                        <i class="fa-solid fa-octagon-check"></i>
                                        <p>{{$feature->name}}</p>
                                    </div>
                                @endforeach

                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>

                <!-- سياسة القبول + الرفض -->
                <div class="row accept">
                    <!-- سياسة الفبول -->
                    <div class="col-md-6 p-2  wow fadeInRight delay-1s">
                        <h6 class="">شروط الحجز والتعاقد</h6>
                        <ul>
                            <li class="text-black-50">{{$realEstate->rules}}</li>

                        </ul>
                    </div>
{{--                    <!-- سياسة الرفض -->--}}
{{--                    <div class="col-md-6 p-2  wow fadeInRight delay-1s">--}}
{{--                        <h6 class="red">قواعد <span>الغاء</span> الحجز</h6>--}}
{{--                        <ul>--}}
{{--                            <li  class="text-black-50">--}}
{{--                                لا يمكن الغاء الحجز تحت أي ظرف. عند الغاء المستأجر لحجزه يتحمل كامل مبلغ مقدم الحجز الذي تم دفعه بشكل--}}
{{--                                منفرد ولا يسترد منه أي مبلغ ولو بشكل جزئي.--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}



                <div id="calendar">

                </div>

                <!-- data -->
                    <div class="my-4" style="width: 100%" >{!! $realEstate->position_url !!}</div>


                </div>
        </section>
    </content>









@auth


{{--@if(Auth() === false)--}}


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حجز العقار {{$realEstate->name}}</h5>
                    <button type="button" class="closec close_model" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="start_date" class="form-control-label">تاريخ البداية </label>
                            <input type="date" class="form-control"  name="start_date" id="start_date">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="end_date" class="form-control-label">تاريخ النهاية </label>
                            <input type="date" class="form-control" name="end_date" id="end_date">
                        </div>

                    </div>
                    <input type="hidden" id="real_estate_id" value="{{$realEstate->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_model" data-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-primary " id="start_reservation">حجز</button>
                </div>
            </div>
        </div>
    </div>
@endauth




{{--@endif--}}

{{-- @if(Auth() === false)--}}

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">للحجز يرجي تسجيل الدخول</h5>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close_model" data-dismiss="modal">اغلاق</button>
                        <a href="{{route('login')}}">  <button type="button" class="btn btn-primary " id="">تسجيل</button></a>
                    </div>
                </div>
            </div>
        </div>

{{-- @endif--}}

@endsection

@section('site_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        $('.close_model').click(function (){
            $('#exampleModal').modal('toggle');


        });
        $('#start_reservation').click(function (){
           var start_date=$('#start_date').val();
           var end_date=$('#end_date').val();
           var real_estate_id=$('#real_estate_id').val();

            $.ajax({
                type:'GET',
                url:"{{route('makeReservation')}}",
                data:{
                  start_date:start_date,
                    end_date:end_date,
                    real_estate_id:real_estate_id,
                },

                success:function(res){
                    if(res['status']==true)
                    {
                         toastr.success('تم حجز العقار بنجاح');



                             location.reload();




                       // window.location="{{route('site_egareat_egypt')}}";

                    }
                    else if(res['status']==false)
                    {


                        swal("  حجز عقار ", res['message'], "error", {button: "حسناً",});

                    }
                    else
                    {
                       swal("  حجز عقار ", "رجاء المحاولة لاحقا", "error", {button: "حسناً",});

                    }



                },
                error: function(data){
                    swal("  حجز عقار ", "رجاء المحاولة لاحقا", "error", {button: "حسناً",});

                }
            });

        });
    </script>

@endsection

