<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiUserController extends Controller
{


    //
    function register(Request $request)
    {

        $validator=\Validator::make($request->all(),
            [
                'full_name'=>'required|max:191|min:3',
                'email'=>'required|unique:users|max:1000|min:5',
                'phone'=>'required',
                'password'=>'required',
                'img'=>'nullable|image|max:10240|mimes:jpg,jpeg,png',

            ]);
        if ($validator->fails()) {
            return response()->json(['status'=>405,'message'=>'you have errors','errors'=>$validator->errors()]);

        }

        $user= User::create([

            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password),
            'phone'=>$request->phone,

        ]);
        $token=Token::create(['access_token'=> \Str::random(64),'user_id'=>$user->id]);

     $user['access_token']=$token->access_token;


        return response()->json(['status'=>200,'message'=>'you are Register Successful','data'=>$user]);

    }


    function login(Request $request)
    {

        $validator=\Validator::make($request->all(),
            [
                'email'=>'required|email|max:1000|min:5',
                'password'=>'required',

            ]);




        if ($validator->fails()) {
            return response()->json(['status'=>405,'message'=>'wrong data','errors'=>$validator->errors()]);
        }


        $cred=['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($cred))
        {
            $user=User::find(Auth::user()->id);
            $token=Token::create(['access_token'=> \Str::random(64),'user_id'=>$user->id]);

            $user['access_token']=$token->access_token;
            return response()->json(['status'=>200,'message'=>'login successful','data'=>$user]);
        }

        else
            return  response()->json([ 'status'=>403,'message'=>'wrong email or password']);

    }
    function logout(Request $request)
    {

        $token=Token::where('access_token','=',$request->access_token)->first();
        if($token==null)
            return response()->json(['status'=>419,'message'=>'user not found']);

        $token->delete();
        return response()->json(['status'=>200,'message'=>'log out successfuly']);
    }






}
