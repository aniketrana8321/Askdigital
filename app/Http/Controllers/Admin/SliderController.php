<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'text' => 'nullable|string',
        'button_text' => 'nullable|string|max:255',
       'button_url' => ['nullable', 'string', function ($attribute, $value, $fail) {
            if (!empty($value) && $value !== '#' && !filter_var($value, FILTER_VALIDATE_URL)) {
                $fail('The button URL must be a valid URL or #.');
            }
        }],
        'status' => 'nullable|boolean',
    ]);

    $slider = new Slider();

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('sliders', 'public');
        $slider->photo = $photoPath;
    }

    $slider->text = $request->text;
    $slider->button_text = $request->button_text;
    $slider->button_url = $request->button_url;
    $slider->status = $request->status ?? 1; // Default Active
    $slider->save();

    return response()->json(['message' => 'Slider created successfully!'], 200);
}

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'text' => 'nullable|string',
            'button_text' => 'nullable|string',
           'button_url' => ['nullable', 'string', function ($attribute, $value, $fail) {
            if (!empty($value) && $value !== '#' && !filter_var($value, FILTER_VALIDATE_URL)) {
                $fail('The button URL must be a valid URL or #.');
            }
        }],
    ]);

        $slider = Slider::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/sliders', 'public');
            $slider->photo = $photoPath;
        }

        $slider->text = $request->text;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();
        return response()->json(['success' => 'Slider deleted successfully']);
    }

    public function toggleStatus($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = !$slider->status;
        $slider->save();
    
        return response()->json(['success' => 'Slider status updated successfully']);
    }
    

}
