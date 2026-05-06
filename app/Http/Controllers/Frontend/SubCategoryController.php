<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceSubCategory;
use App\Models\Service;
use App\Models\ServiceCategory;

class SubCategoryController extends Controller
{
    public function show($slug)
    {
        // Fetch the subcategory based on the slug
        $subcategory = ServiceSubCategory::where('slug', $slug)->firstOrFail();

        // Fetch related services using only service_id (excluding the current subcategory)
        $relatedServices = Service::where('id', $subcategory->service_id)
            ->latest()
            ->take(5)
            ->get();

        // Fetch all categories
        $categories = ServiceCategory::all();

        // SEO Fields
        $pageTitle = $subcategory->seo_title ?? $subcategory->name;
        $pageDescription = $subcategory->seo_meta_description ?? '';

        return view('frontend.subcategory', compact('subcategory', 'relatedServices', 'categories', 'pageTitle', 'pageDescription'));
    }
}
