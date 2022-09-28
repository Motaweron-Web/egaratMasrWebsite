@extends('Admin/layouts/master')
@section('title') وسائل التواصل @endsection
@section('page_name') وسائل التواصل @endsection
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{route('admin.social')}}"> وسائل التواصل الاجتماعي </a>
            </li>
        </ol>
        <!-- <button class="btn btn-dark" onclick="history.back()"> عودة </button> -->
    </div>
    <!-- end breadcrumb -->
    <!-- edit Service -->

    <section class="editService">
        @foreach($AppSettingSocials as $AppSettingSocial)
            <form action="{{route('social.update',$AppSettingSocial->id)}}" method="POST">
                @csrf
                <!-- twitter -->
                <div class="social">
                    <div class="icon me-3">
                        <i class="fab fa-{{$AppSettingSocial->title}}"></i>
                    </div>


                    <div class="row">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for=""> رابط الحساب </label>
                                <input type="text" class="form-control" name="link" placeholder="ادخل قيمة"
                                       value="{{$AppSettingSocial->link }}">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label for="">  </label>

                            <button type="submit" class="btn ms-3 orangeBtn form-control mt-2  btn-success"> ربط </button>

                        </div>

                    </div>






                </div>
            </form>

        @endforeach
    </section>


@endsection
@section('js')


@endsection

