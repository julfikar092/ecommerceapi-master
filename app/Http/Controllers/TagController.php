<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tag = Tag::all();
        return array('success'=> 200, 'tag'=>$tag);
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
        $tag = new Tag();
        $tag->name=$request->name;
        $tag->slug=$request->slug;
        $tag->description=$request->description;
        $tag->status=$request->status;
       
        $tag->save();

        return array('success'=> 200, 'data'=>$tag);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return array('success'=> 200, 'data'=>$tag);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return array('success'=> 200, 'data'=>$tag);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag  $tag)
    {
        $tag->name=$request->name;
        $tag->slug=$request->slug;
        $tag->description=$request->description;
        $tag->status=$request->status;
       
        $tag->save();

        return array('success'=> 200, 'data'=>$tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag  $tag)
    {
        $tag->delete();
        return array('success'=> 200);
    }
}


