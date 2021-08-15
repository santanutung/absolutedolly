<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Rozerpay;
use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      public   $billing_country='' ;
      public   $billing_first_name='' ;
      public   $billing_last_name='';
      public   $billing_company= '';
      public   $billing_address_1= '';
      public   $billing_address_2= '';
      public   $billing_city='' ;
      public   $billing_state='';
      public   $billing_postcode= '';
      public   $billing_email='';
      public   $billing_phone= '';
      public   $order_comments = '';
      public   $razorpay_payment_id="";


    public function store(Request $request)
    {




        $order = new Order();

        $order->order_number = uniqid('Order-');



    $order->billing_country = $this->billing_country;
    $order->billing_country = $this->billing_country;
    $order->billing_first_name =  $this->billing_first_name;
    $order->billing_last_name =  $this->billing_last_name;
    $order->billing_company =  $this->billing_company;
    $order->billing_address_1 =  $this->billing_address_1;
    $order->billing_address_2 =  $this->billing_address_2;
    $order->billing_city =  $this->billing_city;
    $order->billing_state =  $this->billing_state;
    $order->billing_postcode =  $this->billing_postcode;
    $order->billing_email =  $this->billing_email;
    $order->billing_phone =  $this->billing_phone;
    $order->order_comments =  $this->order_comments;

        $order->grand_total = \Cart::session('4')->getTotal();
        $order->item_count = \Cart::session('4')->getContent()->count();

        $order->user_id = auth()->id();
        $order->payment_method = 'rozerpay';

      //  $order->save();


        // $cartItems = \Cart::session('4')->getContent();

        // foreach ($cartItems as $item) {
        //     $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        // }



        // \Cart::session('4')->clear();



         return redirect()->route('myorder.index');


    }

    public function orderplace()
    {
        $order = new Order();
        $order->order_number = uniqid('Order-');


        $item1 = \Cart::session('physical')->getContent();
        $item2 = \Cart::session('digital')->getContent();
        $amount1 = \Cart::session('physical')->getSubTotal();
        $amount2 = \Cart::session('digital')->getSubTotal();

         Rozerpay::create([
            "user_id"=> auth()->user()->id,
            "order_no"=> $order->order_number,
            "rozerpay_ref" => $this->razorpay_payment_id,
            "amount"=> $amount1 + $amount2
        ]);





        $order->billing_country = $this->billing_country;
        $order->billing_country = $this->billing_country;
        $order->billing_first_name =  $this->billing_first_name;
        $order->billing_last_name =  $this->billing_last_name;
        $order->billing_company =  $this->billing_company;
        $order->billing_address_1 =  $this->billing_address_1;
        $order->billing_address_2 =  $this->billing_address_2;
        $order->billing_city =  $this->billing_city;
        $order->billing_state =  $this->billing_state;
        $order->billing_postcode =  $this->billing_postcode;
        $order->billing_email =  $this->billing_email;
        $order->billing_phone =  $this->billing_phone;
        $order->order_comments =  $this->order_comments;







        $order->grand_total = \Cart::session('4')->getTotal();
        $order->item_count = \Cart::session('4')->getContent()->count();

        $order->user_id = auth()->id();
        $order->payment_method = 'rozerpay';




        $order->item_count =  $item1->count()+$item2->count();
        $order->grand_total =  $amount1 + $amount2;

       $order->save();




        if( $item1->count() >=1){
            foreach ($item1 as $item) {
                OrderItem::create(['art_id'=> $item->id, 'order_id' => $order->id,'price' => $item->price, 'quantity' => $item->quantity, 'item_type' => 'physical']);
            }

        }


        if ($item2->count() >= 1) {
            foreach ($item2 as $item) {
               
                OrderItem::create(['art_id' => $item->id, 'order_id' => $order->id, 'price' => $item->price, 'quantity' => $item->quantity, 'item_type' => 'digital']);
            }


        }



       \Cart::session('physical')->clear();
       \Cart::session('digital')->clear();

        // return redirect()->route('user.payment', $order->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function rozerpay_done(Request $request)
    {

        // $rozerpay = new Rozerpay();
        // $rozerpay->user_id = 1;
        // $rozerpay->order_id = 5;
        // $rozerpay->rozerpay_ref = 5;
        // $rozerpay->save;

        $this->razorpay_payment_id=$request->razorpay_payment_id;
        // dd ($request->all(), json_encode($request->order, true));
        $box = $request->all();
        $AllData =  array();
        parse_str($box['order'], $AllData);
         gettype($AllData);


         $AllData= json_decode(json_encode($AllData));



        // $this->billing_country= $AllData->billing_country;
        $this->billing_first_name= $AllData->billing_first_name;
        $this->billing_last_name= $AllData->billing_last_name;
        // $this->billing_company= $AllData->billing_company;
        $this->billing_address_1= $AllData->billing_address_1;
        // $this->billing_address_2= $AllData->billing_address_2;
        $this->billing_city= $AllData->billing_city;
        $this->billing_state= $AllData->billing_state;
        $this->billing_postcode= $AllData->billing_postcode;
        $this->billing_email= $AllData->billing_email;
        $this->billing_phone= $AllData->billing_phone;
        $this->order_comments = $AllData->order_comments;
        $this->rozerpay_ref= '';

        $this->orderplace();
        toastr()->success('Order Place  successfully', 'Success');
        return 1;


    }

    public function test(){
        //   return $result= Rozerpay::create([
        //            "user_id" => 1,
        //     "order_id" => 1,
        //     "rozerpay_ref" => 5,
        //     "amount"=>500
        //     ]);
        $rozerpay = new Rozerpay();
        $rozerpay->user_id = 1;
        $rozerpay->order_id =2;
        $rozerpay->rozerpay_ref ='chbcf';
        $rozerpay->amount = 10;
        $rozerpay->save();
    }
}
