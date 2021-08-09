<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Art;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


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
        $art_id = $request->id;
        $type = $request->type;
        $price = $request->price;

        $art = Art::where('id', $art_id)->first();


        // if ($type == 'digital') {
        //     $price = $art->digital_art_sell;
        //     \Cart::session('cart')->add(array(
        //         'id' => $art->id,
        //         'name' => $art->name,
        //         'price' => $price,
        //         'quantity' => $request->qty,
        //         'attributes' => array('type' => $type),
        //         'associatedModel' => $art
        //     ));
        // } else {
        //     return 'something went worng';
        // }
        // if ($type == 'physical') {
        //     $price = $art->physical_art_sell;

        //     \Cart::session('cart')->add(array(
        //         'id' => $art->id,
        //         'name' => $art->name,
        //         'price' => $price,
        //         'quantity' => $request->qty,
        //         'attributes' => array('type' => $type),
        //         'associatedModel' => $art
        //     ));
        // } else {
        //     return 'something went worng';
        // }


        if ($type == 'digital') {
            $price= $art->digital_art_sell;
            \Cart::session('digital')->add(array(
                'id' => $art->id,
                'name' => $art->name,
                'price' => $price,
                'quantity' => $request->qty,
                'attributes' => array(),
                'associatedModel' => $art
            ));


        } elseif ($type == 'physical') {
            $price = $art->physical_art_sell;

            \Cart::session('physical')->add(array(
                'id' => $art->id,
                'name' => $art->name,
                'price' => $price,
                'quantity' => $request->qty,
                'attributes' => array(),
                'associatedModel' => $art
            ));
        } else {
            return 'something went worng';
        }


        //    $product= DB::table('product')->where('product_id', $product_id)->first();
        //  dd($product);

        return 1;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show_physical(Cart $cart)
    {
        $items = \Cart::session('physical')->getContent();
        $cartCollection = \Cart::getContent();
        //  dd($cartCollection,$cartCollection->count());
        $count = $cartCollection->count();
        $amount = \Cart::session('4')->getSubTotal();
        // return  $items;
        //  dd($amount);

        $data = array('items' => $items, 'subtotal' => $amount, 'count' => $count);

        return $data;
    }

    public function show_digital(Cart $cart)
    {
        $items = \Cart::session('digital')->getContent();
        $cartCollection = \Cart::getContent();
        //  dd($cartCollection,$cartCollection->count());
        $count = $cartCollection->count();
        $amount = \Cart::session('4')->getSubTotal();
        // return  $items;
        //  dd($amount);

        $data = array('items' => $items, 'subtotal' => $amount, 'count' => $count);

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
