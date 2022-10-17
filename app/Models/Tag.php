<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['code','user_id','subject','details','files','viewed','client_viewed','status'];
}
