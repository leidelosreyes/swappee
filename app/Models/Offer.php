<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function sender()
    {
            return $this->belongsTo(user::class,'sender_id');
    }
    public function reciever()
    {
           return $this->belongsTo(user::class,'reciever_id');
    }

}
