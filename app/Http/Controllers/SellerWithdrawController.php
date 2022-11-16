<?php

namespace App\Http\Controllers;

use App\Models\SellerWithdraw;
use Illuminate\Http\Request;

class SellerWithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellerWithdraw = SellerWithdraw::all();
        return array('success'=> 200, 'sellerWithdraw'=>$sellerWithdraw);
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
        $sellerWithdraw = new SellerWithdraw();
        $sellerWithdraw->user_id=$request->user_id;
        $sellerWithdraw->amount=$request->amount;
        $sellerWithdraw->message=$request->message;
        $sellerWithdraw->status=$request->status;
        $sellerWithdraw->viewed=$request->viewed;
        
        $sellerWithdraw->save();

        return array('success'=> 200, 'data'=>$sellerWithdraw);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerWithdraw  $sellerWithdraw
     * @return \Illuminate\Http\Response
     */
    public function show(SellerWithdraw $sellerWithdraw)
    {
        return array('success'=> 200, 'sellerWithdraw'=>$sellerWithdraw);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerWithdraw  $sellerWithdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerWithdraw $sellerWithdraw)
    {
        return array('success'=> 200, 'sellerWithdraw'=>$sellerWithdraw);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellerWithdraw  $sellerWithdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerWithdraw $sellerWithdraw)
    {
        $sellerWithdraw->user_id=$request->user_id;
        $sellerWithdraw->amount=$request->amount;
        $sellerWithdraw->message=$request->message;
        $sellerWithdraw->status=$request->status;
        $sellerWithdraw->viewed=$request->viewed;
        
        $sellerWithdraw->save();

        return array('success'=> 200, 'data'=>$sellerWithdraw);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerWithdraw  $sellerWithdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerWithdraw $sellerWithdraw)
    {
        $sellerWithdraw->delete();
        return array('success'=> 200);
    }
}
