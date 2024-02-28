<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', ['categories' => Category::latest()->get()]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3', 'unique:categories']
        ]); 

        Category::create($validated); 

        return to_route('categories.index')->with('success', 'Le categorie a ete cree avec succes !'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3', 'unique:categories']
        ]); 

        $category->update($validated); 

        return to_route('categories.index')->with('success', 'Le categorie a ete modifie avec succes !'); 
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete(); 

        return to_route('categories.index')->with('success', 'Le categorie a ete supprimee avec succes !'); 

    }
}
