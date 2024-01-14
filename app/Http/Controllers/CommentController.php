<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __invoke(Post $post)
    {
        \request()->validate([
            'body' => 'required'
        ]);
        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => \request()->input('body')
        ]);

        return back();
    }
}
