@extends('site.layouts.master')
@section('page_name')
    ايجارات مصر | الصفحة الرئيسية
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
                    <a href={{route('site_egareat_egypt')}}> الرئيسية </a>
                </li>
                <li>
                    <a href="all-units.html" class="active"> الوحدات </a>
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
        <section class="">
            <div class="container">
                <div class="row">

                   @forelse($realEstates as $realEstate)
                    <div class="col-md-6 p-2 wow fadeInDown delay-1s" style="width: 33.33%">
                        <div class="unitBox">
                            <div class="card" >
                                <div class="img-container">
                                    <img src="{{asset(''.\App\Models\RealEstateImage::where('real_estate_id',$realEstate->id)->first()->image)}}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa-duotone fa-house me-1"></i>{{$realEstate->category->name}}  </h5>
                                    <div>
                                        <div class="infoDetails d-flex align-items-center my-3 justify-content-between">

                                            <div class="MainInfo me-3">
                                                <i class="fa-duotone fa-key"></i>
                                                <span class="mx-1">{{$realEstate->rooms}}</span>
                                            </div>
                                            <div class="MainInfo me-3">
                                                <i class="fa-duotone fa-bath"></i>
                                                <span class="mx-1">{{$realEstate->toilet}}</span>
                                            </div>
                                            <div class="MainInfo me-3">
                                                <i class="fa-duotone fa-garage-car"></i>
                                                <span class="mx-1">5</span>
                                            </div>
                                            <div class="MainInfo me-3">
                                                <i class="fa-duotone fa-bed-front"></i>
                                                <span class="mx-1">5</span>
                                            </div>

                                        </div>
                                        <div class="MainInfo">
                                            <i class="fa-duotone fa-user " style="font-size: 20px;"></i>
                                            <span class="mx-1">تسع حتى {{$realEstate->numperofperson}} شخص
                          </span>
                                        </div>
                                        <div class="MainInfo my-2">
                                            <i class="fa-duotone fa-calendar-week" style="font-size: 20px;"></i>
                                            <span class="mx-1">  حجز فوري بدون انتظار موافقة المالك
                          </span>
                                        </div>
                                        <div class="infoDetails d-flex align-items-center my-2">
                                            <h6>الاستلام</h6>
                                            <p class="ms-3">
                                                من <span class="ms-1">{{$realEstate->start_date}}</span>
                                            </p>
                                        </div>
                                        <div class="infoDetails d-flex align-items-center my-2">
                                            <h6>المغادرة</h6>
                                            <p class="ms-3">
                                                قبل <span class="ms-1">{{$realEstate->end_date}}</span>
                                            </p>
                                        </div>
                                        <div class="infoDetails d-flex align-items-center my-2 justify-content-between mt-3">
                                            <div class="button">
                                                <button class="btns"><a href="{{route('details',$realEstate->id)}}" style="text-decoration: none; color:#fff;">التفاصيل</a></button>
                                                <!-- <button class="btn"> </button> -->
                                            </div>
                                            <div class="price ">
                                                <i class="fa-solid fa-money-bill-wave"></i>
                                                <h6>EGP {{$realEstate->price}} / <span> يوم </span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty



                    @endforelse
                    <!--  -->
                </div>
            </div>
        </section>

    </content>






@endsection
@section('site_js')

@endsection
