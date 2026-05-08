@include('front-end.header')

<!-- Page Title Start -->
<section class="page-title">
  <div class="page-title-bg" data-bg-img="{{ asset('storage/'.$innerPage->photo) }}"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="theme-breadcrumb-box">
          <h1>{{ $innerPage->title }}</h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <i class="bi bi-house-door me-1"></i>Home
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{ $innerPage->title }}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Page Title End -->


<section class="post-single-page blog-detail-modern">
  <div class="container">
    <div class="row g-5">

      <!-- Blog Content -->
      <div class="col-lg-8 col-md-12">
        <article class="blog-modern-card">

          <div class="blog-featured-img">
            <img src="{{ asset('storage/' . $innerPage->photo) }}" alt="{{ $innerPage->title }}">
          </div>

          <div class="blog-modern-body">

            <ul class="blog-meta-pills">
              <li><i class="bi bi-person"></i> Admin</li>
              <li><i class="bi bi-calendar3"></i> {{ $innerPage->created_at->format('F d, Y') }}</li>
              <li><i class="bi bi-folder2-open"></i> Static Info</li>
              <li><i class="bi bi-tag"></i> Static Category</li>
            </ul>

            <h1 class="blog-main-title">{{ $innerPage->title }}</h1>

            <div class="green-title-line"></div>

            <div class="blog-content-area">
              {!! $innerPage->description !!}
            </div>

            @if(!empty($innerPage->quote))
            <blockquote class="blog-highlight-quote">
              <i class="bi bi-quote"></i>
              <p>“{{ $innerPage->quote }}”</p>
              <span>{{ $innerPage->quote_author ?? 'Unknown' }}</span>
            </blockquote>
            @endif

            @if(!empty($innerPage->subtitle))
            <div class="blog-info-box">
              <h3>{{ $innerPage->subtitle }}</h3>
              <p>{{ $innerPage->extra_content ?? '' }}</p>
            </div>
            @endif

          </div>
        </article>
      </div>


      <!-- Sidebar -->
      <div class="col-lg-4 col-md-12">
        <aside class="blog-modern-sidebar">

          <!-- Search -->
          <div class="modern-side-widget">
            <h5>Search</h5>
            <div class="side-title-line"></div>

            <form action="{{ url('search') }}" method="GET">
              <div class="modern-search-box">
                <input type="text" name="search_text" placeholder="Search articles...">
                <button type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>

          <!-- Latest Pages -->
          <div class="modern-side-widget">
            <h5>Latest Pages</h5>
            <div class="side-title-line"></div>

            <div class="latest-page-list">
              @foreach($latestPages as $latest)
              <a href="{{ url($latest->slug) }}" class="latest-page-item">
                <div class="latest-page-img">
                  <img src="{{ asset('storage/' . $latest->photo) }}" alt="{{ $latest->title }}">
                </div>

                <div class="latest-page-text">
                  <h6>{{ Str::limit($latest->title, 55) }}</h6>
                  <span>{{ $latest->created_at->format('F d, Y') }}</span>
                </div>

                <i class="bi bi-chevron-right latest-arrow"></i>
              </a>
              @endforeach
            </div>
          </div>

        </aside>
      </div>

    </div>
  </div>
</section>

@include('front-end.footer')