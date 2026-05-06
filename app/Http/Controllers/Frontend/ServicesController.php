<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('frontend.services', compact('services'));
    }

public function show($slug)
{
    $service = Service::where('slug', $slug)->with('faqs')->firstOrFail();

    $relatedServices = Service::where('service_category_id', $service->service_category_id)
        ->where('id', '!=', $service->id)
        ->latest()
        ->take(5)
        ->get();

    $categories = ServiceCategory::all();

    // SEO Fields
    $pageTitle = $service->seo_title ?? $service->name;
    $pageDescription = $service->seo_meta_description ?? '';

    return view('frontend.service-details', compact('service', 'relatedServices', 'categories', 'pageTitle', 'pageDescription'));
}


}
