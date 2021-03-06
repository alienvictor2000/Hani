<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home');
        }
        $this->sendFailedLoginResponse($request);
    }

    public function getLoginCheckout(){
        return view('auth.login');
    }

    public function postLoginAllPage(Request $request){
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->back();
        }
        $this->sendFailedLoginResponse($request);
    }


    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
