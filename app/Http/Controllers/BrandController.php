<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return array('success'=> 200, 'brand'=>$brand);
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
        $brand = new Brand();
        $brand->name=$request->name;
        $brand->logo=$request->logo;
        $brand->slug=$request->slug;
        $brand->description=$request->description;

        $brand->save();
        return array('success'=> 200, 'data'=>$brand);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return array('success'=> 200, 'brand'=>$brand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        return array('success'=> 200, 'brand'=>$brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->name=$request->name;
        $brand->logo=$request->logo;
        $brand->slug=$request->slug;
        $brand->description=$request->description;
        $brand->status=$request->status;

        $brand->save();
        return array('success'=> 200, 'data'=>$brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return array('success'=> 200);
    }

}

