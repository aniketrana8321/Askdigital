@include('front-end.header')

<!--body content start-->

<div class="page-content">


<!--banner start-->

<section class="banner-text banner-two banner2-video"  style="padding: 30px;">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="banner-two-heading-first">
          <h1>Where Creativity </h1>
        </div>
        <div class="banner-two-heading-second">
          <div class="banner-two-video">
            <video autoplay="" loop="" muted="" playsinline="">
              <source src="{{ asset('front-end/images/banner-video.mp4') }}" type="video/mp4">
            </video>
          </div>
          <h1>Meets Conversion</h1>
        </div>
        <div class="banner-two-btm">
          <div class="row">
            <div class="col-lg-6">
              <h4>Design, strategy, and performance — all in one place.</h4>
              <p>At ASK Digital Agency, we blend bold creativity with smart digital strategies to drive real business results. From eye-catching designs to performance-driven marketing campaigns, we help brands grow, engage, and convert. Whether you're building your online presence from scratch or scaling your digital reach, we bring everything you need — all under one roof.</p>
              <a href="https://askdigitalagency.com/contact-us" class="themeht-btn white-btn">
                <span class="btn-icon1">
                  <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                  </svg>
                </span>
                <span class="btn-text">Contact Us</span>
                <span class="btn-icon2">
                  <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                  </svg>
                </span>
              </a>
            </div>
            <div class="col-lg-6 mt-6 mt-lg-0">
              <div class="text-lg-end">
                <div class="round-text">
                  <svg class="round-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 180 180" enable-background="new 0 0 180 180" xml:space="preserve">
                    <defs>
                      <path id="circlePath" d="M 90, 90 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "></path>
                    </defs>
                    <circle cx="90" cy="90" r="75" fill="none"></circle>
                    <g>
                      <use xlink:href="#circlePath" fill="none"></use>
                      <text>
                        <textPath xlink:href="#circlePath">* AGENCY * MARKETING * ANALYSIS * GROWTH</textPath>
                      </text>
                    </g>
                  </svg>
                  <div class="text-btn-icon">
                    <i aria-hidden="true" class="flaticon flaticon-brand-image-1"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <video class="html5-video" autoplay="" muted="" playsinline="" loop="" src="https://wp.themeht.com/brandx-video.mp4"></video>
</section>

<!--banner end-->


<!--service start-->

<!-- Services Start -->
@section('content')
<section>
  <div class="container">
    <div class="row align-items-end mb-8">
      <div class="col-lg-6 col-md-12">
        <div class="theme-title style-1">
          <div class="ht-subtitle">
            <h6>Our Services</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style fw-semibold">Explore Our Standout Features Services</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <a href="#" class="rounded-button ms-auto">
          <span>
            <span>View All Services</span>
          </span>
        </a>
      </div>
    </div>
    <div class="row">
      @foreach($recent_services as $service)
        <div class="col-lg-3 col-md-6 @if(!$loop->first) mt-6 @if($loop->index == 1) mt-md-0 @elseif($loop->index > 1) mt-lg-0 @endif @endif">
          <div class="service-item style-1 @if($loop->first) active @endif">
            <div class="service-desc">
              <div class="service-icon">
                <img src="{{ asset('storage/' . $service->banner) }}" alt="{{ $service->name }}" class="img-fluid" style="width: 60px; height: 60px; object-fit: cover;">
              </div>
              <div class="service-title">
                <h4>
                  <a href="{{ route('slug.show', $service->slug) }}">{{ \Illuminate\Support\Str::words($service->name, 2, '...') }}</a>
                </h4>
              </div>
              <p>{{ \Illuminate\Support\Str::words($service->short_description, 13, '...') }}</p>
              <a class="text-btn-wrap" href="{{ route('slug.show', $service->slug) }}">
                <span>Read More</span>
                <div class="btn-icon-wrap">
                  <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                  </svg>
                </div>
              </a>
            </div>
            <div class="service-linear">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


<!--service end-->


<!--about start-->

<section class="pt-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <img class="img-fluid rounded" src="{{ asset('front-end/images/about/about01.jpg') }}" alt="">
      </div>
      <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
        <div class="themeht-anim-heading">
          <h2 class="themeht-anim-text">We Are Your Full-Service Digital Marketing Agency</h2>
        </div>
        <p class="my-5">Delivering ideas that spark engagement and strategies that drive success.
