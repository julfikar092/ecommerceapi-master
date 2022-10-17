<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','type','code','details','discount','discount_type','start_date','end_date'];
}
