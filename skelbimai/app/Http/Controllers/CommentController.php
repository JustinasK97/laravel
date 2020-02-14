<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Post $post){
        Comment::create([
           'body' => \request('body'),
           'post_id' => $post-> id,
           'user_id' => Auth()->id(),
        ]);
        return back();
    }
}
