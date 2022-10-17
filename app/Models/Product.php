<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['name','added_by','user_id','category_id','brand_id','photos','thumbnail_img','video_provider','video_link','description','unit_price','purchase_price','variant_product','attributes','choice_options','colors','variations','todays_deal','published','approved','stock_visibility_state','cash_on_delivery','featured','seller_featured','current_stock','unit','min_qty','low_stock_quantity','discount','discount_type','discount_start_date','discount_end_date','tax','tax_type','shipping_type','shipping_cost','is_quantity_multiplied','est_shipping_days','num_of_sale','meta_title','meta_description','meta_img','pdf','slug','rating','barcode','digital','auction_product','file_name','file_path','external_link','external_link_btn','wholesale_product'.'status'];
}
