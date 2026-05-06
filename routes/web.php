<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\WebsiteSettingController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\MarqueeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InnerPageController;
use App\Http\Controllers\Admin\HomeAgencyImagesController;
use App\Http\Controllers\Admin\HomeBrandImagesController;
 use App\Http\Controllers\Admin\HomeProjectImagesController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ContactDetailsController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceSubCategoryController;
use App\Http\Controllers\Admin\FaqController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the teServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\PostsController;
use App\Http\Controllers\Frontend\InnerPagesController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PortfolioDetailsController;
use App\Http\Controllers\Frontend\SubCategoryController;
use App\Http\Controllers\Frontend\SeoController;





Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 Route::resource('faq', FaqController::class);
    // Post Category Routes
// routes/web.php
Route::resource('post-category', PostCategoryController::class);



    // Post Routes
    Route::resource('post', PostController::class);
 Route::resource('portfolio-category', PortfolioCategoryController::class);
  Route::resource('portfolio', PortfolioController::class);
    // Marquee Routes
Route::resource('marquee', MarqueeController::class);


    // Slider Routes
    Route::resource('slider', SliderController::class);
    Route::patch('/slider/{slider}/toggle-status', [SliderController::class, 'toggleStatus'])
        ->name('slider.toggleStatus');

    // Service Routes
    Route::resource('service', ServiceController::class);
    Route::post('service/toggle-status', [ServiceController::class, 'toggleStatus'])->name('service.toggleStatus');

 Route::resource('service-category', ServiceCategoryController::class);
    // Testimonial Routes
    Route::resource('testimonials', TestimonialController::class);

    Route::resource('inner-pages', InnerPageController::class);
    Route::resource('home-agency-images', HomeAgencyImagesController::class);
    Route::resource('home-brand-images', HomeBrandImagesController::class);
    Route::resource('home-project-images', HomeProjectImagesController::class);
     Route::get('/contact', [ContactDetailsController::class, 'index'])->name('contact.index');
    Route::delete('/contact/{id}', [ContactDetailsController::class, 'destroy'])->name('contact.destroy');
    Route::get('/settings', [WebsiteSettingController::class, 'index'])->name('website-settings');
Route::post('/settings/update', [WebsiteSettingController::class, 'update'])->name('settings.update');
 
Route::post('service-category/toggle-status', [ServiceCategoryController::class, 'toggleStatus'])->name('service-category.toggleStatus');


    Route::resource('service_sub_category', ServiceSubCategoryController::class);



});




Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
    Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');

   
Route::get('/contact-us', [ContactController::class, 'create'])->name('contact.create');  // For displaying the form
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');  // For handling form submission
// Route for w Page
Route::get('/reviews', [ReviewController::class, 'index'])->name('frontend.reviews');
Route::get('/privacy-policy', [ReviewController::class, 'privacyPolicy'])->name('privacy.policy');

 Route::get('portfolio', [PortfolioDetailsController::class, 'index'])->name('portfolio.details');
Route::get('/services', [ServicesController::class, 'index'])->name('frontend.services');
Route::get('/service/{slug}', function ($slug) {
    $slug_array = [
        'online-reputation-management'=>'Online-Reputation-Management-Company-gurgaon',
        'healthcare-marketing'=>'healthcare-digital-marketing-agency-gurgaon-india',
        'software-testing'=>'software-testing-services-in-gurgaon',
        'full-stack-development'=>'full-stack-development-company-gurgaon',
    ];
    if(!empty($slug_array[$slug])){
        $slug = $slug_array[$slug];
    }
    return redirect()->route('slug.show', ['slug' => $slug]);
});
Route::get('/inner-page/{slug}', function ($slug) {
    $slug_array = [
        'image-submission-sites-list'=>'image-submission-sites-list-2025',
        'profile-creation-sites-list'=>'profile-creation-sites-list-2025',
        'top-social-bookmarking-sites-list'=>'Best-social-bookmarking-sites-list-2025',
        'profile-creation-sites-list'=>'profile-creation-sites-list-2025',
    ];
    if(!empty($slug_array[$slug])){
        $slug = $slug_array[$slug];
    }
    return redirect()->route('slug.show', ['slug' => $slug]);
});

Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');

