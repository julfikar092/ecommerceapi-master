<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();
        return array('success'=> 200, 'cart'=>$cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->owner_id=$request->owner_id;
        $cart->user_id=$request->user_id;
        $cart->temp_user_id=$request->temp_user_id;
        $cart->address_id=$request->address_id;
        $cart->product_id=$request->product_id;
        $cart->variation=$request->variation;
        $cart->price=$request->price;
        $cart->shipping_cost=$request->shipping_cost;
        $cart->shipping_type=$request->shipping_type;
        $cart->discount=$request->discount;
        $cart->product_referral_code=$request->product_referral_code;
        $cart->quantity=$request->quantity;

        $cart->save();

        return array('success'=> 200, 'data'=>$cart);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return array('success'=>200,'data'=>$cart);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        return array('success'=>200,'data'=>$cart);
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
        $cart->owner_id=$request->owner_id;
        $cart->user_id=$request->user_id;
        $cart->temp_user_id=$request->temp_user_id;
        $cart->address_id=$request->address_id;
        $cart->product_id=$request->product_id;
        $cart->variation=$request->variation;
        $cart->price=$request->price;
        $cart->shipping_cost=$request->shipping_cost;
        $cart->shipping_type=$request->shipping_type;
        $cart->discount=$request->discount;
        $cart->product_referral_code=$request->product_referral_code;
        $cart->quantity=$request->quantity;

        $cart->save();

        return array('success'=> 200, 'data'=>$cart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return array('success'=> 200);
    }
}
