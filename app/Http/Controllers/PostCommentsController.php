<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post, Request $request)
    {
        // REQUEST VALIDATION
        request()->validate([
            'body' => 'required'
        ]);
        // ADD COMMENT to the given post articles
        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->input('body')
        ]);
        // REDIRECT to previous page
        return back();
    }
}
