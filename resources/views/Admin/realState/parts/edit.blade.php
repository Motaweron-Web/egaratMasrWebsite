<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('real_estate.update',$realEstate->id)}}" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name" class="form-control-label">صورة العقار</label>
            <input type="file" multiple class="dropify" name="images[]" data-default-file="{{asset(''.\App\Models\RealEstateImage::where('real_estate_id',$realEstate->id)->first()->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">صورة المالك</label>
            <input type="file" multiple class="dropify" name="owner_image" data-default-file="{{asset(''.$realEstate->owner_image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
        </div>


        <div class="form-group">

            <select class="form-group" name="type_id"  aria-label="Default select example" style="width: 100%;">
                @foreach(\App\Models\Type::get() as $type)
                    <option value="{{$type->id}}" @if($realEstate->type_id==$type->id) selected @endif>{{$type->name}}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group">

            <select class="form-group" name="category_id"  aria-label="Default select example" style="width: 100%;">
                @foreach(\App\Models\Category::get() as $place)
                    <option value="{{$place->id}}" @if($realEstate->category_id==$place->id) selected @endif>{{$place->name}}</option>
                @endforeach
            </select>

        </div>




        <div class="form-group">
            <label for="name" class="form-control-label">الاسم</label>
            <input type="text" class="form-control" value="{{$realEstate->name}}"  name="name" id="name">
        </div>


        <div class="form-group">
            <label for="rule" class="form-control-label">القواعد</label>
            <input type="text" class="form-control" value="{{$realEstate->rules}}" name="rules" id="name">
        </div>


        <div class="form-group">
            <label for="email" class="form-control-label">الوصف</label>
            <input type="text" class="form-control" value="{{$realEstate->description}}"  name="description" id="email">
        </div>
        <div class="form-group">
            <label for="position_url" class="form-control-label">موقع العقار</label>
            <input type="text" class="form-control" value="{{$realEstate->position_url}}"   name="position_url" id="position_url">
        </div>

        <div class="form-group">
            <label for="email" class="form-control-label">المالك</label>
            <input type="text" class="form-control" value="{{$realEstate->owner}}"  name="owner" id="email">
        </div>
        <div class="form-group">
            <label for="phone" class="form-control-label">الهاتف</label>
            <input type="text" class="form-control" value="{{$realEstate->phone}}"  name="phone" id="phone" placeholder="مثال (010xxxxxxxx)">
        </div>
        <div class="form-group">
            <label for="email" class="form-control-label">السعر</label>
            <input type="number" class="form-control"  value="{{$realEstate->price}}" name="price" id="email">
        </div>
        <div class="form-group">
            <label for="email" class="form-control-label">الغرف</label>
            <input type="number" class="form-control" value="{{$realEstate->rooms}}"   name="rooms" id="email">
        </div>

        <div class="form-group">
            <label for="video" class="form-control-label">الفديو</label>
            <input type="text" class="form-control"  value="{{$realEstate->video}}"  name="video" id="video">
        </div>

        <div class="form-group">
            <label for="video" class="form-control-label">الموقع</label>
            <input type="text" class="form-control"  name="location" id="video" >
        </div>


        <div class="form-group">
            <label for="insurance" class="form-control-label">تأمين</label>
            <input type="number" class="form-control" value="{{$realEstate->insurance}}"  name="insurance" id="insurance">
        </div>

        <div class="form-group">
            <label for="discount" class="form-control-label">خصم: اختياري  </label>
            <input type="number" class="form-control"  value="{{$realEstate->discount}}"  name="discount" id="discount">
        </div>

        <div class="form-group">
            <label for="beds" class="form-control-label">السراير</label>
            <input type="number" class="form-control"   value="{{$realEstate->beds}}" name="beds" id="beds">
        </div>





        <div class="form-group">
            <label for="toilet" class="form-control-label">الحمام</label>
            <input type="number" class="form-control" value="{{$realEstate->toilet}}"  name="toilet" id="toilet">
        </div>



        <div class="form-group">
            <label for="numperofperson" class="form-control-label">عدد الاشخاص</label>
            <input type="number" class="form-control" value="{{$realEstate->numperofperson}}"  name="numperofperson" id="numperofperson">
        </div>
        <label for="features" class="form-control-label"> المميزات</label>

        <select class="js-example-basic-multiple bg-danger"  id="resetselect"  style="width: 300px;" name="features[]" multiple="multiple" >

            @foreach(\App\Models\Feature::get() as $feature)
                <option @foreach(\App\Models\FeaturesRealEstate::where('real_estate_id',$realEstate->id)->get() as $feat)  @if($feat->feature_id==$feature->id)  selected @endif @endforeach value="{{$feature->id}}">{{$feature->name}}</option>
            @endforeach
            <label for="stackedCheck11" class="form-check-label">هل تريد تحديد البعض</label>

        </select>

        <div class="form-group">
            <label for="start_date" class="form-control-label">تاريخ البداية </label>
            <input type="date" class="form-control" name="start_date" value="{{$realEstate->start_date}}" id="start_date">
        </div>

        <div class="form-group">
            <label for="end_date" class="form-control-label">تاريخ النهاية </label>
            <input type="date" class="form-control" value="{{$realEstate->end_date}}"  name="end_date" id="end_date">
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">تعديل</button>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

</script>
