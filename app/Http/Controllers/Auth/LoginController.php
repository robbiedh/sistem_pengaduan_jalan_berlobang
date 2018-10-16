<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $userSocial = Socialite::driver($provider)->user();

        //Check if user exists and log user in

        $user = User::where('email', $userSocial->getEmail())->first();
        if($user) {

            if(Auth::loginUsingId($user->id)){
                return redirect()->route('home');
            }
        }


        //Else sign the user up
        $userSignup = User::create([
            'name' => $userSocial->getName(),
            'email' => $userSocial->getEmail(),
            'password' => bcrypt('1234'),
        ]);

        //Finally log the user in
        if ($userSignup) {
            if(Auth::loginUsingId($user->id)){
                return redirect()->route('home');
            }
        }
    }
}
