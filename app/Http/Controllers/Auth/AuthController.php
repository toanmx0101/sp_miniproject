<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'address' =>'required',
            'phonenumber' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address' =>$data['address'],
            'phonenumber' =>$data['phonenumber'],
        ]);
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->passwd);
        $user->remember_token   = $request->_token;
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        // return redirect('http://localhost:8000/');
    }
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $auth = array('email'=> $request->email,'password' => Hash::make($request->passwd));
        if (Auth::attempt($auth)) {
            echo "Thanh cong";
        } else{
             echo "That bai";
        }

    }
}
