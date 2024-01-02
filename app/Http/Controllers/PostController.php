<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::with('category', 'author')
                ->latest()
                ->filter(request(['search', 'category', 'author']))
                ->simplePaginate(9)
                ->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
