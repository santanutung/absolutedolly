<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\Comment;
use App\Models\Order;

class ProductController extends Controller
{
    // Single product
    public function singleArt(Request $request)
    {



        $type = $request->query('type');
        $id = $request->query('art');
        $art = Art::where('deleted', 0)->where('id', $id)->orderBy('id', 'desc')->first();

        $comments = Comment::where('art_id', $art->id)->where('is_approve', 1)->orderBy('id', 'desc')->get();

        $count_comment =  $comments->count();




        if ($type == 'digital') {

            if ($art) {
                return view('front.product.single-product', compact('art', 'type', 'comments'));
            } else {
                return abort(404, 'Page not found.');
            }
        } elseif ($type == 'physical') {

            if ($art) {

                return view('front.product.single-product', compact('art', 'type', 'comments'));
            } else {
                return abort(404, 'Page not found.');
            }
        } else {

            if (!$type) {

                if ($art->digital == 1) {
                    $type = 'digital';
                    return view('front.product.single-product', compact('art', 'type', 'comments'));
                } else if ($art->physical == 1) {
                    $type = 'physical';
                    return view('front.product.single-product', compact('art', 'type', 'comments'));
                } else {
                    return abort(404, 'Page not found.');
                }
            } else {
                return abort(404, 'Page not found.');
            }
        }
    }

    // Cart
    public function cart()
    {

        // return \Cart::session('cart')->getContent();


        $digital_items = \Cart::session('digital')->getContent();

        $digital_count = $digital_items->count();
        // $digital_count = $digital_artCollection->count();
        $digital_amount = \Cart::session('digital')->getSubTotal();

        $physical_items = \Cart::session('physical')->getContent();
        $physical_count =  $physical_items->count();
        $physical_amount = \Cart::session('physical')->getSubTotal();
        $total_item = $digital_count + $physical_amount;


        $physical_count =  $physical_items->count();
        return view('front.product.cart', compact('digital_items', 'physical_items', 'total_item', 'digital_count', 'physical_count'));
    }

    // Checkout
    public function checkout()
    {

        $item1 = \Cart::session('physical')->getContent();
        $item2 = \Cart::session('digital')->getContent();
        $amount1 = \Cart::session('physical')->getSubTotal();
        $amount2 = \Cart::session('digital')->getSubTotal();



        // dd($items);


        return view('front.product.checkout', compact('item1', 'item2', 'amount1', 'amount2'));
    }
    public function orderplace(Request $request)
    {
        return $request->all();
    }
}
