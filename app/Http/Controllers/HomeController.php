<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $username = 'hariwib';
        return view('home',['user'=>$username,]);
    }

    public function viewuser(){
        $username = 'hariwib';
        return view('view_home',compact('username'));
    }
}
