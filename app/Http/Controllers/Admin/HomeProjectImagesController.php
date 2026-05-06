<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeProjectImagesController extends Controller
{
    public function index()
    {
        $images = HomeProjectImage::latest()->get();
        return view('admin.home-project-images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.home-project-images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/projects', 'public');
        }

        HomeProjectImage::create([
            'photo' => $photoPath,
        ]);

        return response()->json(['message' => 'Project image uploaded successfully!']);
    }

    public function edit(HomeProjectImage $homeProjectImage)
    {
        return view('admin.home-project-images.edit', compact('homeProjectImage'));
    }

    public function update(Request $request, HomeProjectImage $homeProjectImage)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3048',
        ]);

        if ($request->hasFile('photo')) {
            if ($homeProjectImage->photo) {
                Storage::disk('public')->delete($homeProjectImage->photo);
            }

            $photoPath = $request->file('photo')->store('uploads/projects', 'public');
            $homeProjectImage->photo = $photoPath;
        }

        $homeProjectImage->save();

        return redirect()->route('admin.home-project-images.index')
            ->with('success', 'Project image updated successfully!');
    }

    public function destroy(HomeProjectImage $homeProjectImage)
    {
        if ($homeProjectImage->photo) {
            Storage::disk('public')->delete($homeProjectImage->photo);
        }

        $homeProjectImage->delete();

        return response()->json(['message' => 'Project image deleted successfully!']);
    }
}
