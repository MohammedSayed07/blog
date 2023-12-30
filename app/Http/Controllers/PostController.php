<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

    public function create()
    {
        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'body' => ['required'],
            'category_id' => ['required' , Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/');
    }
}
