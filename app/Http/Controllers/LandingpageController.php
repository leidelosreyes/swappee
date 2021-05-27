<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Post,Offer};
use App\Models\Categories;
use Auth;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        $posts = Post::where('approved',1)->latest('updated_at','desc')
        ->orderBy('created_at', 'desc')
        ->simplepaginate(20);
        $categories = Categories::all();
        return view('welcome', compact('posts','categories'));
    }
    public function index_404()
    {
    return view('error.404');
    }

    public function mailed()
    {
    return view('messages.mails');
    }


}
