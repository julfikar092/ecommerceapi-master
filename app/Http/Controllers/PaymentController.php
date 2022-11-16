<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = Payment::all();
        return array('success'=> 200, 'payment'=>$payment);
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
        $payment = new Payment();
        $payment->seller_id=$request->seller_id;
        $payment->amount=$request->amount;
        $payment->payment_details=$request->payment_details;
        $payment->payment_method=$request->payment_method;
        $payment->txn_code=$request->txn_code;
        $payment->save();

        return array('success'=> 200, 'data'=>$payment);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return array('success'=> 200, 'payment'=>$payment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return array('success'=> 200, 'payment'=>$payment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->seller_id=$request->seller_id;
        $payment->amount=$request->amount;
        $payment->payment_details=$request->payment_details;
        $payment->payment_method=$request->payment_method;
        $payment->txn_code=$request->txn_code;
        $payment->save();

        return array('success'=> 200, 'data'=>$payment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return array('success'=> 200);
    }
}
