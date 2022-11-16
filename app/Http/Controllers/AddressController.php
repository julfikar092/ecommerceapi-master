<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::all();
        return array('success'=> 200, 'address'=>$address);
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
        $address = new Address();
        $address->user_id=$request->user_id;
        $address->address=$request->address;
        $address->country_id=$request->country_id;
        $address->state_id=$request->state_id;
        $address->city_id=$request->city_id;
        $address->longitude=$request->longitude;
        $address->latitude=$request->latitude;
        $address->postal_code=$request->postal_code;
        $address->phone=$request->phone;
        $address->status=$request->status;

        $address->save();
        return array('success'=> 200, 'data'=>$address);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
       
        return array('success'=> 200, 'data'=>$address);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return array('success'=> 200, 'data'=>$address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $address->user_id=$request->user_id;
        $address->address=$request->address;
        $address->country_id=$request->country_id;
        $address->state_id=$request->state_id;
        $address->city_id=$request->city_id;
        $address->longitude=$request->longitude;
        $address->latitude=$request->latitude;
        $address->postal_code=$request->postal_code;
        $address->phone=$request->phone;
        $address->status=$request->status;

        $address->save();
        return array('success'=> 200, 'data'=>$address);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return array('success'=> 200, 'address'=>$address);
    }
}
