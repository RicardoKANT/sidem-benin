<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('published_at', 'desc')->paginate(15);
        return view('admins.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,bmp|max:2048',
            'author' => 'nullable|string|max:100',
            'status' => 'in:draft,published,archived',
            'published_at' => 'nullable|date_format:Y-m-d H:i',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
            $validated['image'] = $imagePath;
        }

        if (!isset($validated['author'])) {
            $validated['author'] = auth()->user()?->name ?? 'Admin';
        }

        if ($validated['status'] === 'published' && !isset($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        Blog::create($validated);

        return redirect()->route('blogs.index')
            ->with('success', 'Article créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admins.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admins.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,bmp|max:2048',
            'author' => 'nullable|string|max:100',
            'status' => 'in:draft,published,archived',
            'published_at' => 'nullable|date_format:Y-m-d H:i',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
            $validated['image'] = $imagePath;
        }

        if (!isset($validated['author'])) {
            $validated['author'] = $blog->author;
        }

        if ($validated['status'] === 'published' && !$blog->published_at) {
            $validated['published_at'] = now();
        }

        $blog->update($validated);

        return redirect()->route('blogs.index')
            ->with('success', 'Article mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')
            ->with('success', 'Article supprimé avec succès!');
    }
}
