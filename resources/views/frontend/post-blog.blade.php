@include('front-end.header')

<!--page title start-->

<section class="page-title">
  <div class="page-title-bg" data-bg-img="{{ asset('front-end/images/bg/bg08.jpg') }}"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="theme-breadcrumb-box">
          <h1>Our Blog</h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <i class="bi bi-house-door me-1"></i>Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Blogs</a>
              </li>
              <!--<li class="breadcrumb-item active" aria-current="page">Blog Right Sidebar</li>-->
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="page-content">
 <section class="themeht-blogs">
  <div class="container">
    <div class="row">
      
      <!-- Blog Content -->
      <div class="col-lg-8 col-md-12">
        @foreach($posts as $post)
        <div class="post-card post-classic">
          <div class="post-image">
            <img class="img-fluid w-100" src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}">
          </div>
          <div class="post-desc">
            <ul class="list-inline post-bottom">
              <li class="list-inline-item">Admin</li>
              <li class="list-inline-item">{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
              <li class="list-inline-item">{{ $post->comments_count ?? 0 }} Comments</li>
              <li class="list-inline-item">{{ $post->category->name ?? 'Uncategorized' }}</li>
            </ul>
            <div class="post-title">
              <h4>
                <a href="{{ route('slug.show', $post->slug) }}">{{ $post->title }}</a>
              </h4>
            </div>
            <p>{!! Str::limit(strip_tags($post->description), 200) !!}</p>
            <a class="themeht-btn primary-btn" href="{{ route('slug.show', $post->slug) }}">
              <span class="btn-icon1"></span>
              <span class="btn-text">Read More</span>
              <span class="btn-icon2"></span>
            </a>
          </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
          {{ $posts->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4 col-md-12 mt-7 mt-lg-0 ps-lg-10">
        <div class="themeht-sidebar">

          <!-- Search Widget -->
          <div class="widget">
            <div class="widget-search">
              <form>
                <div class="widget-searchbox">
                  <input type="text" placeholder="Search Here..." class="form-control">
                  <button type="submit" class="search-btn">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>

          <!-- Recent Articles -->
          <div class="widget">
            <h5 class="widget-title">Recent Articles</h5>
            <div class="recent-post">
              <ul class="list-unstyled">
                @foreach($recent_posts as $recent)
                <li class="mb-3">
                  <div class="recent-post-thumb">
                    <img class="img-fluid" src="{{ asset('storage/' . $recent->photo) }}" alt="{{ $recent->title }}">
                  </div>
                  <div class="recent-post-desc">
                    <a href="{{ route('slug.show', $recent->slug) }}">{{ $recent->title }}</a>
                    <div class="post-date-small">{{ $recent->created_at->format('F d, Y') }}</div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div>

          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Categories</h5>
            <ul class="widget-categories list-unstyled">
              @foreach($categories as $category)
              <li>
                <a href="#">{{ $category->name }} </a>
              </li>
              @endforeach
            </ul>
          </div>

          <!-- Tags -->
          <div class="widget">
            <h5 class="widget-title">Popular Tags</h5>
            <ul class="widget-tags list-inline">
              <li><a href="#">Agency</a></li>
              <li><a href="#">Company</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">AI</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Digital</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Technology</a></li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

</div>

@include('front-end.footer')
