<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Http\Resources\ReservationResource;
use App\Models\RealEstate;
use App\Models\Reservation;
use App\Models\Token;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function show($id){

        $reservations=Reservation::with('user')->where('real_estate_id',$id)->get();
        return response()->json(['status'=>200,'data'=>ReservationResource::collection($reservations)]);

    }


    public function store(ReservationRequest $request){


      $user=Token::where('access_token',$request->access_token)->first()->user;
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

            if ((  ($start_date >= $contractDateBegin) && ($start_date <= $contractDateEnd)) && (  ($end_date >= $contractDateBegin) && ($end_date <= $contractDateEnd) )) {
                return response()->json(['status'=>430,'message'=>'العقار تم حجزة في هذة الفترة']);


            }

        }


        $contractDateBegin = date('Y-m-d', strtotime($realEstate->start_date));
        $contractDateEnd = date('Y-m-d', strtotime($realEstate->end_date));

        if(($start_date >= $contractDateBegin) && ($start_date <= $contractDateEnd) && ($end_date >= $contractDateBegin) && ($end_date <= $contractDateEnd) ){

            Reservation::create([
                'user_id'=>$user->id,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'real_estate_id'=>$request->real_estate_id,
                'price'=>$price,
            ]);


        }
        else{
            return response()->json(['status'=>440,'message'=>'العقار غير متاح في هذة الفترة']);

        }




        return response()->json(['status'=>200,'message'=>'تمت عملية الحجز بنجاح']);



    }



}
