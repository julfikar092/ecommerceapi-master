<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerWithdraw extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','amount','message','status','viewed'];
}
