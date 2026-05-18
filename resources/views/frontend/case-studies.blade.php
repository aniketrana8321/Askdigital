@php
$caseStudies = [
    [
        'title' => 'QEP UK',
        'image' => 'front-end/images/case-study/case-1.jpg',
        'tags' => ['Web Design', 'Web Development'],
    ],
    [
        'title' => 'Wirelingo',
        'image' => 'front-end/images/case-study/case-2.jpg',
        'tags' => ['App', 'Development'],
    ],
    [
        'title' => 'Finer Aviation',
        'image' => 'front-end/images/case-study/case-3.jpg',
        'tags' => ['Website Design', 'Branding'],
    ],
    [
        'title' => 'Clarks',
        'image' => 'front-end/images/case-study/case-4.jpg',
        'tags' => ['Digital Gift Card', 'UI', 'UX'],
    ],
    [
        'title' => 'The Mobile Project',
        'image' => 'front-end/images/case-study/case-5.jpg',
        'tags' => ['Logo', 'Website Design', 'UX'],
    ],
    [
        'title' => 'Goodman Resources',
        'image' => 'front-end/images/case-study/case-6.jpg',
        'tags' => ['Website Design', 'PPC'],
    ],
];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Studies</title>

  <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('front-end/css/case-studies.css') }}">
</head>

<body>

<main class="case-study-page">

  <!-- Hero Section -->
  <section class="case-hero">
    <div class="container">

      <div class="review-pill">
        <span>★★★★★</span>
        <strong>Based On 150+ Reviews</strong>
        <small>Clutch · Google · Meta</small>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-7">
          <h1>
            Delivering Amazing <br>
            Results for Remarkable <br>
            Businesses
          </h1>
        </div>

        <div class="col-lg-5">
          <p>
            See how we translate ideas into results. Real clients, real metrics,
            and smart digital growth powered by strategy, creativity, and data.
          </p>

          <div class="hero-btns">
            <a href="#" class="btn-green">Get In Touch</a>
            <a href="#" class="btn-outline-green">Learn More</a>
          </div>
        </div>
      </div>

      <div class="case-tabs">
        <button class="active">All Case Studies</button>
        <button>Website & Apps</button>
        <button>Creative & Branding</button>
        <button>SEO</button>
        <button>PPC & Social Ads</button>
        <button>Digital 360</button>
        <button>AI Upgrade</button>
      </div>

    </div>
  </section>


  <!-- Case Study Grid -->
  <section class="case-grid-section">
    <div class="container">

      <div class="case-grid">
        @foreach($caseStudies as $case)
        <div class="case-card">
          <div class="case-card-top">
            <h3>{{ $case['title'] }}</h3>

            <div class="case-tags">
              @foreach($case['tags'] as $tag)
                <span>{{ $tag }}</span>
              @endforeach
            </div>
          </div>

          <div class="case-img">
            <img src="{{ asset($case['image']) }}" alt="{{ $case['title'] }}">
          </div>

          <div class="case-overlay">
            <a href="#">View Case Study <i class="bi bi-arrow-up-right"></i></a>
          </div>
        </div>
        @endforeach
      </div>

      <div class="text-center mt-5">
        <a href="#" class="btn-green">View More Projects</a>
      </div>

    </div>
  </section>


  <!-- Testimonial Section -->
  <section class="case-testimonial">
    <div class="container">
      <div class="testimonial-box">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <h2>
              What Our <br>
              Clients Say <br>
              About Us
            </h2>
          </div>

          <div class="col-lg-7">
            <div class="testimonial-content">
              <p>
                “The team delivered a polished website and digital strategy that
                helped us improve visibility, conversions, and brand trust.”
              </p>
              <span>★★★★★</span>
              <strong>Client Review</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Stats Section -->
  <section class="case-stats">
    <div class="container">
      <h2>Statistics that Define Our Work</h2>

      <div class="stats-grid">
        <div class="stat-card">
          <h3>1.8B+</h3>
          <p>Impressions generated through campaigns</p>
        </div>

        <div class="stat-card">
          <h3>900K+</h3>
          <p>Conversions across SEO, PPC & Social Ads</p>
        </div>

        <div class="stat-card">
          <h3>7.4x</h3>
          <p>Average ROAS across growth campaigns</p>
        </div>
      </div>
    </div>
  </section>

</main>

</body>
</html>