<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
