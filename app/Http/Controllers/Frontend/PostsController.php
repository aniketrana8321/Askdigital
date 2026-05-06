<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
 // Blog Listing with Category Filter
public function index(Request $request)
{
    $categories = PostCategory::all();
    $categorySlug = $request->get('category');

    $posts = Post::when($categorySlug, function ($query) use ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        })
        ->latest()
        ->paginate(6);

    // ✅ Fetch recent posts (e.g., last 5)
    $recent_posts = Post::latest()->take(5)->get();

    // ✅ Dynamic title setup
    if ($categorySlug) {
        $category = PostCategory::where('slug', $categorySlug)->first();
        $pageTitle = $category ? $category->name . ' Blogs ' : 'Blog ';
        $pageDescription = 'Read the latest blogs in ' . ($category ? $category->name : 'various categories') . ' and stay updated with trends.';
    } else {
        $pageTitle = 'Blogs';
        $pageDescription = 'Explore the latest blogs on digital marketing, web development, and more.';
    }

    return view('frontend.post-blog', compact('posts', 'categories', 'recent_posts', 'categorySlug', 'pageTitle', 'pageDescription'));
}


    public function writeForUs()
    {
        return view('frontend.write-for-us');
    }
    
    
   public function show($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();
    $latestPosts = Post::latest()->take(3)->get();
    $categories = PostCategory::all();

// ✅ Only use SEO fields (no slug fallback)
   $pageTitle = $post->seo_title ?? '';
    $pageDescription = $post->seo_meta_description ?? '';


    return view('frontend.blog-details', compact('post', 'latestPosts', 'categories', 'pageTitle', 'pageDescription'));
}

}