<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionHistory extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['order_id','order_detail_id','seller_id','admin_commission','seller_earning'];
}
