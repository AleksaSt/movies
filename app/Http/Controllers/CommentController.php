<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store($postId){

        $post = Post::find($postId);

        $post->comments()->create(request()->all());

        return redirect('/posts/' . $post->id);
    }
}
