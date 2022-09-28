<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $twitter=\App\Models\Social::where('id',3)->first();
        $facebook=\App\Models\Social::where('id',1)->first();
        $whatsapp=\App\Models\Social::where('id',2)->first();
        $envelope=\App\Models\Social::where('id',4)->first();

        $categories= Category::orderByDesc('view')->take(4)->get();
//        $categories= Category::where('id','<',8)-> get();

 $most_wanted=RealEstate::take(9)->get();
   $latest_realEstate=RealEstate::latest()->take(6)->get();


        return view('site.HomePage.index',compact('latest_realEstate','most_wanted','twitter','facebook','whatsapp','envelope','categories'));
       // return 1;

    }

    public function categorydetails(Request $request ,$id)
    {
        Category::find($id)->increment('view');
        $category=Category::find($id);

        $realEstates=RealEstate::where('category_id',$id)->get();
        return view('site.HomePage.category',compact([
            'category','realEstates',
        ]));

    }

    public function estateByDate(Request $request){
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $d_realEstates=RealEstate::where('category_id',$request->category_id)->where('type_id',$request->type_id)->get();
        $realEstates=[];

        $start_date=date('Y-m-d', strtotime($start_date));
        $end_date=date('Y-m-d', strtotime($end_date));


        foreach($d_realEstates as $realEstate){
            $contractDateBegin = date('Y-m-d', strtotime($realEstate->start_date));
            $contractDateEnd = date('Y-m-d', strtotime($realEstate->end_date));

            if(($start_date >= $contractDateBegin) && ($start_date <= $contractDateEnd) && ($end_date >= $contractDateBegin) && ($end_date <= $contractDateEnd) ){


                array_push($realEstates,$realEstate);


            }


        }

        return view('site.HomePage.category',compact('realEstates'));

//echo $paymentDate; // echos today!


    }


    public function details($id){

         $realEstate=RealEstate::with('images','fetures')->findOrFail($id);
        $Date= $realEstate->end_date;
        $enddate = date('Y-m-d', strtotime($Date. ' + 1 days'));
        $Date= date("Y-m-t", strtotime($realEstate->end_date));
        $endCancelDate = date('Y-m-d', strtotime($Date. ' + 1 days'));

        return view('site.HomePage.details',compact('realEstate','enddate','endCancelDate'));

    }



    public function realEstateByCategory($id){

        if($id==0){
            $realEstates=RealEstate::get();
        }
        else
        {
            $realEstates=RealEstate::where('category_id',$id)->get();
        }
        return view('site.HomePage.category',compact('realEstates'));

    }

public function getAllRealEstate(){
    $realEstates=RealEstate::get();
    return view('site.HomePage.category',compact('realEstates'));

}



}
