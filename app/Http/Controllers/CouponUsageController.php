<?php

namespace App\Http\Controllers;

use App\Models\CouponUsage;
use Illuminate\Http\Request;

class CouponUsageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couponUsage = CouponUsage::all();
        return array('success'=> 200, 'couponUsage'=>$couponUsage);
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
        $couponUsage = new CouponUsage();
        $couponUsage->user_id=$request->user_id;
        $couponUsage->coupon_id=$request->coupon_id;
        $couponUsage->save();

        return array('success'=> 200, 'data'=>$couponUsage);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouponUsage  $couponUsage
     * @return \Illuminate\Http\Response
     */
    public function show(CouponUsage $couponUsage)
    {
        return array('success'=> 200, 'couponUsage'=>$couponUsage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CouponUsage  $couponUsage
     * @return \Illuminate\Http\Response
     */
    public function edit(CouponUsage $couponUsage)
    {
        return array('success'=> 200, 'couponUsage'=>$couponUsage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CouponUsage  $couponUsage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CouponUsage $couponUsage)
    {
        $couponUsage->user_id=$request->user_id;
        $couponUsage->coupon_id=$request->coupon_id;
        $couponUsage->save();

        return array('success'=> 200, 'data'=>$couponusage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouponUsage  $couponUsage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouponUsage $couponUsage)
    {
        $couponUsage->delete();
        return array('success'=> 200);
    }
}
