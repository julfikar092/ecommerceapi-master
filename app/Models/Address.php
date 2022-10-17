<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','address','country_id','state_id','city_id','longitude','latitude','postal_code','phone','status'];
}
