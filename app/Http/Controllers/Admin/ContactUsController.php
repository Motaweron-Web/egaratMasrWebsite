<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactUs;
use App\Models\FeaturesRealEstate;
use App\Models\RealEstate;
use App\Models\RealEstateImage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactUsController extends Controller
{

    public function index(request $request)
    {
        if($request->ajax()) {
            $contacts = ContactUs::latest()->get();
            return Datatables::of($contacts)
                ->addColumn('action', function ($contacts) {
                    return '
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $contacts->id . '" data-title="' . $contacts->full_name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })

                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin/contact/index');
        }
    }


    public function delete(Request $request)
    {
        $contact = ContactUs::where('id', $request->id)->first();

//            if (file_exists($real->image)) {
//                unlink($real->image);
//            }



        $contact->delete();

        return response(['message'=>'تم الحذف بنجاح','status'=>200],200);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
