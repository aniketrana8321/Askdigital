<?php

namespace App\Http\Controllers\Admin;

use App\Models\Marquee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    public function index()
    {
        $marquees = Marquee::all();
        return view('admin.marquee.index', compact('marquees'));
    }

    public function create()
    {
        return view('admin.marquee.create');
    }

    public function store(Request $request)
    {
        $request->validate(['item' => 'required|string']);
        Marquee::create([
            'item' => $request->item,
            'status' => 1 // Default Active
        ]);
        return redirect()->route('admin.marquee.index')->with('success', 'Marquee added successfully');
    }


    public function edit($id)
    {
        $marquee = Marquee::findOrFail($id);
        return view('admin.marquee.edit', compact('marquee'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'item' => 'required|string'
    ]);

    $marquee = Marquee::findOrFail($id);
    $marquee->update([
        'item' => $request->item
    ]);

    return response()->json(['message' => 'Marquee updated successfully!']);
}

    

    public function destroy($id)
    {
        Marquee::findOrFail($id)->delete();
        return response()->json(['success' => 'Marquee deleted successfully']);
    }

    public function marqueeStatus($id)
    {
        $marquee = Marquee::findOrFail($id);
        $marquee->status = !$marquee->status;
        $marquee->save();
    
        return response()->json(['success' => 'Status updated successfully!']);
    }
    
}
