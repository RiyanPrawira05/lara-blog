<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comment;


class PostCommentController extends Controller
{
    public function store(Request $request, Posts $posts)
    {
    	Comment::create([
    		'post_id' => request('post_id'),
    		'user_id' => request('user_id'),
    		'message' => request('message'),
    	]);

    	return redirect()->back();
    }
}
