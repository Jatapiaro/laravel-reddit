<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    { 
    	$posts = Post::all();
    	return view("posts.index",['posts'=>$posts]);
    }

    public function show($id)
    {
    	return view('posts.show');
    }

}
