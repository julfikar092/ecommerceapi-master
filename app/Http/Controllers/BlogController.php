<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return array('success'=> 200, 'blog'=>$blog);
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
        $blog = new Blog();
        $blog->category_id=$request->category_id;
        $blog->title=$request->title;
        $blog->slug=$request->slug;
        $blog->short_description=$request->short_description;
        $blog->description=$request->description;
        $blog->banner=$request->banner;

        $blog->save();

        return array('success'=> 200, 'data'=>$blog);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return array('success'=> 200, 'blog'=>$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return array('success'=> 200, 'blog'=>$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->category_id=$request->category_id;
        $blog->title=$request->title;
        $blog->slug=$request->slug;
        $blog->short_description=$request->short_description;
        $blog->description=$request->description;
        $blog->banner=$request->banner;
        $blog->status=$request->status;

        $blog->save();

        return array('success'=> 200, 'data'=>$blog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return array('success'=> 200);
    }
}
