<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InnerPage;
use Illuminate\Support\Str;

class InnerPageController extends Controller
{
    public function index()
    {
        $innerPages = InnerPage::latest()->paginate(10);
        return view('admin.inner-pages.index', compact('innerPages'));
    }

    public function create()
    {
        return view('admin.inner-pages.create');
    }

  public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:inner_pages',
        'description' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'seo_title' => 'nullable|string|max:255',
        'seo_meta_description' => 'nullable|string|max:500',
    ]);

    // Store the image in the same path as posts
    $photoPath = null;
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('uploads/posts', 'public');
    }

    // Create Inner Page
    InnerPage::create([
        'title' => $request->title,
        'slug' => Str::slug($request->slug),
        'description' => $request->description,
        'photo' => $photoPath,
        'seo_title' => $request->seo_title,
        'seo_meta_description' => $request->seo_meta_description,
    ]);

    return response()->json(['success' => true, 'message' => 'Inner Page Created Successfully']);
}


    public function edit(InnerPage $innerPage)
    {
        return view('admin.inner-pages.edit', compact('innerPage'));
    }
public function update(Request $request, $id)
{
    $innerPage = InnerPage::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:inner_pages,slug,' . $innerPage->id . '|max:255',
        'description' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'seo_title' => 'nullable|string|max:255',
        'seo_meta_description' => 'nullable|string|max:500',
    ]);

    // Prepare data for update
    $data = $request->only(['title', 'slug', 'description', 'seo_title', 'seo_meta_description']);
    
    // Handle photo upload
    if ($request->hasFile('photo')) {
        // Delete old photo if it exists
        if ($innerPage->photo && file_exists(public_path('uploads/inner-pages/' . $innerPage->photo))) {
            unlink(public_path('uploads/inner-pages/' . $innerPage->photo));
        }

        // Upload new photo
        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('uploads/inner-pages'), $imageName);
        $data['photo'] = $imageName;
    }

    // Update the inner page
    $innerPage->update($data);

    return response()->json(['success' => true, 'message' => 'Inner Page Updated Successfully']);
}


    public function destroy(InnerPage $innerPage)
    {
        if ($innerPage->photo) {
            unlink(public_path('uploads/inner-pages/' . $innerPage->photo));
        }
        
        $innerPage->delete();

        return response()->json(['success' => true, 'message' => 'Inner Page Deleted Successfully']);
    }
}
