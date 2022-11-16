<?php

namespace App\Http\Controllers;

use App\Models\ProductStok;
use Illuminate\Http\Request;

class ProductStokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productStok = ProductStok::all();
        return array('success'=> 200, 'productStok'=>$productStok);
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
        $productStok = new ProductStok();
        $productStok->product_id=$request->product_id;
        $productStok->variant=$request->variant;
        $productStok->sku=$request->sku;
        $productStok->price=$request->price;
        $productStok->qty=$request->qty;
        $productStok->image=$request->image;

        $productStok->save();

        return array('success'=> 200, 'data'=>$productStok);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductStok  $productStok
     * @return \Illuminate\Http\Response
     */
    public function show(ProductStok $productStok)
    {
        return array('success'=> 200, 'data'=>$productStok);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductStok  $productStok
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductStok $productStok)
    {
        return array('success'=> 200, 'data'=>$productStok);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductStok  $productStok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductStok $productStok)
    {
        $productStok->product_id=$request->product_id;
        $productStok->variant=$request->variant;
        $productStok->sku=$request->sku;
        $productStok->price=$request->price;
        $productStok->qty=$request->qty;
        $productStok->image=$request->image;

        $productStok->save();

        return array('success'=> 200, 'data'=>$productStok);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductStok  $productStok
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductStok $productStok)
    {
        $productStok->delete();
        return array('success'=> 200);
    }
}
