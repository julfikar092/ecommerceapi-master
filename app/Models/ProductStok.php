<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStok extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['product_id','variant','sku','price','qty','image'];
}
