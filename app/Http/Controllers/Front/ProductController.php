<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     // Single product
     public function singleProduct(){
        return view('front.product.single-product');
    }

    // Cart
    public function cart(){
        return view('front.product.cart');
    }

    // Checkout
    public function checkout(){
        return view('front.product.checkout');
    }
}
