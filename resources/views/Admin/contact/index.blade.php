@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | تواصل معنا
@endsection
@section('page_name') تواصل معنا @endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> الرسائل {{($setting->title) ?? ''}}</h3>
                    <div class="">

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-nowrap w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">

                                <th class="min-w-50px rounded-end">الاسم كاملا</th>
                                <th class="min-w-50px rounded-end">اسم الشركة </th>
                                <th class="min-w-50px rounded-end">رقم الهاتف</th>
                                <th class="min-w-50px rounded-end"> البريد</th>
                                <th class="min-w-50px rounded-end">غرض الرسالة </th>
                                <th class="min-w-50px rounded-end"> الرسالة </th>

                                <th class="min-w-50px rounded-end">العمليات</th>
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
                        <h5 class="modal-title" id="example-Modal3">بيانات التصنيف</h5>
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
    <script>
        var columns = [

            {data: 'full_name', name: 'full_name', orderable: false, searchable: false},

            {data: 'company_name', name: 'company_name', orderable: false, searchable: false},
            {data: 'phone', name: 'phone', orderable: false, searchable: false},
            {data: 'email', name: 'email', orderable: false, searchable: false},
            {data: 'purpose_message', name: 'purpose_message', orderable: false, searchable: false},
            {data: 'message', name: 'message', orderable: false, searchable: false},

            {data: 'action', name: 'action', orderable: false, searchable: false},



        ]
        showData('{{route('contact_us.index')}}', columns);
        // Delete Using Ajax
        deleteScript('{{route('delete_contact_us')}}');
        // Add Using Ajax
        showAddModal('{{route('contact_us.create')}}');
        addScript();
        // Add Using Ajax
        showEditModal('{{route('contact_us.edit',':id')}}');
        editScript();
    </script>
@endsection


