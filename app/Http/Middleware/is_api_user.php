<?php

namespace App\Http\Middleware;

use App\Models\Token;
use Closure;
use Illuminate\Http\Request;

class is_api_user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user=null;

        if( $request->access_token!=null)
        {


            $token=Token::where('access_token',$request->access_token)->first();
            if($token==null)
                return response()->json(['status'=>420,'message'=>'you dont have periviouse']);

            $user=$token->user;

        }
        else
        {
            return response()->json(['status'=>419,'message'=>'access token is requierd']);
        }
        if($user!=null)
            return $next($request);
        else
        {
            return response()->json(['status'=>420,'message'=>'you cant loginn']);
        }


    }
}
