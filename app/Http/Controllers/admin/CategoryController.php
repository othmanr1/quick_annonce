<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    // crud category for admin

    public function index()
    {
        $categories = Categorie::all();
        return view('admin_components.category', compact('categories'));
    }

    public function create()
    {
        return view('admin_components.category_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
        ]);

        $category = new Categorie();
        $category->libelle = $request->libelle;
        $category->save();

        return redirect()->route('category.index')->with('success', 'category created successfully.');
    }

    public function show($id)
    {
        $category = Categorie::findOrFail($id);
        return view('admin_components.category_show', compact('category'));
    }

    public function edit($id)
    {
        $category = Categorie::findOrFail($id);
        return view('admin_components.category_edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required',
        ]);

        $category = Categorie::findOrFail($id);
        $category->libelle = $request->libelle;
        $category->save();

        return redirect()->route('category.index')->with('success', 'category updated successfully.');
    } 

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'category deleted successfully.');
    }

    
}
