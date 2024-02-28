<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', ['posts' => Post::latest()->paginate(10)]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => ['required', 'string', 'unique:posts', 'min:3'], 
            'price' => ['required'], 
            'quantity' => ['required']
        ]); 

        Post::create($validated); 

        return to_route('posts.index')->with('success', 'Cet article a ete cree avec success !'); 
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $validated = $request->validate([

            'name' => ['required', 'string', 'unique:posts', 'min:3'], 
            'price' => ['required'], 
            'quantity' => ['required']
        ]); 

        $post->update($validated); 

        return to_route('posts.index')->with('success', 'Cet article a ete modifie avec success !');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete(); 

        return to_route('posts.index')->with('success', 'Cet article a ete supprime avec success !'); 
    }
}
