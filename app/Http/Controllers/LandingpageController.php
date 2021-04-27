<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;

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
}
