<?php

namespace App\Http\Controllers;

use App\Models\BusinessSetting;
use Illuminate\Http\Request;

class BusinessSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessSetting = BusinessSetting::all();
        return array('success'=> 200, 'businessSetting'=>$businessSetting);
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
        $businessSetting = new BusinessSetting();
        $businessSetting->type=$request->type;
        $businessSetting->value=$request->value;
        $businessSetting->save();

        return array('success'=> 200, 'data'=>$businessSetting);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessSetting  $businessSetting
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessSetting $businessSetting)
    {
        return array('success'=> 200, 'businessSetting'=>$businessSetting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessSetting  $businessSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessSetting $businessSetting)
    {
        return array('success'=> 200, 'businessSetting'=>$businessSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessSetting  $businessSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessSetting $businessSetting)
    {
        $businessSetting->type=$request->type;
        $businessSetting->value=$request->value;
        $businessSetting->save();

        return array('success'=> 200, 'data'=>$businessSetting);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessSetting  $businessSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessSetting $businessSetting)
    {
        $businessSetting->delete();
        return array('success'=> 200);
    }
}
