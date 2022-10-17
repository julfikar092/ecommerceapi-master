<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['parent_id','level','name','order_level','commision_rate','banner','icon','featured','slug','description','status'];
}
