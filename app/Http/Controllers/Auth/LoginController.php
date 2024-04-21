<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    // protected function redirectTo()
    // {
    //     session()->flash('success', 'You are logged in!');
    //     return $this->redirectTo;
    // }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request){

        $credentials = $request->validated();

        // dd($credentials);

        // dd(Auth::attempt($credentials));

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);

            if(Auth::user()->hasRole('superadmin')){
                return redirect()->route('dashboard');
            }
        }

    }

    public function logout(){
        Auth::logout();

        return redirect()->route('loginform');
    }


}
