<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return PostController::posts("admin.posts.index", 15);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $attributes = $this->validatePost();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $attributes['user_id'] = auth()->id();
        Post::create($attributes);
        return redirect('/')->with('success', 'New Post Has Published!');
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);
        if (isset($attributes['thumbnail'])) {
            if (is_file($path = storage_path('app/public/' . $post->thumbnail)))
                unlink($path);
            $attributes['thumbnail'] = \request()->file('thumbnail')->store('thumbnails');
        }
        $post->update($attributes);
        return back()->with('success', 'Post Updated!');
    }


    public function destroy(Post $post)
    {
        if (is_file($path = storage_path('app/public/' . $post->thumbnail)))
            unlink($path);
        $post->delete();
        return redirect('admin/posts')->with('success', 'Post Deleted');
    }

    private function validatePost(?Post $post = null):array
    {
        $post ??= new Post();
        return request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => $post->exists ? ['image']:['required', 'image'],
            'excerpt' => 'required',
            'body' => 'required'
            ]);
    }


    /*
        public function show()
        {
            // 1.
            if (auth()->guest())
                abort(Response::HTTP_FORBIDDEN); // Symfony\Component\HttpFoundation\Response
            if (auth()->user()->username !== 'admin_username')
                abort(Response::HTTP_FORBIDDEN);
            // 2.
            if (auth()->user()?->username !== 'admin_username')
                abort(Response::HTTP_FORBIDDEN);
            // Above both are same
            return view('admin.posts.show');
        }
    */

}
