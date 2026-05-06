<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceSubCategory;
use App\Models\ServiceCategory;
use App\Models\Service;

class ServiceSubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = ServiceSubCategory::with('category', 'service')->latest()->get();
        return view('admin.service_sub_category.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        $services = Service::all();
        return view('admin.service_sub_category.create', compact('categories', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:service_sub_categories,slug',
            'description' => 'required',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'pdf' => 'nullable|mimes:pdf',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('sub_categories/photos', 'public');
        }
        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')->store('sub_categories/banners', 'public');
        }
        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('sub_categories/pdfs', 'public');
        }

        ServiceSubCategory::create($data);

        return response()->json(['success' => true, 'message' => 'Service Sub-Category created successfully!']);
    }

    public function edit(ServiceSubCategory $serviceSubCategory)
    {
        $categories = ServiceCategory::all();
        $services = Service::all();
        return view('admin.service_sub_category.edit', compact('serviceSubCategory', 'categories', 'services'));
    }

    public function update(Request $request, ServiceSubCategory $serviceSubCategory)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:service_sub_categories,slug,' . $serviceSubCategory->id,
            'description' => 'required',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'pdf' => 'nullable|mimes:pdf',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('sub_categories/photos', 'public');
        }
        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')->store('sub_categories/banners', 'public');
        }
        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('sub_categories/pdfs', 'public');
        }

        $serviceSubCategory->update($data);

        return response()->json(['success' => true, 'message' => 'Service Sub-Category updated successfully!']);
    }

    public function destroy(ServiceSubCategory $serviceSubCategory)
    {
        $serviceSubCategory->delete();
        return response()->json(['success' => true, 'message' => 'Service Sub-Category deleted successfully!']);
    }
}
