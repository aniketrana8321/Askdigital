@php
    $serviceCategories = App\Models\ServiceCategory::with(['services' => function ($query) {
        $query->where('status', 1);
    }])
    ->where('name', '!=', 'Industries')
    ->where('status', 1)
    ->get();
@endphp

<!DOCTYPE html>
<html  lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name='dmca-site-verification' content='VW52MEpxWkVlUUI1dzlqaDdqSXMyQlJrc0tnc0dWZStPeFFheUl3SSswaz01' />
    <title>{{ $pageTitle ?? 'Top Digital Marketing Agency in Gurgaon | SEO & Web Experts' }}</title>
    <meta name="description" content="{{ $pageDescription ?? 'Get expert SEO, social media, ads & website development with the best digital marketing agency in Gurgaon & Delhi NCR. Call us 8219941967.' }}">
  
     <link rel="canonical" href="{{ url()->current() }}">

   <!-- Favicon -->
@php
    $favicon = \App\Models\WebsiteSetting::first()->favicon ?? 'default-favicon.png';
@endphp
<link rel="icon" href="{{ asset('storage/' . $favicon) }}" type="image/x-icon">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('front-end/images/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/brandx-icon.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/base.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/shortcodes.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">

   
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "qum2bhcafg");
</script>
  <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-VBCXBCPQRY"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-VBCXBCPQRY'); </script>
  
  <script type="application/ld+json">
         {         
            "@context": "https://schema.org/",         
            "@type": "LocalBusiness",         
            "@id": "#LocalBusiness",         
            "url": "https://www.askdigitalagency.com",          
            "legalName": "",
            "name": "Ask Digital Agency ",
            "description": "ASK Digital Agency is a results-driven digital marketing firm specializing in SEO, SEM, social media management, content marketing, web design, and more. We help businesses enhance their online presence, attract high-quality leads, and drive measurable growth through strategic and data-backed digital solutions",
            "image": "https://scontent.fdel1-8.fna.fbcdn.net/v/t39.30808-6/472051748_122171985794274525_8885677288179939976_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=y9T5Je3CFiAQ7kNvgHJg3y2&_nc_oc=AdlPEjSJ6DfOMu1RG53rTE-YUgVcOGCiGymIQ9kPittrKEGPlJSqVScGgVQes0IVuFYwSHSoFwraMSla14AJ_4wD&_nc_zt=23&_nc_ht=scontent.fdel1-8.fna&_nc_gid=YHiohPyouHRZRK8EOsDR_A&oh=00_AYE9TzZ10EYtKHlJCc81eDbhn4Z5V9dbTpprlABQ6ZYZPg&oe=67E2B8B4",
            "logo": "https://scontent.fdel1-8.fna.fbcdn.net/v/t39.30808-6/472051748_122171985794274525_8885677288179939976_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=y9T5Je3CFiAQ7kNvgHJg3y2&_nc_oc=AdlPEjSJ6DfOMu1RG53rTE-YUgVcOGCiGymIQ9kPittrKEGPlJSqVScGgVQes0IVuFYwSHSoFwraMSla14AJ_4wD&_nc_zt=23&_nc_ht=scontent.fdel1-8.fna&_nc_gid=YHiohPyouHRZRK8EOsDR_A&oh=00_AYE9TzZ10EYtKHlJCc81eDbhn4Z5V9dbTpprlABQ6ZYZPg&oe=67E2B8B4",
            "telephone": "8219941967",
            "faxNumber": "",
            "email": "mailto:agency@askdigitalagency.com",
            "address": {             
              "@type": "PostalAddress",             
              "streetAddress": "Ss Omnia, Sector 86",             
              "addressLocality": "Gurugram",             
              "addressRegion": "Haryana",             
              "addressCountry": "india",             
              "postalCode": "122004"        
             }
          }
          
      </script>

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What services does ASk Digital Agency provide ?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Ask Digital Agency offers a wide range of digital marketing services, including SEO, SEM, social media management, content marketing, web design, and more. We specialize in creating customized strategies to help businesses thrive online"
    }
  },{
    "@type": "Question",
    "name": "What is SEO, and why is it crucial for businesses in India?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Search Engine Optimization (SEO) is a digital marketing strategy that helps businesses improve their online visibility by ranking higher in search engine results pages (SERPs). For Indian businesses, SEO is essential to compete in an increasingly digital marketplace and reach potential customers effectively."
    }
  },{
    "@type": "Question",
    "name": "How long does it take to see results from SEO efforts?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Typically, SEO results can take 4-6 months to become noticeable, with significant improvements often seen between 6-12 months. However, this timeline can vary depending on factors like competition, industry, and current website optimization."
    }
  },{
    "@type": "Question",
    "name": "What are the most important ranking factors for SEO in 2025",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Key ranking factors include high-quality content, website speed, mobile-friendliness, backlink quality, user experience, core web vitals, and relevant keywords. Local SEO factors are particularly important for businesses targeting Indian markets."
    }
  },{
    "@type": "Question",
    "name": "How do I choose the right keywords for my business?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Use keyword research tools, analyze search volume, understand user intent, consider long-tail keywords, and focus on keywords relevant to your specific Indian market and target audience."
    }
  },{
    "@type": "Question",
    "name": "What is local SEO, and why is it important for Indian businesses",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Local SEO helps businesses promote their products and services to local customers at the exact time they're looking for them. For Indian businesses, this means optimizing for local search results and Google My Business listings."
    }
  },{
    "@type": "Question",
    "name": "",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": ""
    }
  }]
}
</script>
  

