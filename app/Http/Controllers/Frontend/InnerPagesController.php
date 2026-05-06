<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InnerPage;

class InnerPagesController extends Controller
{
    public function show($slug)
{
    $innerPage = InnerPage::where('slug', $slug)->firstOrFail();
    $latestPages = InnerPage::latest()->take(5)->get();
    $categories = []; 

   $pageTitle = $innerPage->seo_title ?? '';
$pageDescription = $innerPage->seo_meta_description ?? '';


   

    return view('frontend.inner-page-detail', compact('innerPage', 'latestPages', 'categories', 'pageTitle', 'pageDescription'));
}

}
