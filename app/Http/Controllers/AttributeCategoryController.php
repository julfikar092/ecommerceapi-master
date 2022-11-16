<?php

namespace App\Http\Controllers;

use App\Models\AttributeCategory;
use Illuminate\Http\Request;

class AttributeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributeCategory = AttributeCategory::all();
        return array('success'=> 200, 'attributeCategory'=>$attributeCategory);
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
        $attributeCategory = new Brand();
        $attributeCategory->category_id=$request->category_id;
        $attributeCategory->attribute_id=$request->attribute_id;

        $attributeCategory->save();
        return array('success'=> 200, 'attributeCategory'=>$attributeCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeCategory  $attributeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeCategory $attributeCategory)
    {
        return array('success'=> 200, 'attributeCategory'=>$attributeCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeCategory  $attributeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeCategory $attributeCategory)
    {
        return array('success'=> 200, 'attributeCategory'=>$attributeCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttributeCategory  $attributeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttributeCategory $attributeCategory)
    {
        $attributeCategory->category_id=$request->category_id;
        $attributeCategory->attribute_id=$request->attribute_id;

        $attributeCategory->save();
        return array('success'=> 200, 'attributeCategory'=>$attributeCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeCategory  $attributeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeCategory $attributeCategory)
    {
        $attributeCategory->delete();
        return array('success'=> 200);
    }
}
