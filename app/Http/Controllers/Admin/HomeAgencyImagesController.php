<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAgencyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeAgencyImagesController extends Controller
{
    public function index()
    {
        $images = HomeAgencyImage::latest()->get();
        return view('admin.home-agency-images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.home-agency-images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string',

        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/services', 'public');
        }

        HomeAgencyImage::create([
            'photo' => $photoPath,
            'link' => $request->link,
        ]);

        return response()->json(['message' => 'Image uploaded successfully!']);
    }

    public function edit(HomeAgencyImage $homeAgencyImage)
    {
        return view('admin.home-agency-images.edit', compact('homeAgencyImage'));
    }

    public function update(Request $request, HomeAgencyImage $homeAgencyImage)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'link' => 'nullable|string',

        ]);

        if ($request->hasFile('photo')) {
            if ($homeAgencyImage->photo) {
                Storage::disk('public')->delete($homeAgencyImage->photo);
            }

            $photoPath = $request->file('photo')->store('uploads/services', 'public');
            $homeAgencyImage->photo = $photoPath;
        }

        $homeAgencyImage->link = $request->link;
        $homeAgencyImage->save();

        return redirect()->route('admin.home-agency-images.index')
            ->with('success', 'Image updated successfully!');
    }

    public function destroy(HomeAgencyImage $homeAgencyImage)
    {
        if ($homeAgencyImage->photo) {
            Storage::disk('public')->delete($homeAgencyImage->photo);
        }

        $homeAgencyImage->delete();

        return response()->json(['message' => 'Image deleted successfully!']);
    }
}
