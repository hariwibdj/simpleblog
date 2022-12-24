<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //get
    public function showLoginForm(){
        return view('auth.login');
    }

    //post
    public function authentification(LoginFormRequest $request){
        dd($request->all());
    }
}
