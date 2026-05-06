<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\HomeBrandImage;
use App\Models\Post;
use App\Models\Testimonial;

class AboutController extends Controller
{
    public function index()
    {
        // Fetch recent services (e.g., latest 4)
       $recent_services = Service::whereIn('id', [6, 7, 17, 12])
    ->orderBy('created_at', 'desc')
    ->get();
    $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
$team_members = Testimonial::all(); // fetch team members

 $homeBrandImages = HomeBrandImage::all(); 
        // ✅ Static SEO meta
        $pageTitle = 'About Us - Learn More About Our Company';
        $pageDescription = 'Discover who we are, our mission, vision, and the values that drive us. Learn more about our team and the services we offer.';

        // Pass data to view
        return view('frontend.about', compact('recent_services', 'pageTitle', 'pageDescription','homeBrandImages','latest_posts','team_members'));
    }
}
