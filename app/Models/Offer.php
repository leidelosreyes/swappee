<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function receiver()
    {
           return $this->belongsTo(user::class,'receiver_id');
    }

    public function sender()
    {
            return $this->belongsTo(user::class,'sender_id');
    }
    public function post()
    {
        return $this->belongsTo(post::class);
    }
   
}
