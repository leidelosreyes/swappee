<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
    return view('about');
});
Route::get('/user/index', function () {
  return view('user.index');
});



//  Route::get('/terms_condition', function () {
//     return view('terms_condition');
// });
Auth::routes(['verify' => true]);
  Route::group(['middleware' => ['auth','admin']],function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/show/{params}', [App\Http\Controllers\AdminController::class, 'show_admin'])->name('show_admin.admin');
    Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create.admin');
    Route::post('/admin/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store.admin');
    Route::get('/admin/edit/{id}',[App\Http\Controllers\AdminController::class,'edit'])->name('edit.admin');
    Route::post('/admin/update/{id}',[App\Http\Controllers\AdminController::class,'update'])->name('update.admin');
    Route::get('/admin/delete/{id}',[App\Http\Controllers\AdminController::class,'delete_admin'])->name('delete_admin.admin');
    
    Route::prefix('swap')->group(function (){
      Route::get('/admin/show', [App\Http\Controllers\AdminController::class, 'show_swap'])->name('show_swap.admin');
      Route::post('/admin/approve/{id}',[App\Http\Controllers\AdminController::class, 'post_approval'])->name('post_approval.admin');
      Route::post('/admin/delete/{id}',[App\Http\Controllers\AdminController::class, 'delete_swap'])->name('delete_swap.admin');
    });
//--------------------------------------------------Admin Archiving---------------------------------------------------------------------//
    Route::prefix('deleted')->group(function(){
      Route::get('/admin/show/{deleted}',[App\Http\Controllers\AdminController::class, 'archive'])->name('archive.admin');
    });
//-------------------------------------------------Auction Approval---------------------------------------------------------------------//
    Route::prefix('auction')->group(function (){
      Route::get('/admin/show', [App\Http\Controllers\AdminController::class, 'show_auction'])->name('show_auction.admin');
      Route::post('/admin/show/{id}',[App\Http\Controllers\AdminController::class, 'auction_approval'])->name('auction_approval.admin');    
      Route::get('/admin/delete/{id}',[App\Http\Controllers\AdminController::class, 'delete_auction'])->name('delete_auction.admin');
    });
//--------------------------------------------------Show Registered admins---------------------------------------------------------------------//
    Route::prefix('user')->group(function (){
      Route::get('/admin/show/{params}', [App\Http\Controllers\AdminController::class, 'show_user'])->name('show_user.admin');
    });
//--------------------------------------------------Creating Categories and Sub-categories---------------------------------------------------------------------//
    Route::prefix('categories')->group(function (){
      Route::get('/admin/create',[App\Http\Controllers\AdminController::class, 'create_category'])->name('create_categories.admin');
      Route::get('/admin/sub_categories/create',[App\Http\Controllers\AdminController::class, 'create_sub_category'])->name('create_sub_categories.admin');
    });
    //--------------------------------------------------Bidders---------------------------------------------------------------------//
    Route::prefix('bidders')->group(function (){
      Route::get('/admin/show_winner',[App\Http\Controllers\AdminController::class, 'show_all_winners'])->name('show_winner.admin');
      Route::get('/admin/show_bidder',[App\Http\Controllers\AdminController::class, 'show_all_bidders'])->name('show_bidder.admin');
      Route::get('/admin/send_notify/{id}',[App\Http\Controllers\AdminController::class, 'send_notify'])->name('send_notify.admin');
    });
 });

 
