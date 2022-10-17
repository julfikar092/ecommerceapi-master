<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['user_id','rating','num_of_reviews','num_of_sale','verification_status','verification_info','cash_on_delivery_status','admin_to_pay','bank_name','bank_acc_name','bank_acc_no','bank_routing_no','bank_payment_status'];
}
