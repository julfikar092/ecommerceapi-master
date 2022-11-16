<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::all();
        return array('success'=> 200, 'review'=>$review);
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
        $review = new Review();
        $review->product_id=$request->product_id;
        $review->user_id=$request->user_id;
        $review->rating=$request->rating;
        $review->comment=$request->comment;
        $review->status=$request->status;
        $review->viewed=$request->viewed;

        $review->save();

        return array('success'=> 200, 'data'=>$review);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return array('success'=> 200, 'review'=>$review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return array('success'=> 200, 'review'=>$review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->product_id=$request->product_id;
        $review->user_id=$request->user_id;
        $review->rating=$request->rating;
        $review->comment=$request->comment;
        $review->status=$request->status;
        $review->viewed=$request->viewed;

        $review->save();

        return array('success'=> 200, 'data'=>$review);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return array('success'=> 200);
    }
}
