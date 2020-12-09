<?php

namespace App\Http\Controllers\Auth;

use App\FlowerCategory;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use http\Cookie;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function sendLoginResponse(Request $request)
    {
        if($request->remember != null){
            $duration = 10080;
            $rememberToken = Auth::getRecallerName();
            \Illuminate\Support\Facades\Cookie::queue($rememberToken, \Illuminate\Support\Facades\Cookie::get($rememberToken), $duration);
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
        }
            return redirect()->intended($this->redirectPath());
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
