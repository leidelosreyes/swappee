<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts =Post::paginate(10);
        return view('home', compact('posts'));
         
    }

    public function search()
    {

        $search = request()->query('search');
       
        
        if($search)
        {
            $posts = Post::where('product_name','LIKE',"%{$search}%")->paginate(3);
            
            
    
        }
    
       
        return view('home', compact('posts'));
    }
  

   

    
}
