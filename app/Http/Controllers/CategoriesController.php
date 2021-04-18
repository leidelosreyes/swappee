<?php

namespace App\Http\Controllers;
use App\Models\{Sub_categorie,offer,Categories,post};
use Illuminate\Http\Request;
use Auth;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,
        [
         'name'=> 'required|min:3|max:255|string',
         'icon'=> 'required'
        
        ]);
      
        $imagePath = request('icon')->store('uploads','public');
        $categories = Categories::create(['name'=>$data['name'],
                            'icon'=> $imagePath
        ]);

        return $categories;

    }
    public function store_sub_category(Request $request)
    {
        $data = $this->validate($request,
        [
         'name'=> 'required|min:3|max:255|string'
        ]);
      
        $sub_categories = Sub_categorie::create(['name'=>$data['name']]);

        return $sub_categories;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function filter_post_by_category($category_id)
    {
        $categories = categories::all();
        $posts = post::where('category_id',$category_id)
        ->paginate(20);
        $sub_categories = sub_categorie::all();
        $notifications = offer::where('receiver_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications'));
    }
    public function filter_by_price(Request $request)
    {
        $categories = categories::all();
        $sub_categories = sub_categorie::all();
        $price = $request->price;
        $min_val = 1;
        $posts = post::whereBetween('price',[$min_val,$price])
        ->paginate(20);
        $notifications = offer::where('receiver_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications'));
    }
    public function filter_post_by_sub_category($sub_category_id)
    {
        $categories = categories::all();
        $posts = post::where('sub_category_id',$sub_category_id)
        ->paginate(20);
        $sub_categories = sub_categorie::all();
        $notifications = offer::where('receiver_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications'));
    }
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
