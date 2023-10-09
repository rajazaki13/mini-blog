<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(){
        $posts = Post::paginate(4);
        return view('home',['posts'=>$posts]);
    }

    public function singlepost(string $id){
        $post = Post::find($id);
        return view('singlepost',['post'=>$post]);
    }
}