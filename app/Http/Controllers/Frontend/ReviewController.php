<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // ✅ Dynamic title and description
        $pageTitle = 'Client Testimonials | Ask Digital Agency';
        $pageDescription = 'See what our clients say about our services and results.';

        return view('frontend.review', compact('pageTitle', 'pageDescription'));
    }



  public function privacyPolicy()
    {
        // Optional: Add SEO meta info if needed
        $pageTitle = 'Privacy Policy | Ask Digital Agency';
        $pageDescription = 'Learn how Ask Digital Agency handles your data and privacy.';
        return view('frontend.privacy-policy', compact('pageTitle', 'pageDescription'));
    }
}