<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider_id','avatar'
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function auctions()
    {
        return $this->hasMany(auction::class);
    }
    public function receiver()
    {
        return $this->hasMany(Offer::class,'reciever_id');
    }

    public function sender()
    {
        return $this->hasMany(Offer::class,'sender_id');
    }
    public function m_receiver()
    {
        return $this->hasMany(Message::class,'receiver_id');
    }

    public function m_sender()
    {
        return $this->hasMany(Message::class,'sender_id');
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function bid()
    {
        return $this->hasMany(bidder::class);
    }
    public function logs(){
        return $this->hasMany(ActivityLog::class);
    }
    public function points(){
        return $this->hasOne(Point::class);
    }
    
    
}
