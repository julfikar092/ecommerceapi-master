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
        return array('success'=> 200, 'category_lists'=>$category_lists);
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
        $category = new Category();
        $category->parent_id=$request->parent_id;
        $category->name=$request->name;
        $category->slug=$request->name;
        $category->level=$request->level;
        $category->order_level=$request->order_level;
        $category->commision_rate=$request->commision_rate;
        $category->banner=$request->banner;
        $category->icon=$request->icon;
        $category->featured=$request->featured;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->save();

        return array('success'=> 200, 'data'=>$category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {        
        return array('success'=> 200, 'category'=>$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return array('success'=> 200, 'category'=>$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Category $category)
    {

        $category->parent_id=$request->parent_id;
        $category->name=$request->name;
        $category->slug=$request->name;
        $category->level=$request->level;
        $category->order_level=$request->order_level;
        $category->commision_rate=$request->commision_rate;
        $category->banner=$request->banner;
        $category->icon=$request->icon;
        $category->featured=$request->featured;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->save();

        return array('success'=> 200, 'data'=>$category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {        
        $category->delete();
        return array('success'=> 200);
    }
}
