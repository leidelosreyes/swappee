<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function user()
    {     
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function sub_categories()
    {
        return $this->belongsTo(Sub_categorie::class);
    }
    public function offer()
    {
        return $this->hasMany(Offer::class);
    }
}
