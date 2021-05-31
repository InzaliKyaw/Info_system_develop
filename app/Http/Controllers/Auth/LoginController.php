<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        // $this->middleware('guest:user')->except('logout');
    }

    protected function authenticate(Request $request, $user)
    {
        $credentials = $request->only('email','password');
        $password = Input::get('password');
        $hashed = Hash::make($password);
        // $user->password = Hash::make($request->password);
        Log::debug("Id ".$request->id);

        if(Auth::attempt($credentials)){
            return view('students/registerStudents');
        }
    }

    // public function userLogin(Request $request){
    //     if (Auth::guard('user')->attempt(['email'=> $request->email , 'password'=> $request->password])){
    //         return view('students/registerStudents');
    //     }   
    // }
}
