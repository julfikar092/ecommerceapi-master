<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::all();
        return array('success'=> 200, 'currency'=>$currency);
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
        $currency = new Currency();
        $currency->name=$request->name;
        $currency->symbol=$request->symbol;
        $currency->exchange_rate=$request->exchange_rate;
        $currency->status=$request->status;
        $currency->code=$request->code;
        
        $currency->save();
        return array('success'=> 200, 'data'=>$currency);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        return array('success'=> 200, 'currency'=>$currency);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return array('success'=> 200, 'currency'=>$currency);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        $currency->name=$request->name;
        $currency->symbol=$request->symbol;
        $currency->exchange_rate=$request->exchange_rate;
        $currency->status=$request->status;
        $currency->code=$request->code;
        
        $currency->save();
        return array('success'=> 200, 'data'=>$currency);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();
        return array('success'=> 200);
    }
}
