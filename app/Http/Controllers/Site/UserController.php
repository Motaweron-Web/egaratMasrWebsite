<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\RealEstateImage;
use App\Models\User;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(Request $request){

        return view('site.Auth.register');

    }

     public function handleRegister(Request $request){

         $validator=\Validator::make($request->all(),
             [
                 'full_name' => 'required',
                 'email' => 'required|unique:users,email',
                 'password'=>'required',
                 'phone'=>'required|regex:/(01)[0-9]{9}/',

             ],[
             'full_name.required'=>'يرجي ادخال  الاسم كاملا',
             'email.required'=>'يرجي ادخال البريد الالكتروني',
             'email.unique'=>'هذا البريد مستخدم سابقا',
             'password.required'=>'يرجي ادخال كلمة المرور ',
             'phone.required'=>'يرجي ادخال رقم الهاتف',
             'phone.regex'=>'يرجي ادخال رقم يبداء 01 وبعدها 9 ارقام',

         ]);


         if ($validator->fails()) {
             return response()->json(['status'=>false, 'message'=>'you have errors','errors'=>$validator->errors()]);
//
         }
//         if ($validator->fails()) {
//             return redirect()->back()
//                 ->withErrors($validator)
//                 ->withInput($request->all());
//
//         }





//         $data = $request->validate([
//             'full_name' => 'required',
//             'email' => 'required|unique:users,email',
//             'password'=>'required',
//             'phone'=>'required|regex:/(01)[0-9]{9}/',
//
//         ],[
//             'full_name.required'=>'يرجي ادخال  الاسم كاملا',
//             'email.required'=>'يرجي ادخال البريد الالكتروني',
//             'email.unique'=>'هذا البريد مستخدم سابقا',
//             'password.required'=>'يرجي ادخال كلمة المرور ',
//             'phone.required'=>'يرجي ادخال رقم الهاتف',
//             'phone.regex'=>'يرجي ادخال رقم يبداء 01 وبعدها 9 ارقام',
//
//         ]);

         $user=User ::create(['full_name'=>$request->full_name,'email'=>$request->email,
           'password'=>\Hash::make($request->password) ,
             'phone'=>$request->phone,
             ]);

         Auth::guard('web')->login($user);
         $user->last_seen=date('d-m-y');
         $user->save();
         return response()->json(['status'=>true]);

     }

 public function login(){
 return view('site.Auth.login');
 }

 public function handleLogin(Request $request){

     $validator=\Validator::make($request->all(),
         [
             'email' => 'required',
             'password'=>'required',

         ]);
     if ($validator->fails()) {
         return response()->json(['status'=>false, 'message'=>'you have errors','errors'=>$validator->errors()]);

     }

   $data=['email'=>$request->email,'password'=>$request->password];



     if (Auth::guard('web')->attempt($data)){
         $user=Auth::user();
         $user->last_seen = date('d-m-y');
         $user->save();
         return response()->json(['status'=>true]);
     }
     return response()->json(['status'=>'error']);

 }

    public function myProfile(){
        $user=Auth::user();
        return view('site.myProfile.index',compact('user'));

    }


    public function logout(Request $request){

        Auth::guard('web')->logout();
        toastr()->info('تم تسجيل الخروج');
        return redirect('login');

    }


       function updateImage(Request $request,$id){

               $user=User::find($id);
               if ($request->image) {
                   $image = $request->image;
                   $imagename = 'assets/site/img/users/' . time() .$image->getclientOriginalName();
                   $img = \Image::make($image->getRealPath());
                   $img->resize(350, 350);
                   $img->save(public_path($imagename));

                   $user->image = $imagename;
              $user->save();
           }
           return redirect()->route('user.myProfile');

       }




}
