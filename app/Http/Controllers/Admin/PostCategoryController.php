<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::latest()->get();
        return view('admin.post-category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.post-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:post_categories|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string'
        ]);

        PostCategory::create([
            'name' => $request->name,
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
        ]);

        return redirect()->route('admin.post-category.index')->with('success', 'Post category created successfully!');
    }

    public function edit($id)
    {
        $category = PostCategory::findOrFail($id);
        return view('admin.post-category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = PostCategory::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully!',
        ]);
    }

      public function destroy($id)
    {
        $category = PostCategory::findOrFail($id);
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully!'
        ]);
    }
}

