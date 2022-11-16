<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Shop::all();
        return array('success'=> 200, 'shop'=>$shop);
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
        $shop = new Shop();
        $shop->user_id=$request->user_id;
        $shop->name=$request->name;
        $shop->logo=$request->logo;
        $shop->sliders=$request->sliders;
        $shop->phone=$request->phone;
        $shop->address=$request->address;
        $shop->facebook=$request->facebook;
        $shop->instagram=$request->instagram;
        $shop->google=$request->google;
        $shop->twitter=$request->twitter;
        $shop->youtube=$request->youtube;
        $shop->slug=$request->slug;
        $shop->shipping_cost=$request->shipping_cost;

        $shop->save();

        return array('success'=> 200, 'data'=>$shop);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return array('success'=> 200, 'shop'=>$shop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return array('success'=> 200, 'shop'=>$shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->user_id=$request->user_id;
        $shop->name=$request->name;
        $shop->logo=$request->logo;
        $shop->sliders=$request->sliders;
        $shop->phone=$request->phone;
        $shop->address=$request->address;
        $shop->facebook=$request->facebook;
        $shop->instagram=$request->instagram;
        $shop->google=$request->google;
        $shop->twitter=$request->twitter;
        $shop->youtube=$request->youtube;
        $shop->slug=$request->slug;
        $shop->shipping_cost=$request->shipping_cost;

        $shop->save();

        return array('success'=> 200, 'data'=>$shop);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return array('success'=> 200);
    }
}
