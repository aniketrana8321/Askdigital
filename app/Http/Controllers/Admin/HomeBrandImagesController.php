<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBrandImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeBrandImagesController extends Controller
{
    public function index()
    {
       $images = HomeBrandImage::latest()->paginate(10);
        return view('admin.home-brand-images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.home-brand-images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/brands', 'public');
        }

        HomeBrandImage::create([
            'photo' => $photoPath,
        ]);

        return response()->json(['message' => 'Brand image uploaded successfully!']);
    }

    public function edit(HomeBrandImage $homeBrandImage)
    {
        return view('admin.home-brand-images.edit', compact('homeBrandImage'));
    }

    public function update(Request $request, HomeBrandImage $homeBrandImage)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($homeBrandImage->photo) {
                Storage::disk('public')->delete($homeBrandImage->photo);
            }

            $photoPath = $request->file('photo')->store('uploads/brands', 'public');
            $homeBrandImage->photo = $photoPath;
        }

        $homeBrandImage->save();

        return redirect()->route('admin.home-brand-images.index')
            ->with('success', 'Brand image updated successfully!');
    }

    public function destroy(HomeBrandImage $homeBrandImage)
    {
        if ($homeBrandImage->photo) {
            Storage::disk('public')->delete($homeBrandImage->photo);
        }

        $homeBrandImage->delete();

        return response()->json(['message' => 'Brand image deleted successfully!']);
    }
}
