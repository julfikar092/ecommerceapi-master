<?php

namespace App\Http\Controllers;

use App\Models\TicketReply;
use Illuminate\Http\Request;

class TicketReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketReply = TicketReply::all();
        return array('success'=> 200, 'ticketReply'=>$ticketReply);
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
        $ticketReply = new TicketReply();
        $ticketReply->ticket_id=$request->ticket_id;
        $ticketReply->user_id=$request->user_id;
        $ticketReply->reply=$request->reply;
        $ticketReply->files=$request->files;
        $ticketReply->status=$request->status;
       
        $ticketReply->save();

        return array('success'=> 200, 'data'=>$ticketReply);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketReply  $ticketReply
     * @return \Illuminate\Http\Response
     */
    public function show(TicketReply $ticketReply)
    {
        return array('success'=> 200, 'data'=>$ticketReply);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketReply  $ticketReply
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketReply $ticketReply)
    {
        return array('success'=> 200, 'data'=>$ticketReply);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketReply  $ticketReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketReply $ticketReply)
    {
        $ticketReply->ticket_id=$request->ticket_id;
        $ticketReply->user_id=$request->user_id;
        $ticketReply->reply=$request->reply;
        $ticketReply->files=$request->files;
        $ticketReply->status=$request->status;
       
        $ticketReply->save();

        return array('success'=> 200, 'data'=>$ticketReply);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketReply  $ticketReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketReply $ticketReply)
    {
        $ticketReply->delete();
        return array('success'=> 200);
    }
}
