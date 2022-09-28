<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialmediaController extends Controller

{
    public function index(){
        $AppSettingSocials= Social::all();

        return view('Admin.socialMedia.index', compact('AppSettingSocials'));
    }



########################################################################################3
    public function update($id ,Request $request){
        /// return 1;
        //  return 1;
        try {

            $AppSettingSocials= Social::find($id);
            $AppSettingSocials->update([
                'link' => $request->link
            ]);
            toastr()->success('تم تحديث الرابط بنجاح', 'تم بنجاح');
            return redirect()->route('admin.social');
        }

        catch (\Exception $exception) {
            toastr()->error('حدث خطا ما برجاء المحاوله لاحقا', 'حدث خطا');
            return redirect()->route('admin.social');
        }}
}
