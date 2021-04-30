<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidder extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function auction(){

        return $this->belongsTo(auction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
