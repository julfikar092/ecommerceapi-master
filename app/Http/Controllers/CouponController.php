<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon = Coupon::all();
        return array('success'=> 200, 'coupon'=>$coupon);
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
        $coupon = new Coupon();
        $coupon->user_id=$request->user_id;
        $coupon->type=$request->type;
        $coupon->code=$request->code;
        $coupon->details=$request->details;
        $coupon->discount=$request->discount;
        $coupon->discount_type=$request->discount_type;
        $coupon->strat_date=$request->strat_date;
        $coupon->end_date=$request->end_date;

        $coupon->save();
        return array('success'=> 200, 'data'=>$coupon);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        return array('success'=> 200, 'coupon'=>$coupon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return array('success'=> 200, 'coupon'=>$coupon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $coupon->user_id=$request->user_id;
        $coupon->type=$request->type;
        $coupon->code=$request->code;
        $coupon->details=$request->details;
        $coupon->discount=$request->discount;
        $coupon->discount_type=$request->discount_type;
        $coupon->strat_date=$request->strat_date;
        $coupon->end_date=$request->end_date;

        $coupon->save();
        return array('success'=> 200, 'data'=>$coupon);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return array('success'=> 200);
    }
}
