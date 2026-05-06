<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;

class PortfolioDetailsController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::with('portfolios')->get();

        // ✅ Dynamic title and description
        $pageTitle = 'Our Portfolio | Ask Digital Agency';
        $pageDescription = 'Explore our successful digital marketing projects and case studies.';

        return view('frontend.portfolio-details', compact('categories', 'pageTitle', 'pageDescription'));
    }
}
