<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class ActivityLog extends Model
{
    use HasFactory;
    protected $fillable=['action'];
    public static function store_log($action){
        ActivityLog::insert([
            'user_id'=>Auth::id(),
            'action'=>$action,
            'created_at'=> now()
        ]);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

