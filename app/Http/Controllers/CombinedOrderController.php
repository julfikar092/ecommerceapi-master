<?php

namespace App\Http\Controllers;

use App\Models\CombinedOrder;
use Illuminate\Http\Request;

class CombinedOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combinedOrder = CombinedOrder::all();
        return array('success'=> 200, 'combinedOrder'=>$combinedOrder);
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
        $combinedOrder = new CombinedOrder();
        $combinedOrder->user_id=$request->user_id;
        $combinedOrder->shipping_address=$request->shipping_address;
        $combinedOrder->grand_total=$request->grand_total;

        $combinedOrder->save();
        return array('success'=> 200, 'data'=>$combinedOrder);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CombinedOrder  $combinedOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CombinedOrder $combinedOrder)
    {
        return array('success'=> 200, 'data'=>$combinedOrder);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CombinedOrder  $combinedOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CombinedOrder $combinedOrder)
    {
        return array('success'=> 200, 'data'=>$combinedOrder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CombinedOrder  $combinedOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CombinedOrder $combinedOrder)
    {
        $combinedOrder->user_id=$request->user_id;
        $combinedOrder->shipping_address=$request->shipping_address;
        $combinedOrder->grand_total=$request->grand_total;

        $combinedOrder->save();
        return array('success'=> 200, 'data'=>$combinedOrder);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CombinedOrder  $combinedOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CombinedOrder $combinedOrder)
    {
        $combinedOrder->delete();
        return array('success'=> 200);
    }
}
