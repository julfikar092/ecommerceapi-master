<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return array('success'=> 200, 'order'=>$order);
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
        $order = new Order();
        $order->combined_order_id=$request->combined_order_id;
        $order->user_id=$request->user_id;
        $order->guest_id=$request->guest_id;
        $order->seller_id=$request->seller_id;
        $order->shipping_address=$request->shipping_address;
        $order->shipping_type=$request->shipping_type;
        $order->delivery_status=$request->delivery_status;
        $order->payment_type=$request->payment_type;
        $order->payment_status=$request->payment_status;
        $order->payment_details=$request->payment_details;
        $order->grand_total=$request->grand_total;
        $order->coupon_discount=$request->coupon_discount;
        $order->code=$request->code;
        $order->tracking_code=$request->tracking_code;
        $order->date=$request->date;
        $order->viewed=$request->viewed;
        $order->delivery_viewed=$request->delivery_viewed;
        $order->payment_status_viewed=$request->payment_status_viewed;
        $order->commission_calculated=$request->commission_calculated;

        $order->save();

        return array('success'=> 200, 'data'=>$order);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return array('success'=> 200, 'order'=>$order);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return array('success'=> 200, 'order'=>$order);
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
        $order->combined_order_id=$request->combined_order_id;
        $order->user_id=$request->user_id;
        $order->guest_id=$request->guest_id;
        $order->seller_id=$request->seller_id;
        $order->shipping_address=$request->shipping_address;
        $order->shipping_type=$request->shipping_type;
        $order->delivery_status=$request->delivery_status;
        $order->payment_type=$request->payment_type;
        $order->payment_status=$request->payment_status;
        $order->payment_details=$request->payment_details;
        $order->grand_total=$request->grand_total;
        $order->coupon_discount=$request->coupon_discount;
        $order->code=$request->code;
        $order->tracking_code=$request->tracking_code;
        $order->date=$request->date;
        $order->viewed=$request->viewed;
        $order->delivery_viewed=$request->delivery_viewed;
        $order->payment_status_viewed=$request->payment_status_viewed;
        $order->commission_calculated=$request->commission_calculated;

        $order->save();

        return array('success'=> 200, 'data'=>$order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return array('success'=> 200);
    }
}
