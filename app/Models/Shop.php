<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','name','logo','sliders','phone','address','facebook','instagram','google','twitter','youtube','slug','shipping_cost'];
}
