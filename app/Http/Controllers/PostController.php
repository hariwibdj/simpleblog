<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::with(['user:id,name,email'])->get();
        return response()->json($posts);
    }
}
