<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return array('success'=> 200, 'product'=>$product);
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
        $product = new Product();
        $product->name=$request->name;
        $product->added_by=$request->added_by;
        $product->user_id=$request->user_id;
        $product->category_id=$request->category_id;
        $product->product_id=$request->product_id;
        $product->photos=$request->photos;
        $product->thumbnail_img=$request->thumbnail_img;
        $product->video_provider=$request->video_provider;
        $product->video_link=$request->video_link;
        $product->description=$request->description;
        $product->unit_price=$request->unit_price;
        $product->purchase_price=$request->purchase_price;
        $product->variant_product=$request->variant_product;
        $product->attributes=$request->attributes;
        $product->choice_options=$request->choice_options;
        $product->colors=$request->colors;
        $product->variations=$request->variations;
        $product->todays_deal=$request->todays_deal;
        $product->published=$request->published;
        $product->approved=$request->approved;
        $product->stock_visibility_state=$request->stock_visibility_state;
        $product->cash_on_delivery=$request->cash_on_delivery;
        $product->featured=$request->featured;
        $product->seller_featured=$request->seller_featured;
        $product->current_stock=$request->current_stock;
        $product->unit=$request->unit;
        $product->min_qty=$request->min_qty;
        $product->low_stock_quantity=$request->low_stock_quantity;
        $product->discount=$request->discount;
        $product->discount_type=$request->discount_type;
        $product->discount_start_date=$request->discount_start_date;
        $product->discount_end_date=$request->discount_end_date;
        $product->tax=$request->tax;
        $product->tax_type=$request->tax_type;
        $product->shipping_type=$request->shipping_type;
        $product->shipping_cost=$request->shipping_cost;
        $product->is_quantity_multiplied=$request->is_quantity_multiplied;
        $product->est_shipping_days=$request->est_shipping_days;
        $product->num_of_sale=$request->num_of_sale;
        $product->meta_title=$request->meta_title;
        $product->meta_description=$request->meta_description;
        $product->meta_img=$request->meta_img;
        $product->pdf=$request->pdf;
        $product->slug=$request->slug;
        $product->rating=$request->rating;
        $product->barcode=$request->barcode;
        $product->digital=$request->digital;
        $product->auction_product=$request->auction_product;
        $product->file_name=$request->file_name;
        $product->file_path=$request->file_path;
        $product->external_link=$request->external_link;
        $product->external_link_btn=$request->external_link_btn;
        $product->wholesale_product=$request->wholesale_product;
        $product->status=$request->status;

        $product->save();

        return array('success'=> 200, 'data'=>$product);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product  $product)
    {
        return array('success'=> 200, 'product'=>$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product  $product)
    {
        return array('success'=> 200, 'product'=>$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product  $product)
    {
        $product->name=$request->name;
        $product->added_by=$request->added_by;
        $product->user_id=$request->user_id;
        $product->category_id=$request->category_id;
        $product->product_id=$request->product_id;
        $product->photos=$request->photos;
        $product->thumbnail_img=$request->thumbnail_img;
        $product->video_provider=$request->video_provider;
        $product->video_link=$request->video_link;
        $product->description=$request->description;
        $product->unit_price=$request->unit_price;
        $product->purchase_price=$request->purchase_price;
        $product->variant_product=$request->variant_product;
        $product->attributes=$request->attributes;
        $product->choice_options=$request->choice_options;
        $product->colors=$request->colors;
        $product->variations=$request->variations;
        $product->todays_deal=$request->todays_deal;
        $product->published=$request->published;
        $product->approved=$request->approved;
        $product->stock_visibility_state=$request->stock_visibility_state;
        $product->cash_on_delivery=$request->cash_on_delivery;
        $product->featured=$request->featured;
        $product->seller_featured=$request->seller_featured;
        $product->current_stock=$request->current_stock;
        $product->unit=$request->unit;
        $product->min_qty=$request->min_qty;
        $product->low_stock_quantity=$request->low_stock_quantity;
        $product->discount=$request->discount;
        $product->discount_type=$request->discount_type;
        $product->discount_start_date=$request->discount_start_date;
        $product->discount_end_date=$request->discount_end_date;
        $product->tax=$request->tax;
        $product->tax_type=$request->tax_type;
        $product->shipping_type=$request->shipping_type;
        $product->shipping_cost=$request->shipping_cost;
        $product->is_quantity_multiplied=$request->is_quantity_multiplied;
        $product->est_shipping_days=$request->est_shipping_days;
        $product->num_of_sale=$request->num_of_sale;
        $product->meta_title=$request->meta_title;
        $product->meta_description=$request->meta_description;
        $product->meta_img=$request->meta_img;
        $product->pdf=$request->pdf;
        $product->slug=$request->slug;
        $product->rating=$request->rating;
        $product->barcode=$request->barcode;
        $product->digital=$request->digital;
        $product->auction_product=$request->auction_product;
        $product->file_name=$request->file_name;
        $product->file_path=$request->file_path;
        $product->external_link=$request->external_link;
        $product->external_link_btn=$request->external_link_btn;
        $product->wholesale_product=$request->wholesale_product;
        $product->status=$request->status;

        $product->save();

        return array('success'=> 200, 'data'=>$product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product  $product)
    {
        $product->delete();
        return array('success'=> 200);
    }
}
