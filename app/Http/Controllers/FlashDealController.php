<?php

namespace App\Http\Controllers;

use App\Models\FlashDeal;
use Illuminate\Http\Request;

class FlashDealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flashDeal = FlashDeal::all();
        return array('success'=> 200, 'flashDeal'=>$flashDeal);
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
        $flashDeal = new FlashDeal();
        $flashDeal->title=$request->title;
        $flashDeal->start_date=$request->start_date;
        $flashDeal->end_date=$request->end_date;
        $flashDeal->status=$request->status;
        $flashDeal->featured=$request->featured;
        $flashDeal->background_color=$request->background_color;
        $flashDeal->text_color=$request->text_color;
        $flashDeal->banner=$request->banner;
        $flashDeal->slug=$request->slug;
        
        $flashDeal->save();
        return array('success'=> 200, 'data'=>$flashDeal);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlashDeal  $flashDeal
     * @return \Illuminate\Http\Response
     */
    public function show(FlashDeal $flashDeal)
    {
        return array('success'=> 200, 'flashDeal'=>$flashDeal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlashDeal  $flashDeal
     * @return \Illuminate\Http\Response
     */
    public function edit(FlashDeal $flashDeal)
    {
        return array('success'=> 200, 'flashDeal'=>$flashDeal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlashDeal  $flashDeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlashDeal $flashDeal)
    {
        $flashDeal->title=$request->title;
        $flashDeal->start_date=$request->start_date;
        $flashDeal->end_date=$request->end_date;
        $flashDeal->status=$request->status;
        $flashDeal->featured=$request->featured;
        $flashDeal->background_color=$request->background_color;
        $flashDeal->text_color=$request->text_color;
        $flashDeal->banner=$request->banner;
        $flashDeal->slug=$request->slug;
        
        $flashDeal->save();
        return array('success'=> 200, 'data'=>$flashDeal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlashDeal  $flashDeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlashDeal $flashDeal)
    {
        $flashDeal->delete();
        return array('success'=> 200);
    }
}
