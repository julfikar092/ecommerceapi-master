<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        return array('success'=> 200, 'transaction'=>$transaction);
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
        $transaction = new Transaction();
        $transaction->user_id=$request->user_id;
        $transaction->gateway=$request->gateway;
        $transaction->payment_type=$request->payment_type;
        $transaction->additional_content=$request->additional_content;
        $transaction->mpesa_request=$request->mpesa_request;
        $transaction->mpesa_receipt=$request->mpesa_receipt;
        $transaction->status=$request->status;

        $transaction->save();

        return array('success'=> 200, 'data'=>$transaction);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return array('success'=> 200, 'data'=>$transaction);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return array('success'=> 200, 'data'=>$transaction);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $transaction->user_id=$request->user_id;
        $transaction->gateway=$request->gateway;
        $transaction->payment_type=$request->payment_type;
        $transaction->additional_content=$request->additional_content;
        $transaction->mpesa_request=$request->mpesa_request;
        $transaction->mpesa_receipt=$request->mpesa_receipt;
        $transaction->status=$request->status;

        $transaction->save();

        return array('success'=> 200, 'data'=>$transaction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return array('success'=> 200);
    }
}
