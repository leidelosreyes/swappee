<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        $posts = Post::all();
        $categories = Categories::all();
        return view('welcome', compact('posts','categories'));
    }
}