Based in Gurugram "India", ASK Digital Agency blends creativity, 
 &amp; data, and technology to build powerful brand experiences. From SEO and social media to design and development — we turn your digital goals into measurable results.</p>
        <div class="featured-item style-3 border-bottom border-light pb-4 mb-4">
          <div class="featured-icon">
            <i class="flaticon flaticon-check-mark-2"></i>
          </div>
          <div class="featured-desc">
            <div class="featured-title">
              <h4>Campaigns that captivate</h4>
            </div>
          </div>
        </div>
        <div class="featured-item style-3">
          <div class="featured-icon">
            <i class="flaticon flaticon-check-mark-2"></i>
          </div>
          <div class="featured-desc">
            <div class="featured-title">
              <h4>Creativity that converts</h4>
            </div>
          </div>
        </div>
        <a href="#" class="themeht-btn primary-btn mt-6">
          <span class="btn-icon1">
            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
            </svg>
          </span>
          <span class="btn-text">Learn More</span>
          <span class="btn-icon2">
            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--counter start-->

<section class="white-bg clip-section p-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12">
        <div class="theme-title style-1">
          <div class="ht-subtitle">
            <h6>About Us</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style"></h2>
        </div>
      </div>
      <div class="col-lg-7 col-md-12">
       <div class="text-black">
    <h3  class="text-black">At ASK Digital Agency, we are more than just marketers — we are innovators, storytellers, and growth partners.</h3>

    <p>As a leading SEO company in Gurugram, we specialize in crafting powerful digital strategies, stunning visuals, and performance-driven campaigns that help brands shine in competitive markets.</p>

    <p>Our creative team is dedicated to delivering intelligent design, smart development, and marketing solutions that connect brands with the right audience. From SEO and social media to web design and branding, we combine creativity with strategy to fuel measurable growth.</p>

    <p>We don’t just build websites or run ads — we build brands that captivate, convert, and grow.</p>
</div>

      </div>
    </div>
    <div class="row mt-10">
      <div class="col-lg-4 col-md-12">
        <div class="counter counter-border1">
          <div class="counter-desc">
            <div class="counter-num">
              <span class="count-number" data-count="8"></span>
              <span class="counter-suffix"> + </span>
            </div>
            <h5>Year In Design</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="counter counter-border2">
          <div class="counter-desc">
            <div class="counter-num">
              <span class="count-number" data-count="120"></span>
              <span class="counter-suffix"> + </span>
            </div>
            <h5>Happy Client</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="counter counter-border3">
          <div class="counter-desc">
            <div class="counter-num">
              <span class="count-number" data-count="250"></span>
              <span class="counter-suffix"> + </span>
            </div>
            <h5>Work Done</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--counter end-->


<!-- Portfolio Section -->
<section class="portfolio-section">
  <div class="container">
    <div class="row justify-content-center mb-6">
      <div class="col-xl-6 col-lg-8 col-md-12">
        <div class="theme-title style-1 text-center">
          <div class="ht-subtitle">
            <h6>Portfolio</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style">
            Our user-centered design encourages productivity.
          </h2>
        </div>
      </div>
    </div>

    <div class="portfolio-slider-wrap">
      <div class="swiper portfolio-swiper">
       <div class="swiper-wrapper">
  @foreach ($homeProjectImages as $image)
    <div class="swiper-slide">
      <div class="portfolio-item">
        <div class="portfolio-image">
          <img class="img-fluid" src="{{ asset('storage/' . $image->photo) }}" alt="Project Image">
        </div>
      </div>
    </div>
  @endforeach

  {{-- duplicate slides for smooth infinite loop --}}
  @foreach ($homeProjectImages as $image)
    <div class="swiper-slide">
      <div class="portfolio-item">
        <div class="portfolio-image">
          <img class="img-fluid" src="{{ asset('storage/' . $image->photo) }}" alt="Project Image">
        </div>
      </div>
    </div>
  @endforeach
</div>

        <!-- arrows inside swiper -->
        <button class="portfolio-nav portfolio-prev" type="button">←</button>
        <button class="portfolio-nav portfolio-next" type="button">→</button>

        <!-- dots -->
        <div id="portfolio-pagination" class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>

/*insta section*/ 
<section class="portfolio-section">
  <div class="container">
   <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Ask Digital Agency |SEO &amp; D2C Growth (@askdigitalagency)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Ask Digital Agency |SEO &amp; D2C Growth (@askdigitalagency)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DILxaTLps9-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Ask Digital Agency |SEO &amp; D2C Growth (@askdigitalagency)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>

    
  </div>
