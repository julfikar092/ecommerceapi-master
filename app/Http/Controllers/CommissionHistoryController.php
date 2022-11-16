<?php

namespace App\Http\Controllers;

use App\Models\CommissionHistory;
use Illuminate\Http\Request;

class CommissionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commissionHistory = CommissionHistory::all();
        return array('success'=> 200, 'commissionHistory'=>$commissionHistory);
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
        $commissionHistory = new CommissionHistory();
        $commissionHistory->order_id=$request->order_id;
        $commissionHistory->order_detail_id=$request->order_detail_id;
        $commissionHistory->seller_id=$request->seller_id;
        $commissionHistory->admin_commission=$request->admin_commission;
        $commissionHistory->seller_earning=$request->seller_earning;

        $commissionHistory->save();

        return array('success'=> 200, 'data'=>$commissionHistory);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommissionHistory  $commissionHistory
     * @return \Illuminate\Http\Response
     */
    public function show(CommissionHistory $commissionHistory)
    {
        return array('success'=> 200, 'commissionHistory'=>$commissionHistory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommissionHistory  $commissionHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(CommissionHistory $commissionHistory)
    {
        return array('success'=> 200, 'commissionHistory'=>$commissionHistory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommissionHistory  $commissionHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommissionHistory $commissionHistory)
    {
        $commissionHistory->order_id=$request->order_id;
        $commissionHistory->order_detail_id=$request->order_detail_id;
        $commissionHistory->seller_id=$request->seller_id;
        $commissionHistory->admin_commission=$request->admin_commission;
        $commissionHistory->seller_earning=$request->seller_earning;

        $commissionHistory->save();

        return array('success'=> 200, 'data'=>$commissionHistory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommissionHistory  $commissionHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommissionHistory $commissionHistory)
    {
        $commissionHistory->delete();
        return array('success'=> 200);
    }
}
