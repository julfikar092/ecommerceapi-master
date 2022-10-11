<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_lists = Category::all();
        return $category_lists;
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
        Category::create([
            'parent_id'=>$request->parent_id,
            'name'=>$request->name,
            'slug'=>$request->slug,
            'level'=>$request->level,
            'order_level'=>$request->order_level,
            'commission_rate'=>$request->commission_rate,
            'banner'=>$request->banner,
            'icon'=>$request->icon,
            'featured'=>$request->featured,
            'description'=>$request->description,

        ]);
        return array('success'=>200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Category = Category::findOrFail($id);
        return array('success'=>200,'data'=>$Category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Category::update([
            'parent_id'=>$request->parent_id,
            'name'=>$request->name,
            'slug'=>$request->slug,
            'level'=>$request->level,
            'order_level'=>$request->order_level,
            'commission_rate'=>$request->commission_rate,
            'banner'=>$request->banner,
            'icon'=>$request->icon,
            'featured'=>$request->featured,
            'description'=>$request->description,
            'status'=>$request->status,

        ]);
        return array('success'=>200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return array('success'=>200);
    }
}
