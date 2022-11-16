<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductTag;

class ProductTagController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producttag = ProductTag::all();
        return array('success'=> 200, 'producttag'=>$producttag);
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
        $producttag = new ProductTag();
        $producttag->tag_id=$request->category_id;
        $producttag->product_id=$request->title;
    
        $producttag->save();

        return array('success'=> 200, 'data'=>$producttag);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductTag  $producttag
     * @return \Illuminate\Http\Response
     */
    public function show(ProductTag  $producttag)
    {
        return array('success'=> 200, 'producttag'=>$producttag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductTag  $producttag
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductTag  $producttag)
    {
        return array('success'=> 200, 'producttag'=>$producttag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductTag  $producttag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductTag  $producttag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductTag  $producttag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductTag  $producttag)
    {
        $producttag->delete();
        return array('success'=> 200);
    }
}
