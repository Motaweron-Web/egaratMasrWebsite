<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function index(){
        return view('site.contact_us.index');
    }
    public function store(Request $request){;
        ContactUs::create([
            'full_name'=>$request->full_name,
            'company_name'=>$request->company_name,
            'email'=>$request->email,
            'purpose_message'=>$request->purpose_message,
            'message'=>$request->message,
            'phone'=>$request->phone,
        ]);
    toastSuccess('تم ارسال رسالتك بنجاح');
    return redirect()->route('site_egareat_egypt');

    }

}
