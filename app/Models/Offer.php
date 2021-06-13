<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Offer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function receiver()
    {
           return $this->belongsTo(User::class,'receiver_id');
    }

    public function sender()
    {
            return $this->belongsTo(User::class,'sender_id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
   
}
