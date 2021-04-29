<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function m_receiver()
    {
           return $this->belongsTo(User::class,'receiver_id');
    }

    public function m_sender()
    {
            return $this->belongsTo(User::class,'sender_id');
    }
}
