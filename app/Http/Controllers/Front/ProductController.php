<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Art;

class ProductController extends Controller
{
    // Single product
    public function singleArt(Request $request)
    {
        $type = $request->query('type');
        $id = $request->query('art');
        if ($type == 'digital') {
            $art = Art::where('deleted', 0)->where('id', $id)->orderBy('id', 'desc')->first();
            if($art){
                return view('front.product.single-product', compact('art', 'type'));

            }else{
                return 'something went worng';
            }

        } elseif ($type == 'physical') {
            $art = Art::where('deleted', 0)->where('id', $id)->orderBy('id', 'desc')->first();
            if ($art) {
                return view('front.product.single-product', compact('art', 'type'));
            } else {
                return 'something went worng';
            }
        } else {
            return 'something went worng';
        }
    }

    // Cart
    public function cart()
    {

     // return \Cart::session('cart')->getContent();

        $digital_items = \Cart::session('digital')->getContent();

        $digital_count= $digital_items->count();
        // $digital_count = $digital_artCollection->count();
        $digital_amount = \Cart::session('digital')->getSubTotal();

        $physical_items = \Cart::session('physical')->getContent();
        $physical_count=  $physical_items->count();
        $physical_amount = \Cart::session('physical')->getSubTotal();


        return view('front.product.cart',compact('digital_items', 'physical_items'));
    }

    // Checkout
    public function checkout()
    {

        $item1 =\Cart::session('physical')->getContent();
        $item2 = \Cart::session('digital')->getContent();
        $amount1= \Cart::session('physical')->getSubTotal();
        $amount2= \Cart::session('digital')->getSubTotal();



        // dd($items);


        return view('front.product.checkout',compact('item1', 'item2', 'amount1', 'amount2'));
    }
    public function orderplace(Request $request){
        return $request->all();

    }


}
