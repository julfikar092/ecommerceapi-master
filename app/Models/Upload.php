<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['file_original_name','file_name','user_id','file_size','extension','type','external_link'];
}
