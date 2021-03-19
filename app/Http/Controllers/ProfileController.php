<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use Auth;
class ProfileController extends Controller
{

   public function index()
   {
    //    query builder
    // $posts = DB::table('posts')->where('user_id', auth()->id())->get();
    //     eloquent orm
    $posts = post::where('user_id',auth()->id())->get();
    return view('user.profile', compact('posts'));
   }
}
