<?php

namespace App\Http\Controllers\Admin;

use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::latest()->get();
        return view('admin.portfolio-category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.portfolio-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:portfolio_categories',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string'
        ]);

        PortfolioCategory::create([
            'name' => $request->name,
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
        ]);

        return redirect()->route('admin.portfolio-category.index')->with('success', 'Category created successfully!');
    }

    public function show(PortfolioCategory $portfolioCategory)
    {
        return view('admin.portfolio-category.show', compact('portfolioCategory'));
    }

    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('admin.portfolio-category.edit', compact('portfolioCategory'));
    }

    public function update(Request $request, PortfolioCategory $portfolioCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:portfolio_categories,name,' . $portfolioCategory->id,
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string'
        ]);

        $portfolioCategory->update([
            'name' => $request->name,
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
        ]);

        return redirect()->route('admin.portfolio-category.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->delete();

        return redirect()->route('admin.portfolio-category.index')->with('success', 'Category deleted successfully!');
    }
}
