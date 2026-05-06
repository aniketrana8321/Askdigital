<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller {

    // Show all testimonials
    public function index() {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    // Show create form
    public function create() {
        return view('admin.testimonials.create');
    }

    // Store testimonial with image and links
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'linkedin' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/testimonials', 'public');
        }

        Testimonial::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imagePath,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Testimonial added successfully!'
        ]);
    }
    
    public function edit($id)
{
    $testimonial = Testimonial::findOrFail($id);
    return view('admin.testimonials.edit', compact('testimonial'));
}

public function update(Request $request, $id)
{
    $testimonial = Testimonial::findOrFail($id);

    $testimonial->name = $request->name;
    $testimonial->designation = $request->designation;
    $testimonial->linkedin = $request->linkedin;
    $testimonial->facebook = $request->facebook;
    $testimonial->twitter = $request->twitter;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('testimonials', 'public');
        $testimonial->image = $imagePath;
    }

    $testimonial->save();

    return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully!');
}


    public function destroy($id) {
        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return response()->json(['success' => false, 'message' => 'Testimonial not found.'], 404);
        }

        if ($testimonial->image) {
            Storage::delete('' . $testimonial->image);
        }

        $testimonial->delete();

        return response()->json(['success' => true, 'message' => 'Testimonial deleted successfully!']);
    }
}
