<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        try{
            $user = User::where('email', $request->username)->orwhere('nip',$request->username)->orWhere('username',$request->username)->first();

            if(empty($user)){
                return back()->with([
                    'error_login' => 'Email Atau Password Anda Salah!!.'
                ]);
            }

            if(!Hash::check($request->password, $user->password)) {
                return back()->with([
                    'error_login' => 'Email Atau Password Anda Salah!!.'
                ]);
            }
            Auth::login($user);
            $role = Auth::user()->role_id;

            if($role == 1 || $role == 2){
                return redirect()->route('get.home')->with('success_login','Selamat Datang '.$user->name);
            }elseif ($role == 3) {
                return redirect()->route('get.home')->with('success_login','Selamat Datang '.$user->name);
            }elseif ($role == 4 || $role == 5){
                return redirect('/')->with('login','Anda masuk sebagai '.Auth::user()->username);
            }
        }catch (\Exception $exception){
            return back()->with([
                'error' => $exception
            ]);
        }
    }
}
