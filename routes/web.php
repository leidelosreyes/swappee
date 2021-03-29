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

 
// Route::get('/index', function () {  
//        return view('index');
//  });
//  Route::get('/contact', function () {  
//     return view('contact');
// });

//  Route::get('/policy', function () {
//      return view('policy'); });
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
    
 
 });
 
Route::get('/', [App\Http\Controllers\LandingpageController::class, 'landingpage'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/privacy_policy', [App\Http\Controllers\PolicyController::class, 'policy'])->name('policy');
Route::get('/terms_condition', [App\Http\Controllers\TermsconditionController::class, 'TermsCondition'])->name('terms_condition');
//------------------------------Social Media Route ----------------------------------------------
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//-------------------------------posts item ----------------------------------------
Route::get('/posts/create',[App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::post('/posts',[App\Http\Controllers\PostsController::class, 'store'])->name('posts');
Route::get('/posts/{post}',[App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('/authPosts/{post}',[App\Http\Controllers\ProfileController::class,'auth_item_show'])->name('auth-posts.show');
Route::get('/posts/{post}/edit_user_post',[App\Http\Controllers\ProfileController::class,'edit_auth_user_post'])->name('posts.edit');
Route::put('/posts/{posts}',[App\Http\Controllers\ProfileController::class,'update_auth_user_post'])->name('posts.update');
Route::delete('/posts/{posts}',[AOp\Http\Controllers\ProfileController::class,'destroy_auth_user_post'])->name('posts.delete');
//--------------------------------auction item---------------------------------
Route::get('/auctions/create',[App\Http\Controllers\AuctionController::class, 'create'])->name('auctions.create');
Route::post('/auctions',[App\Http\Controllers\AuctionController::class, 'store'])->name('auctions');
Route::get('/auctions/index',[App\Http\Controllers\AuctionController::class, 'index'])->name('auctions.index');
Route::get('/auctions/{auction}',[App\Http\Controllers\AuctionController::class, 'show'])->name('auctions.show');
//------------------------------------offer----------------------------------------
Route::get('/offers/create/{post}',[App\Http\Controllers\OfferController::class, 'create'])->name('offers.create');
Route::post('/offers',[App\Http\Controllers\OfferController::class, 'store'])->name('offers');
Route::get('/user/offer',[App\Http\Controllers\OfferController::class, 'show_offers'])->name('show.offers');
Route::get('/user/notification',[App\Http\Controllers\OfferController::class, 'show_notifications'])->name('show.notifications');
//-------------------------------- User ---------------------------------
Route::get('/user/profile',[App\Http\Controllers\ProfileController::class,'index'])->name('user.profile');
Route::get('/user/profile_public_view',[App\Http\Controllers\ProfileController::class,'index_public_view'])->name('user.profile_public_view');
Route::get('/search/profile_product', [App\Http\Controllers\ProfileController::class, 'search'])->name('search.profile_product');
Route::get('/search/search_public_view', [App\Http\Controllers\ProfileController::class, 'search_public_view'])->name('search.public_view');

//-----------------------------------message-------------------------------------
Route::post('/message',[App\Http\Controllers\MessageController::class, 'store'])->name('message');
Route::get('/messages/message/{messages}',[App\Http\Controllers\MessageController::class, 'show_message'])->name('show.message');