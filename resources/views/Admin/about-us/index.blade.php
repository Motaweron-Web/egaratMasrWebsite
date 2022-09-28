@extends('Admin/layouts/master')
@section('title')  ماذا عنا @endsection
@section('page_name') ماذا عنا @endsection
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                    <li><i class="fa fa-times-circle"></i> {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('aboutUs.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">العنوان</label>
                                    <input required type="text" class="form-control" name="title"
                                           placeholder="" value="{{($row->title) ?? ''}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">الوصف </label>
                                    <textarea rows="4" name="desc" id="editor">{!! ($row->desc) ?? '' !!}</textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#editor'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label class="form-label">الصورة</label>
                                    <input  type="file" class="dropify" name="image"  data-default-file="{{asset(($row->image) ?? '')}}"  accept="image/png, image/gif, image/jpeg,image/jpg,image/svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">تحديث</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
