<?php

namespace App\Http\Controllers;
use App\Models\{Sub_categorie,Offer,Categories,Post,Message};
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
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Add Categories');
        }
        if(Auth::user()->usertype != 'content-manager-admin')
        {
            return redirect()->back()->with('error','You are not authorized to Add Categories');
        }
        return view('admins.admin.categories.create-categories');
    }
    public function create_sub_category()
    {
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Add categories');
        }
        if(Auth::user()->usertype != 'content-manager-admin')
        {
            return redirect()->back()->with('error','You are not authorized to Add Categories');
        }
        return view('admins.admin.categories.create-sub-category');
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
         'name'=> 'required|min:3|max:50|string',
         'icon'=> 'required|max:8192|image'
        
        ]);
      
        $imagePath = request('icon')->store('uploads','public');
        $categories = Categories::create(['name'=>$data['name'],
                            'icon'=> $imagePath
        ]);

        return redirect('admin')->with('success','New Administrator Created Successfuly');

    }
    public function store_sub_category(Request $request)
    {
        $data = $this->validate($request,
        [
         'name'=> 'required|min:3|max:50|string'
        ]);
      
        $sub_categories = Sub_categorie::create(['name'=>$data['name']]);

        return redirect('admin')->with('success','New Administrator Created Successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function filter_post_by_category($category_id)
    {
        $categories = Categories::all();
        $posts = Post::where('category_id',$category_id)
        ->paginate(20);
        $sub_categories = Sub_categorie::all();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications','messages','offer'));
    }
    public function filter_by_price(Request $request)
    {
        $categories = Categories::all();
        $sub_categories = Sub_categorie::all();
        $price = $request->price;
        $min_val = 1;
        $posts = Post::whereBetween('price',[$min_val,$price])
        ->paginate(20);
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications','messages','offer'));
    }
    public function filter_post_by_sub_category($sub_category_id)
    {
        $categories = Categories::all();
        $posts = Post::where('sub_category_id',$sub_category_id)
        ->paginate(20);
        $sub_categories = Sub_categorie::all();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        return view('home',compact('posts','categories','sub_categories','notifications','messages','offer'));
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
