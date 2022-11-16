<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = Seller::all();
        return array('success'=> 200, 'seller'=>$seller);
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
        $seller = new Seller();
        $seller->user_id=$request->user_id;
        $seller->rating=$request->rating;
        $seller->num_of_reviews=$request->num_of_reviews;
        $seller->num_of_sale=$request->num_of_sale;
        $seller->verification_status=$request->verification_status;
        $seller->verification_info=$request->verification_info;
        $seller->cash_on_delivery_status=$request->cash_on_delivery_status;
        $seller->admin_to_pay=$request->admin_to_pay;
        $seller->bank_name=$request->bank_name;
        $seller->bank_acc_name=$request->bank_acc_name;
        $seller->bank_acc_no=$request->bank_acc_no;
        $seller->bank_routing_no=$request->bank_routing_no;
        $seller->bank_payment_status=$request->bank_payment_status;

        $seller->save();

        return array('success'=> 200, 'data'=>$seller);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        return array('success'=> 200, 'seller'=>$seller);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        return array('success'=> 200, 'seller'=>$seller);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        $seller->user_id=$request->user_id;
        $seller->rating=$request->rating;
        $seller->num_of_reviews=$request->num_of_reviews;
        $seller->num_of_sale=$request->num_of_sale;
        $seller->verification_status=$request->verification_status;
        $seller->verification_info=$request->verification_info;
        $seller->cash_on_delivery_status=$request->cash_on_delivery_status;
        $seller->admin_to_pay=$request->admin_to_pay;
        $seller->bank_name=$request->bank_name;
        $seller->bank_acc_name=$request->bank_acc_name;
        $seller->bank_acc_no=$request->bank_acc_no;
        $seller->bank_routing_no=$request->bank_routing_no;
        $seller->bank_payment_status=$request->bank_payment_status;

        $seller->save();

        return array('success'=> 200, 'data'=>$seller);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        $seller->delete();
        return array('success'=> 200);
    }
}
