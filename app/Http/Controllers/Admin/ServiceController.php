<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller {

    // Display all services
   public function index()
{
    $services = Service::with('category')->orderBy('id', 'desc')->paginate(10);
    return view('admin.service.index', compact('services'));
}

    // Show the form for creating a new service
    public function create() {
        $categories = ServiceCategory::all();
        return view('admin.service.create', compact('categories'));
    }

    // Store a newly created service
    public function store(Request $request) {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',  // Category validation
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:2048',
        ]);

        $service = new Service();
        $service->service_category_id = $request->service_category_id;  // Assign category ID
        $service->name = $request->name;
        $service->slug = Str::slug($request->slug);
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->phone = $request->phone;
        $service->seo_title = $request->seo_title;
        $service->seo_meta_description = $request->seo_meta_description;

        // Handle file uploads
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/services', 'public');
            $service->photo = $photoPath;
        }

        if ($request->hasFile('banner')) {
            $bannerPath = $request->file('banner')->store('uploads/services', 'public');
            $service->banner = $bannerPath;
        }

        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('uploads/services', 'public');
            $service->pdf = $pdfPath;
        }

        $service->save();

        return response()->json([
            'success' => true,
            'message' => 'Service created successfully!'
        ]);
    }

    // Show the form for editing the specified service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $categories = ServiceCategory::all();
        return view('admin.service.edit', compact('service', 'categories'));
    }

    // Update the specified service
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $id,
            'short_description' => 'required|string',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'phone' => 'nullable|string',
            'seo_title' => 'nullable|string',
            'seo_meta_description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:2048',
        ]);

        $service->service_category_id = $request->service_category_id;
        $service->update($request->except(['photo', 'banner', 'pdf']));

        // Handle file uploads
        if ($request->hasFile('photo')) {
            if ($service->photo) {
                Storage::delete('' . $service->photo);
            }
            $photoPath = $request->file('photo')->store('uploads/services', 'public');
            $service->photo = $photoPath;
        }

        if ($request->hasFile('banner')) {
            if ($service->banner) {
                Storage::delete('' . $service->banner);
            }
            $bannerPath = $request->file('banner')->store('uploads/services', 'public');
            $service->banner = $bannerPath;
        }

        if ($request->hasFile('pdf')) {
            if ($service->pdf) {
                Storage::delete('' . $service->pdf);
            }
            $pdfPath = $request->file('pdf')->store('uploads/services', 'public');
            $service->pdf = $pdfPath;
        }

        $service->save();

        return response()->json(['success' => true, 'message' => 'Service updated successfully.']);
    }

    // Remove the specified service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        
        // Delete associated files
        if ($service->photo) {
            Storage::delete('' . $service->photo);
        }
        if ($service->banner) {
            Storage::delete('' . $service->banner);
        }
        if ($service->pdf) {
            Storage::delete('' . $service->pdf);
        }

        $service->delete();

        return response()->json(['success' => 'Service deleted successfully!']);
    }
    
    public function toggleStatus(Request $request)
{
    $service = Service::findOrFail($request->id);
    $service->status = $request->status;
    $service->save();

    return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
}

}
