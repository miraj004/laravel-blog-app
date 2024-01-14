<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        return self::posts("posts.index", 9);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public static function posts($view, $paginate)
    {
        return view($view, [
            'posts' => Post::filter(request(['search','category', 'author']))
                ->latest()
                ->paginate($paginate)
                ->withQueryString()
        ]);
    }
}