</head>

<body>
  

<!-- preloader start -->

  <!--<div id="ht-preloader">-->
  <!--  <div class="loader clear-loader">-->
  <!--    <div class="loader-wrap-heading">-->
  <!--      <div class="load-text">-->
  <!--        <span>A</span>-->
  <!--        <span>S</span>-->
  <!--        <span>K</span>-->

  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->

<!-- preloader end -->


<!-- page wrapper start -->

<div class="page-wrapper">

<!--header start-->

<header id="site-header" class="header">
  <div id="header-wrap">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-xl">
            <!--<a class="navbar-brand logo" href="index#">-->
            <!--  <img class="img-fluid" src="images/logo.svg" alt="">-->
            <!--</a>-->
            @php
    use App\Models\WebsiteSetting;
    $settings = WebsiteSetting::first();
@endphp

<a class="navbar-brand logo" href="{{ url('/') }}">
    <img class="img-fluid" src="{{ asset('storage/' . ($settings->logo ?? 'default-logo.png')) }}" alt="Logo">
</a>

            <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
              </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <!-- Left nav -->
              <ul class="nav navbar-nav">
                   <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.about') }}">About us</a>
                </li>
                
<li class="nav-item dropdown mega-menu-main">
    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown">
        SERVICES
    </a>
    <div class="mega-menu-wrapper">
        <div class="mega-menu-content">
            @foreach($serviceCategories as $category)
                <div class="mega-category-column">
                    <!-- Black, Bold, Uppercase Heading -->
                    <h6 class="category-title">{{ strtoupper($category->name) }}</h6>
                    
                    <ul class="sub-service-list">
                        <!-- Only show Active services -->
                        @foreach($category->services->where('status', 1) as $service)
                            <li>
                                <a href="{{ url($service->slug) }}">
                                    {{ $service->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</li>


<!-- "Industries" Mega Menu -->
<li class="nav-item mega-menu-main">
    @php
        $industryCategory = App\Models\ServiceCategory::where('name', 'Industries')->first();
    @endphp

    @if($industryCategory)
        @php
            $allIndustries = $industryCategory->services()->where('status', 1)->orderBy('id', 'asc')->get();
            
            // MATH MAGIC: Count total items and divide by 3 (round up)
            $itemsPerColumn = ceil($allIndustries->count() / 3);
        @endphp

        @if($allIndustries->isNotEmpty())
            <a class="nav-link dropdown-toggle" href="#" id="industriesDropdown">
                {{ $industryCategory->name }}
            </a>
            
            <div class="mega-menu-wrapper">
                <div class="mega-menu-content industries-grid">
                    {{-- Now it uses our dynamic math instead of a hardcoded 8 --}}
                    @foreach($allIndustries->chunk($itemsPerColumn) as $column)
                        <div class="mega-category-column">
                            <ul class="sub-service-list">
                                @foreach($column as $industry)
                                    <li>
                                        <a href="{{ url($industry->slug) }}">
                                            {{ $industry->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @endif
</li>


                <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontend.reviews') }}">Testimonial</a>
                </li>
                <!--<li class="nav-item">-->
                <!--  <a class="nav-link" href="#">Blog</a>-->
                <!--</li>-->
                <!-- Home -->
                <!--<li class="nav-item dropdown">-->
                <!--  <a class="nav-link active dropdown-toggle" href="{{ url('/') }}" data-bs-toggle="dropdown">Home</a>-->
                  
                  <!--<ul class="dropdown-menu">-->
                  <!--  <li>-->
                  <!--    <a href="index#">Home 01</a>-->
                  <!--  </li>-->
                  <!--  <li>-->
                  <!--    <a href="index-2#">Home 02</a>-->
                  <!--  </li>-->
                  <!--  <li>-->
                  <!--    <a href="index-3#">Home 03</a>-->
                  <!--  </li>-->
                  <!--</ul>-->
                </li>
                <!--<li class="nav-item dropdown">-->
                <!--  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>-->
                <!--  <ul class="dropdown-menu">-->
                <!--    <li>-->
                <!--      <a href="about-us#">About Us</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="team#">Team</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="team-single#">Team Single</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="price-table#">Price Table</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="faq#">Faq</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="login#">Login</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="coming-soon#">Coming Soon</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="error-404#">Error 404</a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
                <!--<li class="nav-item dropdown">-->
                <!--  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>-->
                <!--  <ul class="dropdown-menu">-->
                <!--    <li>-->
                <!--      <a href="product-grid#">Product Grid</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="product-list#">Product List</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="product-single#">Product Single</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="product-cart#">Cart</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="product-checkout#">Checkout</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="order-complete#">Order Completed</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="forgot-password#">Forgot Password</a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
                <!--<li class="nav-item dropdown">-->
                <!--  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>-->
                <!--  <ul class="dropdown-menu">-->
                <!--    <li>-->
                <!--      <a href="services-one#">Service Style One</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="services-two#">Service Style Two</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="services-three#">Service Style Three</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="services-single#">Service Single</a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
                <!--<li class="nav-item dropdown">-->
                <!--  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Portfolio</a>-->
                <!--  <ul class="dropdown-menu">-->
                <!--    <li>-->
                <!--      <a href="portfolio-grid-2#">Portfolio Grid 2</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="portfolio-grid-3#">Portfolio Grid 3</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="portfolio-slider#">Portfolio Slider</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="portfolio-single#">Portfolio Single</a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
                <!--<li class="nav-item dropdown">-->
                <!--  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blogs</a>-->
                <!--  <ul class="dropdown-menu">-->
                <!--    <li>-->
                <!--      <a href="blog-left-sidebar#">Blog Left Sidebar</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="blog-right-sidebar#">Blog Right Sidebar</a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a href="blog-single#">Blog Single</a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
               <li class="nav-item">
    <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
</li>

              </ul>
            </div>
            <div class="header-number me-4">
              <i class="flaticon flaticon-telephone"></i>
              <div>
                <span>Have Question:</span>
                <a href="tel:+91 8219941967">+91 8219941967</a>
              </div>
            </div>
            <a class="themeht-btn primary-btn" href="https://drive.google.com/file/d/1Twk7RI1aglc5fZZQCGOq0eg2OWbk0c-4/view?usp=drive_link">
              <span class="btn-icon1">
                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                </svg>
              </span>
              <span class="btn-text">Download</span>
              <span class="btn-icon2">
                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                </svg>
              </span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->