<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Post,User,Offer,Message,Categories,Sub_categorie,auction,ActivityLog,Point};
use Carbon\Carbon;
use Auth;
class PointsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function get_points(){
        $amount = Point::where('id',Auth::id())->first();
       
    }
}
