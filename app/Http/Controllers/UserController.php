<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request\UserRequest;
class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }
    public function login (){
        return view('account.login');
    }
    public function postLogin(UserRequest $request){

    }
    public function my_account(){
        return view('user.my_account');
    }

    public function order_history(){
        return view('user.history');
    }
    public function edit_address(){
        return view('user.edit_address');
    }
}