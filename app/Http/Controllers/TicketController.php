<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket::all();
        return array('success'=> 200, 'ticket'=>$ticket);
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
        $ticket = new Ticket();
        $ticket->code=$request->code;
        $ticket->user_id=$request->user_id;
        $ticket->subject=$request->subject;
        $ticket->details=$request->details;
        $ticket->files=$request->files;
        $ticket->viewed=$request->viewed;
        $ticket->client_viewed=$request->client_viewed;
        $ticket->status=$request->status;

        $ticket->save();

        return array('success'=> 200, 'data'=>$ticket);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return array('success'=> 200, 'data'=>$ticket);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return array('success'=> 200, 'data'=>$ticket);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->code=$request->code;
        $ticket->user_id=$request->user_id;
        $ticket->subject=$request->subject;
        $ticket->details=$request->details;
        $ticket->files=$request->files;
        $ticket->viewed=$request->viewed;
        $ticket->client_viewed=$request->client_viewed;
        $ticket->status=$request->status;

        $ticket->save();

        return array('success'=> 200, 'data'=>$ticket);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return array('success'=> 200);
    }
}
