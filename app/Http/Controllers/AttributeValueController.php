<?php

namespace App\Http\Controllers;

use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributeValue = AttributeValue::all();
        return array('success'=> 200, 'attributeValue'=>$attributeValue);
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
        $attributeValue = new AttributeValue();
        $attributeValue->name=$request->name;
        $attributeValue->logo=$request->logo;
        $attributeValue->slug=$request->slug;
        $attributeValue->description=$request->description;

        $attributeValue->save();
        return array('success'=> 200, 'data'=>$attributeValue);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeValue $attributeValue)
    {
        return array('success'=> 200, 'data'=>$attributeValue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeValue $attributeValue)
    {
        return array('success'=> 200, 'data'=>$attributeValue);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttributeValue $attributeValue)
    {
   
        $attributeValue->attribute_id=$request->attribute_id;
        $attributeValue->value=$request->value;
        $attributeValue->color_code=$request->color_code;

        $attributeValue->save();
        return array('success'=> 200, 'data'=>$attributeValue);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeValue $attributeValue)
    {
        $attributeValue->delete();
        return array('success'=> 200, 'attributeValue'=>$attributeValue);
    }
}
