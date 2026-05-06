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
              <li class="breadcrumb-item active" aria-current="page">{{ $innerPage->title }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Page Title End -->

<section class="post-single-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="post-card">
          <div class="post-image">
            <img class="img-fluid" src="{{ asset('storage/' . $innerPage->photo) }}" alt="{{ $innerPage->title }}">
          </div>
          <div class="post-desc">
            <ul class="list-inline post-bottom">
              <li class="list-inline-item">Admin</li>
              <li class="list-inline-item">{{ $innerPage->created_at->format('F d, Y') }}</li>
              <li class="list-inline-item">Static Info</li>
              <li class="list-inline-item">Static Category</li>
            </ul>
            <p>{!! $innerPage->description !!}</p>

            @if(!empty($innerPage->quote))
            <blockquote class="theme-blockquote my-5">
              <p>“{{ $innerPage->quote }}”</p>
              <span>{{ $innerPage->quote_author ?? 'Unknown' }}</span>
            </blockquote>
            @endif

            @if(!empty($innerPage->subtitle))
            <h3>{{ $innerPage->subtitle }}</h3>
            <p>{{ $innerPage->extra_content ?? '' }}</p>
            @endif
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4 col-md-12 mt-7 mt-lg-0 ps-lg-10">
        <div class="themeht-sidebar">
          <div class="widget">
            <div class="widget-search">
              <form action="{{ url('search') }}" method="GET">
                <div class="widget-searchbox">
                  <input type="text" name="search_text" placeholder="Search Here..." class="form-control">
                  <button type="submit" class="search-btn"><i class="bi bi-search"></i></button>
                </div>
              </form>
            </div>
          </div>

          <div class="widget">
            <h5 class="widget-title">Latest Pages</h5>
            <div class="recent-post">
              <ul class="list-unstyled">
                @foreach($latestPages as $latest)
                <li class="mb-3">
                  <div class="recent-post-thumb">
                    <img class="img-fluid" src="{{ asset('storage/' . $latest->photo) }}" alt="{{ $latest->title }}">
                  </div>
                  <div class="recent-post-desc">
                    <a href="{{ url($latest->slug) }}">{{ $latest->title }}</a>
                    <div class="post-date-small">{{ $latest->created_at->format('F d, Y') }}</div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div>



         
        </div>
      </div>
      <!-- Sidebar End -->

    </div>
  </div>
</section>

@include('front-end.footer')