</section>




<!--portfolio end-->
<section class="py-5 text-center" style="background-color: #1a1a1a;">
  <div class="container">
    <div class="row justify-content-center">
      @foreach($homeAgencyImages as $agencyImage)
        <div class="col-12 col-sm-6 col-md-4 mb-4">
          <div class="border rounded shadow-sm p-3 bg-dark">
            <div class="mb-2 text-warning">⭐⭐⭐⭐⭐</div>
            
            @if($agencyImage->link)
              <a href="{{ $agencyImage->link }}" target="_blank">
                <img src="{{ asset('storage/' . $agencyImage->photo) }}" class="img-fluid mx-auto d-block" alt="Brand Logo">
              </a>
            @else
              <img src="{{ asset('storage/' . $agencyImage->photo) }}" class="img-fluid mx-auto d-block" alt="Brand Logo">
            @endif

          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>





<!--marquee start-->

<section class="p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="marquee-wrap style1">
          <div class="marquee-inner">
            <div class="marquee-text">
              <span>Creative Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Digital Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Business Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Creative Solutions</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Branding Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Creative Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Digital Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Business Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="pt-3 pb-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="marquee-wrap style2">
          <div class="marquee-inner">
            <div class="marquee-text">
              <span>Creative</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Portfolio</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Digital</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Ui Design</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Branding</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Marketing</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Business</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>SEO</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Technology</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Creative Digital Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Marketing Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
            <div class="marquee-text">
              <span>Digital Marketing Agency</span>
              <i class="flaticon flaticon-asterisk-1"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--marquee end-->


<!--feature start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-12 pe-lg-10">
        <div class="themeht-anim-heading">
          <h2 class="themeht-anim-text">Innovative Digital Marketing for Next-Level Business Success</h2>
        </div>
        <h3 class="ht-lg-count my-4">
          <span>23</span>M
        </h3>
        <p class=" text-grey">As a tight-knit team of experts, we create memorable and digital experiences...</p>
      </div>
   <div class="col-lg-8 col-md-12 mt-6 mt-lg-0 ps-lg-10">
    <div class="row">
        @foreach ($random_services as $service)
            <div class="col-md-6 mt-6">
                <div class="featured-item style-1">
                    <div class="featured-desc">
                        <div class="featured-title">
                            <h4>{{ \Illuminate\Support\Str::words($service->name, 2, '...') }}</h4>
                        </div>
                        <p>{{ \Illuminate\Support\Str::words($service->short_description, 13, '...') }}</p>
                    </div>
                    <div class="featured-btm">
                        <div class="featured-icon">
                            <img src="{{ asset('storage/' . $service->photo) }}" alt="{{ $service->title }}" style="max-width: 60px;">
                        </div>
                        <a class="text-btn-wrap" href="{{ route('slug.show', $service->slug) }}">
                            <span>Read More</span>
                            <div class="btn-icon-wrap">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z">
                                    </path>
                                </svg>
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z">
                                    </path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    

        </div>
      </div>
    </div>
  </div>
</section>

<!--feature end-->



<!--team start-->

<section class="white-bg clip-section p-120 mt-10">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-xl-7 col-lg-8 col-md-12">
        <div class="theme-title style-1 text-black text-center">
          <div class="ht-subtitle">
            <h6>Our expertise</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style fw-semibold"> Meet our team and get more experience about world!</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="swiper team-swiper">
          <div class="swiper-wrapper">
    @foreach($team_members as $member)
        <div class="swiper-slide">
            <div class="team-member">
                <style>
