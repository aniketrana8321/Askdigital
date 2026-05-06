<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $categories = ServiceCategory::all();
        return view('admin.service-category.index', compact('categories'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin.service-category.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string'
        ]);

        ServiceCategory::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
        ]);

        return redirect()->route('admin.service-category.index')->with('success', 'Category created successfully');
    }

    // Show the form for editing the specified resource
    public function edit(ServiceCategory $serviceCategory)
    {
        return view('admin.service-category.edit', compact('serviceCategory'));
    }

    // Update the specified resource in storage
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string'
        ]);

        $serviceCategory->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
        ]);

        return redirect()->route('admin.service-category.index')->with('success', 'Category updated successfully');
    }

    // Remove the specified resource from storage
    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();
        return redirect()->route('admin.service-category.index')->with('success', 'Category deleted successfully');
    }
    
    
    public function toggleStatus(Request $request)
{
    $category = ServiceCategory::findOrFail($request->id);
    $category->status = $request->status;
    $category->save();

    return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
}

}
