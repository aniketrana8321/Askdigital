<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = PortfolioCategory::all();
        return view('admin.portfolio.create', compact('categories'));
    }

   public function store(Request $request)
{
   $request->validate([
    'title' => 'nullable|string|max:255',  // ✅ Optional field
    'portfolio_category_id' => 'required|exists:portfolio_categories,id',
    'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',
]);

    $photoPath = $request->file('photo')->store('uploads/portfolios', 'public');

    Portfolio::create([
        'title' => $request->title,
        'portfolio_category_id' => $request->portfolio_category_id,
        'photo' => $photoPath,
    ]);

    return response()->json(['success' => true, 'message' => 'Portfolio created successfully.']);
}


    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $categories = PortfolioCategory::all();
        return view('admin.portfolio.edit', compact('portfolio', 'categories'));
    }

  public function update(Request $request, $id)
{
    $portfolio = Portfolio::findOrFail($id);

    $request->validate([
        'title' => 'nullable|string|max:255',
        'portfolio_category_id' => 'required|exists:portfolio_categories,id',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
    ]);

    // Handle the new image upload
    if ($request->hasFile('photo')) {
        // Delete the old photo
        if ($portfolio->photo) {
            Storage::delete('' . $portfolio->photo);
        }

        $photoPath = $request->file('photo')->store('uploads/portfolios', 'public');
        $portfolio->photo = $photoPath;
    }

    // Update portfolio details
    $portfolio->title = $request->title;
    $portfolio->portfolio_category_id = $request->portfolio_category_id;
    $portfolio->save();

    return response()->json(['message' => 'Portfolio updated successfully!']);
}

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->photo) {
            Storage::delete('' . $portfolio->photo);
        }

        $portfolio->delete();

        return response()->json(['success' => 'Portfolio deleted successfully']);
    }
}
