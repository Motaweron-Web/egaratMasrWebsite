@extends('Admin/layouts/master')
@section('title')
    {{($setting->title) ?? 'الصفحة الرئيسية'}} | لوحة التحكم
@endsection
@section('page_name')
    الرئـيسية
@endsection
@section('content')




    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> العقارات {{($setting->title) ?? ''}}</h3>
                    <div class="">
                        <button class="btn btn-secondary btn-icon text-white addBtn">
									<span>
										<i class="fe fe-plus"></i>
									</span> اضافة جديد
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-nowrap w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-25px">الاسم</th>
                                <th class="min-w-25px">صاحب العقار</th>
                                <th class="min-w-25px">الهاتف</th>
                                <th class="min-w-25px">الوصف</th>
                                <th class="min-w-25px">عدد الغرف</th>
                                <th class="min-w-25px"> السعر</th>

                                <th class="min-w-25px">العمليات</th>

                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Delete MODAL -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">حذف بيانات</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="delete_id" name="id" type="hidden">
                        <p>هل انت متأكد من حذف البيانات التالية <span id="title" class="text-danger"></span>؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="dismiss_delete_modal">
                            اغلاق
                        </button>
                        <button type="button" class="btn btn-danger" id="delete_btn">حذف !</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL CLOSED -->

        <!-- Create Or Edit Modal -->
        <div class="modal fade" id="editOrCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">بيانات العقار</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">

                    </div>
                </div>
            </div>
        </div>
        <!-- Create Or Edit Modal -->
    </div>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'owner', name: 'owner'},
            {data: 'phone', name: 'phone'},
            {data: 'description', name: 'description'},
            {data: 'rooms', name: 'rooms'},

            {data: 'price', name: 'price'},

            {data: 'action', name: 'action'},

        ]
        showData('{{route('real_estate.index')}}', columns);
        // Delete Using Ajax
        deleteScript('{{route('delete_real_estate')}}');
        // Add Using Ajax
        showAddModal('{{route('real_estate.create')}}');
        addScript();
        // Add Using Ajax
        showEditModal('{{route('real_estate.edit',':id')}}');
        editScript();
    </script>















