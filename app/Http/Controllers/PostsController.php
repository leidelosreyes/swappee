<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function create()
    {   
        return view('posts.create');
    }

    public function store()
    {
        
        $data = request()->validate([
                'product_name' => 'required',
                'description' => 'required',
                'location' => 'required',
                'wishitem' => 'required',
                'delivery_method' => 'required',
                'image' => ['required','image']

        ]);

        $imagePath = request('image')->store('uploads','public');
       
        auth()->user()->posts()->create([
            'product_name' => $data['product_name'],
            'description' => $data['description'],
            'location' => $data['location'],
            'wishitem' => $data['wishitem'],
            'delivery_method' => $data['delivery_method'],
            'image' => $imagePath


        ]);

        return redirect('home');
        
          
    }
    public function show(post $post)
    {
        
        return view('posts.view',compact('post'));
    }
    
}
