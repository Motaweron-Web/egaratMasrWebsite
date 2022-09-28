@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | التصنيفات
@endsection
@section('page_name') التصنيفات @endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> تصنيفات {{($setting->title) ?? ''}}</h3>
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
                        <table class="table table-striped table-bordered text-nowrap w-100" id="dataTableaz">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-50px">الصورة</th>
                                <th class="min-w-50px">الاسم</th>
{{--                                <th class="min-w-50px">view</th>--}}

                                <th class="min-w-50px rounded-end">العمليات</th>
                            </tr>
                            </thead>
                        </table>
                        <table class="table table-striped table-bordered text-nowrap w-100" >
                            <thead>
                            <tr class="fw-bolder text-muted bg-light" id="#dataTable1">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-50px">الصورة</th>
                                <th class="min-w-50px">الاسم</th>
                                {{--                                <th class="min-w-50px">view</th>--}}

                                <th class="min-w-50px rounded-end">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($pinned as $pinned)
                                <td class="min-w-25px">{{ $pinned->id }}</td>
                                <td class="min-w-25px"><img class="avatar avatar-md rounded-circle" src="{{ asset($pinned->image) }}" /></td>
                                <td class="min-w-25px">{{ $pinned->name }}</td>
                                <td class="min-w-25px">
                                </td>
                                @endforeach
                            </tbody>
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
            {data: 'id', name: 'id',orderable: false},
            {data: 'image', name: 'image',orderable: false},
            {data: 'name', name: 'name'},
            // {data: 'view', name: 'view'},

            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        showData('{{route('category.index')}}', columns);
        // Delete Using Ajax
        deleteScript('{{route('delete_category')}}');
        // Add Using Ajax
        showAddModal('{{route('category.create')}}');
        addScript();
        // Add Using Ajax
        showEditModal('{{route('category.edit',':id')}}');

        // let viewa=document.getElementById('view').value;
        // let vewib =parseInt(viewa)+1;
        // document.getElementById('view').value = viewaplusone;

        editScript();
    </script>
@endsection


{{--<input type="text" value="{{$view->view}}" class="form-control" name="name" id="name">--}}