{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card  banner">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-3 col-lg-2 text-center">--}}
{{--                            <img src="https://laravel.spruko.com/yoha/Sidemenu-Icon-Light-rtl/assets/images/pngs/dash2.png" alt="img" class="w-95">--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-9 col-lg-10 pl-lg-0">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-7 col-lg-6">--}}
{{--                                    <div class="text-right text-white mt-xl-4">--}}
{{--                                        <h3 class="font-weight-semibold">Congratulations Steven</h3>--}}
{{--                                        <h4 class="font-weight-normal">You are Reached your targeted milestone</h4>--}}
{{--                                        <p class="mb-lg-0 text-white-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">--}}
{{--                                    <h5 class="font-weight-semibold mb-1 text-white">Clicks &amp; Conversions Today</h5>--}}
{{--                                    <h2 class="display-2 mb-3 number-font text-white">90%</h2>--}}
{{--                                    <div class="btn-list mb-xl-0">--}}
{{--                                        <a href="#" class="btn btn-dark mb-xl-0">Check Details</a>--}}
{{--                                        <a href="#" class="btn btn-white mb-xl-0" id="skip">No, Thanks</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--    <div class="row">--}}
{{--        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <h6 class="">New Sessions(Avg)</h6>--}}
{{--                            <h3 class="mb-2 number-font">67.96%</h3>--}}
{{--                            <p class="text-muted">--}}
{{--                                <span class="text-muted"><i class="fa fa-chevron-circle-up text-muted ml-1"></i> 3%</span>--}}
{{--                                last month--}}
{{--                            </p>--}}
{{--                            <div class="progress h-2">--}}
{{--                                <div class="progress-bar bg-orange w-50" role="progressbar"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <h6 class="">Time On site(Avg)</h6>--}}
{{--                            <h3 class="mb-2 number-font">5m:45s</h3>--}}
{{--                            <p class="text-muted">--}}
{{--                                <span class="text-muted"><i class="fa fa-chevron-circle-down text-muted ml-1"></i> 0.15%</span>--}}
{{--                                last month--}}
{{--                            </p>--}}
{{--                            <div class="progress h-2">--}}
{{--                                <div class="progress-bar bg-secondary w-50" role="progressbar"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <h6 class="">Page Views(Avg)</h6>--}}
{{--                            <h3 class="mb-2 number-font">8.14</h3>--}}
{{--                            <p class="text-muted">--}}
{{--                                <span class="text-muted"><i class="fa fa-chevron-circle-down text-muted ml-1"></i> 0.15%</span>--}}
{{--                                last month--}}
{{--                            </p>--}}
{{--                            <div class="progress h-2">--}}
{{--                                <div class="progress-bar bg-secondary1 w-50" role="progressbar"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col-lg-8 col-sm-12 col-xl-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Countrywise Traffics</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered table-hover  mb-0 text-nowrap">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Country</th>--}}
{{--                                <th>Sessions</th>--}}
{{--                                <th>Bounce Rate</th>--}}
{{--                                <th>Time On site(Avg)</th>--}}
{{--                                <th>Status</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td><img src="https://laravel.spruko.com/yoha/Sidemenu-Icon-Light-rtl/assets/images/flags/us.svg" class="w-5 h-5 ml-2" alt="">United State</td>--}}
{{--                                <td>13,786</td>--}}
{{--                                <td>56.8%</td>--}}
{{--                                <td>2m:56s</td>--}}
{{--                                <td>--}}
{{--                                    <div class="progress h-1 mt-2">--}}
{{--                                        <div class="progress-bar bg-primary w-50" role="progressbar"></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td><img src="https://laravel.spruko.com/yoha/Sidemenu-Icon-Light-rtl/assets/images/flags/in.svg" class="w-5 h-5 ml-2" alt="">India</td>--}}
{{--                                <td>16,876</td>--}}
{{--                                <td>34.5%</td>--}}
{{--                                <td>1m:43s</td>--}}
{{--                                <td>--}}
{{--                                    <div class="progress h-1 mt-2">--}}
{{--                                        <div class="progress-bar bg-orange  w-20" role="progressbar"></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td><img src="https://laravel.spruko.com/yoha/Sidemenu-Icon-Light-rtl/assets/images/flags/ru.svg" class="w-5 h-5 ml-2" alt="">Russia</td>--}}
{{--                                <td>45,863</td>--}}
{{--                                <td>93.76%</td>--}}
{{--                                <td>8m:16s</td>--}}
{{--                                <td>--}}
{{--                                    <div class="progress h-1 mt-2">--}}
{{--                                        <div class="progress-bar bg-secondary1 w-60" role="progressbar"></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td><img src="https://laravel.spruko.com/yoha/Sidemenu-Icon-Light-rtl/assets/images/flags/ca.svg" class="w-5 h-5 ml-2" alt="">Canada</td>--}}
{{--                                <td>37,917</td>--}}
{{--                                <td>46.76%</td>--}}
{{--                                <td>5m:76s</td>--}}
{{--                                <td>--}}
{{--                                    <div class="progress h-1 mt-2">--}}
{{--                                        <div class="progress-bar bg-secondary w-40" role="progressbar"></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td><img src="https://laravel.spruko.com/yoha/Sidemenu-Icon-Light-rtl/assets/images/flags/ge.svg" class="w-5 h-5 ml-2" alt="">Germany</td>--}}
{{--                                <td>67,967</td>--}}
{{--                                <td>34.876%</td>--}}
{{--                                <td>5m:34s</td>--}}
{{--                                <td>--}}
{{--                                    <div class="progress h-1 mt-2">--}}
{{--                                        <div class="progress-bar bg-warning w-30" role="progressbar"></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!-- COL END -->--}}
{{--        <div class="col-lg-4 col-md-12 col-xl-4">--}}
{{--            <div class="card overflow-hidden">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Traffic by Site</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="card shadow-none">--}}
{{--                                <div class="card-body p-4">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <i class="bx bxl-facebook fs-40 text-primary"></i>--}}
{{--                                        <h4 class="mt-3 mb-0 number-font fs-20">8,209</h4>--}}
{{--                                        <p class="text-muted mb-0">FaceBook</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="card shadow-none">--}}
{{--                                <div class="card-body p-4">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <i class="bx bxl-google-plus fs-40 text-danger"></i>--}}
{{--                                        <h4 class="mt-3 mb-0 number-font fs-20">7,210</h4>--}}
{{--                                        <p class="text-muted mb-0">Google</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="card shadow-none mb-lg-0">--}}
{{--                                <div class="card-body p-4">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <i class="bx bxl-youtube fs-40 text-orange"></i>--}}
{{--                                        <h4 class="mt-3 mb-0 number-font fs-20">6,234</h4>--}}
{{--                                        <p class="text-muted mb-0">Youtube</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="card shadow-none mb-0">--}}
{{--                                <div class="card-body p-4">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <i class="bx bxl-twitter fs-40 text-info"></i>--}}
{{--                                        <h4 class="mt-3 mb-0 number-font fs-20">4,567</h4>--}}
{{--                                        <p class="text-muted mb-0">Twitter</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



@endsection
@section('js')

@endsection

