<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::all();
        return array('success'=> 200, 'pages'=>$pages);
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
        $pages = new Pages();
        $pages->type=$request->type;
        $pages->title=$request->title;
        $pages->slug=$request->slug;
        $pages->content=$request->content;
        $pages->image=$request->image;
        $pages->status=$request->status;

        $pages->save();

        return array('success'=> 200, 'data'=>$pages);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        return array('success'=> 200, 'pages'=>$pages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $pages)
    {
        return array('success'=> 200, 'pages'=>$pages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages $pages)
    {
        $pages->type=$request->type;
        $pages->title=$request->title;
        $pages->slug=$request->slug;
        $pages->content=$request->content;
        $pages->image=$request->image;
        $pages->status=$request->status;

        $pages->save();

        return array('success'=> 200, 'data'=>$pages);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $pages)
    {
        $pages->delete();
        return array('success'=> 200);
    }
}
