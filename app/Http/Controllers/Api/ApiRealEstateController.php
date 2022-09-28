<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RealEstateResource;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class ApiRealEstateController extends Controller
{
    //


    public function index(){

        $realestates=RealEstate::with(['type','category','images','fetures'])->get();

        return response()->json(['status'=>200,'message'=>'data loaded successfully','data'=>RealEstateResource::collection($realestates)]);


    }





    public function show($id){

        $realestate=RealEstate::with(['type','category','images','fetures'])->find($id);

        if (!$realestate)
            return response()->json(['status'=>404,'message'=>'this realEstate not found']);


        return response()->json(['status'=>200,'message'=>'data loaded successfully','data'=>new RealEstateResource($realestate)]);




    }


}
