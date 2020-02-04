<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index(){
        
        $posts = Post::getPublishedPosts();
        return view('posts', compact(['posts']));
    }

    public function show($id){
        
        $post = Post::with('comments')->findOrFail($id);
        \Log::info($post);
        return view('singlePost', compact(['post']));
    }

    public function create(){

        return view('create');
    }

    public function store(PostRequest $request){

        $post = Post::create($request->all());
        return redirect("/posts");
    }
}