Route::get('/write-for-us', [PostsController::class, 'writeForUs'])->name('write-for-us.write-for-us');
Route::get('/seo-service-india', [SeoController::class, 'india'])->name('frontend.seo.index');
Route::get('/seo-service-mumbai', [SeoController::class, 'mumbai'])->name('frontend.seo.mumbai');
Route::get('/seo-service-chandigarh', [SeoController::class, 'chandigarh'])->name('frontend.seo.chandigarh');

Route::get('/seo-service-mohali', [SeoController::class, 'mohali'])->name('frontend.seo.mohali');
Route::get('/seo-service-delhi', [SeoController::class, 'delhi'])->name('frontend.seo.delhi');
Route::get('/top-seo-services-company-noida', [SeoController::class, 'noida'])->name('frontend.seo.noida');
Route::get('/seo-services-panchkula', [SeoController::class, 'panchkula'])->name('frontend.seo.panchkula');
Route::get('/best-seo-services-in-pune', [SeoController::class, 'pune'])->name('frontend.seo.pune');
 
Route::get('/seo-services-bangalore', [SeoController::class, 'bangalore'])->name('frontend.seo.bangalore');
Route::get('/seo-services-hyderabad', [SeoController::class, 'hyderabad'])->name('frontend.seo.hyderabad');
  // ✅ Combined slug route
    Route::get('/{slug}', function ($slug) {
        $slug_array = [
            'healthcare-seo'=>'healthcare-digital-marketing-agency-gurgaon-india',
            'seo'=>'seo-company-in-gurgaon',
            'dental-marketing'=>'healthcare-digital-marketing-agency-gurgaon-india',
            'profile-creation-sites-list'=>'profile-creation-sites-list-2025',
            'seo-fo-healthcare'=>'healthcare-digital-marketing-agency-gurgaon-india',
            'google-analytics-certification-exam-questions-and-answers'=>'home',
            // 'healthcare-digital-marketing-agency-gurgaon-india'=>'software-testing-services-in-gurgaon',
            'hotel-marketing'=>'hotel-marketing-agency-gurgaon',
            'travel-seo'=>'travel-marketing-agency-gurgaon-india',
            'software-testing'=>'software-testing-services-in-gurgaon',
         ];
        if(!empty($slug_array[$slug])){
            $slug = $slug_array[$slug];
            if($slug=='home'){
                return redirect()->route('frontend.home');
            }
        }
        // ✅ Check if slug is a Service
        $service = \App\Models\Service::where('slug', $slug)->first();
        if ($service) {
            return app(ServicesController::class)->show($slug);
        }
        
          // ✅ Check if slug is a Subcategory
    $subcategory = \App\Models\ServiceSubCategory::where('slug', $slug)->first();
    if ($subcategory) {
        return app(SubCategoryController::class)->show($slug);
    }

        // ✅ Check if slug is an Inner Page
        $innerPage = \App\Models\InnerPage::where('slug', $slug)->first();
        if ($innerPage) {
            return app(InnerPagesController::class)->show($slug);
        }

        // ✅ Check if slug is a Post
        $post = \App\Models\Post::where('slug', $slug)->first();
        if ($post) {
            return app(PostsController::class)->show($slug);
        }

        // ✅ 404 if no match
        abort(404);
        
    })->where('slug', '[a-zA-Z0-9-_]+')->name('slug.show');

});

Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');
    
    if (file_exists($path)) {
        return Response::file($path);
    }
    
    abort(404);
});

// web.php
Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow: /admin\n...", 200)
        ->header('Content-Type', 'text/plain');
});






