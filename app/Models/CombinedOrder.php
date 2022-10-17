<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombinedOrder extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','shipping_address','grand_total'];
}
