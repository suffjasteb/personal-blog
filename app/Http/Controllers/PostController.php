<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view("index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // kita lempar ke view create
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'author_name' => 'required',
            'image' => 'nullable|image|max:20480', // 20480 KB = 20 MB
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        $post = Post::create([

            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'author_name' => $request->author_name,
            'image' => $imagePath,
        ]);

        return redirect()->route('posts.index')->with('success','Post created successed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
