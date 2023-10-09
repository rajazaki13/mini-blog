<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showPost(Request $request){
        // $post = Post::all();
        $userid = $request->user()->id;
        $posts = Post::where('user_id',$userid)->get();
        return view('dashboard',['posts'=>$posts]);
    }
}