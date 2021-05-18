<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable =[
      'user_id',
      'address',
      'cellphone_no'
    ];
    public function user(){

        return $this->belogsTo(User::class);
    }
}
