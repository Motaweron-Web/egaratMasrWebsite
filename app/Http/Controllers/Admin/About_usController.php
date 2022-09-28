<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About_us;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;


class About_usController extends Controller
{
    use PhotoTrait;
    public function aboutUs(){
        $row = About_us::first();
        return view('Admin/about-us/index',compact('row'));
    }

    public function updateAbout(request $request){
        $data = $request->validate([
            'title' => 'required',
            'desc'  => 'required',

        ],[
            'required' => 'يرجي ملئ كل البيانات'
        ]);
        if($request->has('image') && $request->image != null)
            $data['image'] = $this->saveImage($request->image,'assets/uploads/boutus','no');

        About_us::first()->update($data);
        toastr()->success('تم تحديث البيانات بنجاح');
        return back();
    }
}
