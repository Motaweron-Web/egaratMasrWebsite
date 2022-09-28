
@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | العقارات
@endsection
@section('page_name') العقارات @endsection
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
@endsection


