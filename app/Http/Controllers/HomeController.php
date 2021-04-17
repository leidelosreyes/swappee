<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,offer,post,Categories,Sub_categorie};
use Auth;

use Carbon\Carbon;

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
        $posts = Post::where('approved',1)->latest('updated_at','desc')
        ->orderBy('created_at', 'desc')
        ->simplepaginate(20);
        $categories = Categories::all();
        $sub_categories = sub_categorie::all();
        $notifications = offer::where('receiver_id',Auth::id())->get();
        return view('home', compact('posts','categories','sub_categories','notifications'));
         
    }

    public function search()
    {

        $search = request()->query('search');
       
        
        if($search!="")
        {   $posts = post::where(function ($query) use ($search){
            $query->where('product_name', 'like', '%'.$search.'%')
                  ->orWhere('location', 'like', '%'.$search.'%');
        })
        ->simplepaginate(20);
        $posts->appends(['search' => $search]);
           
        }
        else
        {
            $posts = post::simplepaginate(20);
        }
        $categories = Categories::all();
        $sub_categories = sub_categorie::all();
        $notifications = offer::where('receiver_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications'));
        
    }
  

   

    
}
