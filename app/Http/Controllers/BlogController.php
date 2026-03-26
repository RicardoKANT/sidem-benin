<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::published()->orderBy('published_at', 'desc')->paginate(6);
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Incrémenter le compteur de vues
        $blog->increment('views');

        return view('blog-detail', compact('blog'));
    }
}
