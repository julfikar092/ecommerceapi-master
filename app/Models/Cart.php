<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['owner_id','user_id','temp_user_id','address_id','product_id','variation','price','shipping_cost','shipping_type','discount','product_referral_code','coupon_code','coupon_applied','quantity'];
}
