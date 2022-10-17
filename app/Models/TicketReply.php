<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable =['ticket_id','user_id','reply','files','status'];
}
