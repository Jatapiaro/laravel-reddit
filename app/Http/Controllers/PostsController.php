<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
    	$posts = Post::orderBy('id','desc')->paginate(3);
    	return view("posts.index",['posts'=>$posts]);
    }

    public function show(Post $post)
    {
    	return view('posts.show',["post"=>$post]);
    }

    public function create()
    {
    	//Solo regresa la vista
    	return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
      $post = Post::create($request->only('title','description','url'));
      return redirect()->route('post_path', ["post"=>$post->id]);
    }

}
