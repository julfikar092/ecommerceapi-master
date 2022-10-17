<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','gateway','payment_type','additional_content','mpesa_request','mpesa_receipt','status'];
}