.team-images img {
    height: 300px;
    width: 100%;
    object-fit: cover;
    border-radius: 8px;
}
</style>

                <div class="team-images">
                     <img class="img-fluid" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                </div>
                <div class="team-desc">
                    <h4><a href="#">{{ $member->name }}</a></h4>
                    <span>{{ $member->designation }}</span>
                    <ul class="team-social-icon list-unstyled mb-0">
                        @if(!empty($member->facebook))
                            <li><a href="{{ $member->facebook }}"><i class="flaticon flaticon-facebook-app-symbol"></i></a></li>
                        @endif
                        @if(!empty($member->twitter))
                            <li><a href="{{ $member->twitter }}"><i class="flaticon flaticon-twitter"></i></a></li>
                        @endif
                        @if(!empty($member->linkedin))
                            <li><a href="{{ $member->linkedin }}"><i class="flaticon flaticon-linkedin"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>

        </div>
      </div>
    </div>
  </div>
  <div class="container mt-8">
    <div class="row align-items-end mb-5">
        <div class="col-lg-7 col-md-12">
            <div class="theme-title style-1 text-black">
                <h2 class="text-anime-style fw-semibold">Get to Know the Experts Behind Your Brand’s Success</h2>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 text-lg-end mt-4 mt-lg-0">
            <a href="https://askdigitalagency.com/contact-us" class="themeht-btn primary-btn">
                <span class="btn-text">LET'S WORK TOGETHER</span>
                <span class="btn-icon2">
                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z" fill="currentColor"></path>
                    </svg>
                </span>
            </a>
        </div>
    </div>

    <div class="row mt-8">
        <div class="col">
            <div class="marquee-wrap marquee-client py-4">
                <div class="marquee-inner d-flex align-items-center justify-content-between">
                    @foreach ($homeBrandImages as $image)
                        <div class="logo-box">
                            <img class="client-logo-vibrant" src="{{ asset('storage/' . $image->photo) }}" alt="Client Logo">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--team end-->


<!--testimonial start-->
<section data-bg-color="#080101">
  <div class="container">
    <div class="row mb-6">
      <div class="col">
        <div class="theme-title style-2">
          <h6>Testimonial</h6>
          <h2 class="text-anime-style">Feedback</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="marquee-wrap testimonial-marquee">
          <div class="marquee-inner">
            
            <div class="testimonial style-1">
              <div class="testimonial-author">
                <div class="testimonial-video">
                  <iframe width="100%" height="200" src="https://www.youtube.com/embed/FfRoCBwkAMk" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            
            <div class="testimonial style-1">
              <div class="testimonial-author">
                <div class="testimonial-video">
                  <iframe width="100%" height="200" src="https://www.youtube.com/embed/vto786dc6eo" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            
            <div class="testimonial style-1">
              <div class="testimonial-author">
                <div class="testimonial-video">
                  <iframe width="100%" height="200" src="https://www.youtube.com/embed/YMkYFz_LYvQ" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            
            <div class="testimonial style-1">
              <div class="testimonial-author">
                <div class="testimonial-video">
                  <iframe width="100%" height="200" src="https://www.youtube.com/embed/7GoP7BYOwKA" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            
            <div class="testimonial style-1">
              <div class="testimonial-author">
                <div class="testimonial-video">
                  <iframe width="100%" height="200" src="https://www.youtube.com/embed/6VU4Kgfhxys" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            
            <div class="testimonial style-1">
              <div class="testimonial-author">
                <div class="testimonial-video">
                  <iframe width="100%" height="200" src="https://www.youtube.com/embed/HFgL4hbMKLg" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--testimonial end-->
<!--blog start-->
<section class="white-bg">
  <div class="container">
    <div class="row align-items-end mb-8">
      <div class="col-lg-6 col-md-12">
        <div class="theme-title style-1 text-black">
          <div class="ht-subtitle">
            <h6>Latest News</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style fw-semibold">Stay Ahead with Expert Tips on SEO, Marketing & More</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <a href="https://askdigitalagency.com/blog" class="themeht-btn dark-btn">
          <span class="btn-icon1"><!-- SVG icon --></span>
          <span class="btn-text">Read All News</span>
          <span class="btn-icon2"><!-- SVG icon --></span>
        </a>
      </div>
    </div>

    <div class="row">
      @foreach ($latest_posts as $post)
        <div class="col-lg-4 col-md-12 {{ !$loop->first ? 'mt-6 mt-lg-0' : '' }}">
          <div class="post-card style-2">
            <div class="post-image">
              <img class="img-fluid w-100" src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}">
            </div>
            <div class="post-desc">
              <div class="post-title">
                <h4>
                  <a href="{{ route('slug.show', $post->slug) }}">{{ $post->title }}</a>
                </h4>
              </div>
              <ul class="list-inline post-bottom mb-0">
                <li class="list-inline-item">
                  <span class="cat-links">
                    <a href="https://askdigitalagency.com/blog" rel="category tag">Blog</a>
                  </span>
                </li>
                <li class="list-inline-item">
                  <span class="posted-on">
                    <a href="{{ route('slug.show', $post->slug) }}" rel="bookmark">
                      {{ date('F d, Y', strtotime($post->created_at)) }}
                    </a>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!--blog end-->


</div>

<!--body content end--> 


   
@include('front-end.footer')