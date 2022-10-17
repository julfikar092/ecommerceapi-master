<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['combined_order_id','user_id','guest_id','seller_id','shipping_address','shipping_type','delivery_status','payment_type','payment_status','payment_details','grand_total','coupon_discount','code','tracking_code','date','viewed','delivery_viewed','payment_status_viewed','commission_calculated'];
}
