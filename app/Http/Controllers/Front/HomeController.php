<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\Slider;
use App\Models\News;
use App\Models\Footersetting;

class HomeController extends Controller
{
    // Index
    public function index(){
        $sliders = Slider::orderBy('id', 'desc')->get();
     $news= News::latest()->limit(2)->get();


        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('front.home.home',compact('arts', 'sliders','news'));
    }

     public function works(){
        // $sliders = Slider::orderBy('id', 'desc')->get();
    //  $news= News::latest()->limit(2)->get();;

        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('front.works',compact('arts'));
    }

    public function contact(){
        // $sliders = Slider::orderBy('id', 'desc')->get();
    //  $news= News::latest()->limit(2)->get();;

        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('front.contact',compact('arts'));
    }



}
