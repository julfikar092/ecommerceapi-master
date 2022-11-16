<?php

namespace App\Http\Controllers;

use App\Models\FlashDealProduct;
use Illuminate\Http\Request;

class FlashDealProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flashDealProduct = FlashDealProduct::all();
        return array('success'=> 200, 'flashDealProduct'=>$flashDealProduct);
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
        $flashDealProduct = new FlashDealProduct();
        $flashDealProduct->flash_deal_id=$request->flash_deal_id;
        $flashDealProduct->product_id=$request->product_id;
        $flashDealProduct->discount=$request->discount;
        $flashDealProduct->discount_type=$request->discount_type;

        $flashDealProduct->save();
        return array('success'=> 200, 'data'=>$flashDealProduct);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlashDealProduct  $flashDealProduct
     * @return \Illuminate\Http\Response
     */
    public function show(FlashDealProduct $flashDealProduct)
    {
        return array('success'=> 200, 'flashDealProduct'=>$flashDealProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlashDealProduct  $flashDealProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(FlashDealProduct $flashDealProduct)
    {
        return array('success'=> 200, 'flashDealProduct'=>$flashDealProduct);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlashDealProduct  $flashDealProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlashDealProduct $flashDealProduct)
    {
        $flashDealProduct->flash_deal_id=$request->flash_deal_id;
        $flashDealProduct->product_id=$request->product_id;
        $flashDealProduct->discount=$request->discount;
        $flashDealProduct->discount_type=$request->discount_type;

        $flashDealProduct->save();
        return array('success'=> 200, 'data'=>$flashDealProduct);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlashDealProduct  $flashDealProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlashDealProduct $flashDealProduct)
    {
        $flashDealProduct->delete();
        return array('success'=> 200);
    }
}
