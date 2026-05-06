@include('front-end.header')


<!--page title start-->

<section class="page-title">
 <div class="page-title-bg" data-bg-img="{{ asset('storage/'.$service->photo) }}"></div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="theme-breadcrumb-box">
          <h1>{{ $service->name }}</h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <i class="bi bi-house-door me-1"></i>Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">{{ $service->name }}</a>
              </li>
              <!--<li class="breadcrumb-item active" aria-current="page">Service Details</li>-->
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!--page title end-->



<!-- Body content start -->
<div class="page-content" style="
    margin: 36px;
">
<section class="position-relative text-light" style="overflow: hidden;">

  <style>
    .MsoNormal span {
      color: #fff !important;
    }
  </style>

  <!-- Video background -->
  <!--<video autoplay muted loop playsinline -->
  <!--       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">-->
  <!--  <source src="https://wp.themeht.com/brandx-video1.mp4" type="video/mp4">-->
  <!--  Your browser does not support the video tag.-->
  <!--</video>-->

  <!-- Dark overlay -->
  <div style="position: absolute; top:0; left:0; right:0; bottom:0; background-color:rgba(0, 0, 0, 0.6); z-index:1;"></div>

  <!-- Content container -->
  <div class="container position-relative py-5" style="z-index: 2;">
    <div class="row mb-5">
      <div class="col">
        <p class="lead MsoNormal" style="font-size: 1.2rem; line-height: 1.8;">
          {!! $service->description !!}
        </p>
      </div>
    </div>
  </div>
</section>

<!--faq start-->
@if($service->faqs->count() > 0)
<!--faq start-->
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="theme-title style-1 mb-6 text-center">
          <div class="ht-subtitle">
            <h6>F.A.Q.</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style">Most Trending & Popular Question</h2>
        </div>

        <div class="accordion" id="accordion">
          @foreach($service->faqs as $key => $faq)
          <div class="accordion-item">
            <h3 class="accordion-header" id="heading{{ $key }}">
              <button class="accordion-button shadow-none mb-0 bg-transparent {{ $key != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $key }}">
                {{ $key+1 }}. {{ $faq->question }}
              </button>
            </h3>
            <div id="collapse{{ $key }}" class="accordion-collapse border-0 collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordion">
              <div class="accordion-body">
                {{ $faq->answer }}
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>
<!--faq end-->
@endif


<!--faq end-->
</div>




@include('front-end.footer')
