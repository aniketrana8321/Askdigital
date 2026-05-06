<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marquee;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Post;
use App\Models\HomeAgencyImage;
use App\Models\HomeBrandImage;
use App\Models\HomeProjectImage;
use App\Models\Testimonial;

class HomeController extends Controller
{
    

public function index()
{
    $sliders = Slider::where('status', 1)->get();
    $marquees = Marquee::where('status', 1)->get();
$homeProjectImages = HomeProjectImage::all();  
    $homeAgencyImages = HomeAgencyImage::all(); 
 $homeBrandImages = HomeBrandImage::all();  
     $random_services = Service::whereIn('id', [10, 15, 18, 42])
                                ->orderBy('created_at', 'desc')
                                ->get();
    // Recently added services
     $recent_services = Service::whereIn('id', [6, 7, 17, 12])->orderBy('created_at', 'desc')->get();

   $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
 $team_members = Testimonial::all(); // fetch team members

    return view('frontend.index', compact('sliders', 'marquees', 'recent_services', 'random_services', 'latest_posts', 'homeAgencyImages', 'homeBrandImages', 'homeProjectImages','team_members'));
}

}

