<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use App\Models\{ActivityLog,User};
use illuminate\http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if(Auth::user()->usertype == 'admin'){
            return 'admin';
        }
        if(Auth::user()->usertype == 'content-manager-admin'){
         return 'admin';
        }
        if(Auth::user()->usertype == 'post-moderator-admin'){
            return 'admin';
        }
        if(Auth::user()->usertype == 'user-manager-admin'){
            return 'admin';
        }    
        return 'home';
        


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('user.profile');


        // $user->token;
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('user.profile');
        
    }
    protected function _registerOrLoginUser($data){
        $user = User::where('email','=',$data->email)->first();
        if(!$user)
        {
           $user = User::create([
               'name'  => $data->name,
               'email' => $data->email,
               'provider_id' => $data->id,
               'avatar' => $data->avatar
           ]);
        }
        // $action = "Log in Successfully";
        // $activitylog = ActivityLog::store_log($action);
       Auth::login($user);
    }
    
}
