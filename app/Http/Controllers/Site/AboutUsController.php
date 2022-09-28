<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About_us;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        $about=About_us::first();
        return view('site.about_us.index',compact('about'));

    }
}