Route::get('/', [App\Http\Controllers\LandingpageController::class, 'landingpage'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/index/old', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/privacy_policy', [App\Http\Controllers\PolicyController::class, 'policy'])->name('policy');
Route::get('/terms_condition', [App\Http\Controllers\TermsconditionController::class, 'TermsCondition'])->name('terms_condition');
//------------------------------Social Media Route ----------------------------------------------
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//-------------------------------Posts item ----------------------------------------
Route::get('/posts/create',[App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::post('/posts',[App\Http\Controllers\PostsController::class, 'store'])->name('posts');
Route::get('/posts/{post}',[App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('/authPosts/{post}',[App\Http\Controllers\ProfileController::class,'auth_item_show'])->name('auth-posts.show');
Route::get('/posts/{post}/edit_user_post',[App\Http\Controllers\ProfileController::class,'edit_auth_user_post'])->name('posts.edit');
Route::put('/posts/{posts}',[App\Http\Controllers\ProfileController::class,'update_auth_user_post'])->name('posts.update');
Route::delete('/posts/{posts}',[App\Http\Controllers\ProfileController::class,'destroy_auth_user_post'])->name('posts.delete');
//--------------------------------Auction item---------------------------------
Route::get('/auctions/create',[App\Http\Controllers\AuctionController::class, 'create'])->name('auctions.create');
Route::post('/auctions/store',[App\Http\Controllers\AuctionController::class, 'store'])->name('auctions.store');
Route::get('/auctions/index',[App\Http\Controllers\AuctionController::class, 'index'])->name('auctions.index');
Route::get('/auctions/{auction}',[App\Http\Controllers\AuctionController::class, 'show'])->name('auctions.show');
Route::delete('/auctions/{id}',[App\Http\Controllers\AuctionController::class, 'delete'])->name('auctions.delete');
Route::get('/search/auction', [App\Http\Controllers\AuctionController::class, 'search'])->name('auctions.search');
//------------------------------------Offer----------------------------------------
Route::get('/offers/create/{post}/{post_id}',[App\Http\Controllers\OfferController::class, 'create'])->name('offers.create');
Route::post('/offers',[App\Http\Controllers\OfferController::class, 'store'])->name('offers');
Route::get('/user/offer',[App\Http\Controllers\OfferController::class, 'show_offers'])->name('show.offers');
Route::get('/user/notification',[App\Http\Controllers\OfferController::class, 'show_notifications'])->name('show.notifications');
Route::post('/user/accept/{id}',[App\Http\Controllers\OfferController::class, 'accept_offer'])->name('accept.offer');
Route::get('/user/show/delivery',[App\Http\Controllers\OfferController::class, 'show_for_delivery'])->name('for_delivery_item.show');
Route::get('/user/show/meetup',[App\Http\Controllers\OfferController::class, 'show_for_meetup'])->name('for_meetup_item.show');
//-------------------------------- User ---------------------------------
Route::get('/user/profile',[App\Http\Controllers\ProfileController::class,'index'])->name('user.profile');
Route::get('/user/auctions/profile_view',[App\Http\Controllers\ProfileController::class,'auction_index'])->name('user.auction_view');
Route::get('/user/profile_public_view',[App\Http\Controllers\ProfileController::class,'index_public_view'])->name('user.profile_public_view');
Route::get('/search/profile_product', [App\Http\Controllers\ProfileController::class, 'search'])->name('search.profile_product');
Route::get('/search/search_public_view/{id}', [App\Http\Controllers\ProfileController::class, 'search_public_view'])->name('search.public_view');
Route::get('/user/show/won_item',[App\Http\Controllers\BidderController::class, 'show'])->name('user.won_view');
Route::get('/user/edit_profile',[App\Http\Controllers\ProfileController::class, 'edit_profile'])->name('user.edit_profile');
Route::post('/user/update',[App\Http\Controllers\ProfileController::class, 'update_profile'])->name('user.update_profile');
//-----------------------------------Message-------------------------------------
Route::post('/message',[App\Http\Controllers\MessageController::class, 'store'])->name('message');
Route::post('/message_reply',[App\Http\Controllers\MessageController::class, 'store_reply'])->name('message.reply');
Route::get('/message/show',[App\Http\Controllers\MessageController::class, 'show_message'])->name('show.message');
Route::get('/message/show_sent_item',[App\Http\Controllers\MessageController::class, 'show_sent_item'])->name('show.sent_item');
Route::delete('/message/delete/{id}',[App\Http\Controllers\MessageController::class, 'delete_message'])->name('delete.message');
Route::get('/messages/show/{id}',[App\Http\Controllers\MessageController::class, 'show_sender_message'])->name('show-sender.message');
Route::get('/messages/reply/{id}',[App\Http\Controllers\MessageController::class, 'show_reply_message'])->name('show-reply.message');

//--------------------------------------Categories--------------------------------------
Route::post('/categories',[App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
Route::get('/category/{category_id}',[App\Http\Controllers\CategoriesController::class, 'filter_post_by_category'])->name('filter.category');
Route::get('/auction/category/{category_id}',[App\Http\Controllers\CategoriesController::class, 'filter_auction_by_category'])->name('filter.category_auction');
//--------------------------------------------Sub_categories-------------------------
Route::post('/sub_categories',[App\Http\Controllers\CategoriesController::class, 'store_sub_category'])->name('sub_categories.store');
Route::get('/sub_category/{sub_category_id}',[App\Http\Controllers\CategoriesController::class, 'filter_post_by_sub_category'])->name('filter.sub_category');
Route::get('/auction/sub_category/{sub_category_id}',[App\Http\Controllers\CategoriesController::class, 'filter_auction_by_sub_category'])->name('filter.sub_category_auction');
//-----------------------------------------Filter by price------------------------------
Route::get('/filter_by_price',[App\Http\Controllers\CategoriesController::class, 'filter_by_price'])->name('filter.price');
Route::get('/auction/filter_by_price',[App\Http\Controllers\CategoriesController::class, 'filter_auction_by_price'])->name('filter.auction_price');

//-------------------------------------------Courier Route------------------------------------------
Route::prefix('mr.speedy')->group(function(){
  Route::get('/courier/calculate',[App\Http\Controllers\CourierController::class,'calculate_order'])->name('courier.calculate');
  Route::get('/courier/info_location',[App\Http\Controllers\CourierController::class,'courier_info_and_location'])->name('courier.info_location');
  Route::post('/courier/store',[App\Http\Controllers\CourierController::class,'store'])->name('courier.store');
  Route::get('/courier/calculate-swap',[App\Http\Controllers\CourierController::class,'calculate_order_swap'])->name('courier_swap.calculate');
  Route::post('/courier/place_order',[App\Http\Controllers\CourierController::class,'place_order_swap'])->name('courier_swap.place_order');
});
//------------------------------------------Bidders Routes -----------------------------------------------
Route::prefix('bidders')->group(function(){
  Route::post('/store',[App\Http\Controllers\BidderController::class,'store'])->name('bidders.store');
  Route::get('/index',[App\Http\Controllers\BidderController::class,'index'])->name('bidders.index');
});

//---------------------------------------------- meet up routes --------------------------------------------
Route::prefix('meetup')->group(function (){
  Route::post('/send_info',[App\Http\Controllers\OfferController::class,'send_info_meetup'])->name('meet_up.send_info');
});



//-----------------------------------------------------public profile-----------------------------------
Route::prefix('public_profile')->group(function (){
  Route::get('/posts/{id}',[App\Http\Controllers\ProfileController::class, 'show_public_view'])->name('public_profile_posts.show');
  Route::get('/category/{category}/{id}',[App\Http\Controllers\ProfileController::class, 'filter_by_category'])->name('public_profile_posts.filter');
  Route::get('/sub_category/{sub_category}/{id}',[App\Http\Controllers\ProfileController::class, 'filter_by_sub_category'])->name('public_profile_sub.filter');
});

