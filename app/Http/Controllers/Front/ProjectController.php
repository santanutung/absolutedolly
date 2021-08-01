<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Index 
    public function index(){
        return view('front.home.home');
    }


    // product
    public function products(){
        return view('front.product.products');
    }

    // product details
    public function productDetails(){
        return view('front.product.product-details');
    }
}
