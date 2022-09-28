<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\RealEstate;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $reservation = Reservation::where('user_id', Auth::user()->id)->get();
            $user = Auth::User();
            $realestate = RealEstate::select('id', 'name')->get();

            $allprice = DB::table('reservations')
                ->where('user_id', Auth::user()->id)
                ->sum('price');
        } else {
            return view('site.Auth.login');
        }
        return view('site.Reservation.index',compact([
            'reservation',
            'user',
            'allprice',
            'realestate'
        ]));
    }

//    function dateDiffInDays($date1, $date2)
//    {
//        // Calculating the difference in timestamps
//        $diff = strtotime($date2) - strtotime($date1);
//
//        // 1 day = 24 hours
//        // 24 * 60 * 60 = 86400 seconds
//        return abs(round($diff / 86400));
//    }


    public function create(Request $request){



        $validator=\Validator::make($request->all(),
            [
                'start_date'=>'required',
                'end_date'=>'required|date|after:start_date',
                'real_estate_id'=>'required',
            ]);
        if ($validator->fails()) {
            return response()->json(['status'=>false, 'message'=>'you have errors','errors'=>$validator->errors()]);
        }



        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $realEstate=RealEstate::find($request->real_estate_id);


        // Calculating the difference in timestamps
        $diff = strtotime($end_date) - strtotime($start_date);
        // 1 day = 24 hours
        // 24 * 60 * 60 = 86400 seconds
        $numberOfDays= abs(round($diff / 86400));
        $price=$numberOfDays*$realEstate->price;


        $start_date=date('Y-m-d', strtotime($start_date));
        $end_date=date('Y-m-d', strtotime($end_date));

        foreach (Reservation::where('real_estate_id',$realEstate->id)->get() as $reservation) {

            $contractDateBegin = date('Y-m-d', strtotime($reservation->start_date));
            $contractDateEnd = date('Y-m-d', strtotime($reservation->end_date));

            if ((  ($start_date >= $contractDateBegin) && ($start_date <= $contractDateEnd)) || (  ($end_date >= $contractDateBegin) && ($end_date <= $contractDateEnd) )) {
                return response()->json(['status'=>false,'message'=>'العقار تم حجزة في هذة الفترة']);


            }

        }


            $contractDateBegin = date('Y-m-d', strtotime($realEstate->start_date));
            $contractDateEnd = date('Y-m-d', strtotime($realEstate->end_date));

            if(($start_date >= $contractDateBegin) && ($start_date <= $contractDateEnd) && ($end_date >= $contractDateBegin) && ($end_date <= $contractDateEnd) ){

                Reservation::create([
                    'user_id'=> auth()->guard('web')->user()->id,
                    'start_date'=>$request->start_date,
                    'end_date'=>$request->end_date,
                    'real_estate_id'=>$request->real_estate_id,
                    'price'=>$price,
                ]);


            }
else{
    return response()->json(['status'=>false,'message'=>'العقار غير متاح في هذة الفترة']);

}

        return response()->json(['status'=>true]);
    }

}
