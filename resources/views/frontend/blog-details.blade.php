@include('front-end.header')

<!--page title start-->

<section class="page-title">
  <div class="page-title-bg" data-bg-img="{{ asset('storage/'.$post->photo) }}"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="theme-breadcrumb-box">
          <h1>{{ $post->title }}</h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <i class="bi bi-house-door me-1"></i>Home </a>
              </li>
              <!--<li class="breadcrumb-item">-->
              <!--  <a href="#">Blogs</a>-->
              <!--</li>-->
              <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<section class="post-single-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="post-card">
          <div class="post-image">
            <img class="img-fluid" src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}">
          </div>
          <div class="post-desc">
            <ul class="list-inline post-bottom">
              <li class="list-inline-item">Admin</li>
              <li class="list-inline-item">{{ $post->created_at->format('F d, Y') }}</li>
              <li class="list-inline-item">{{ $post->comments_count ?? 0 }} Comments</li>
              <li class="list-inline-item">{{ $post->category->name ?? 'Uncategorized' }}</li>
            </ul>
            <p>{!! $post->description !!}</p>

            @if(!empty($post->quote))
            <blockquote class="theme-blockquote my-5">
              <p>“{{ $post->quote }}”</p>
              <span>{{ $post->quote_author ?? 'Unknown' }}</span>
            </blockquote>
            @endif

            <!--<h3>{{ $post->subtitle ?? 'More Insights' }}</h3>-->
            <!--<p>{{ $post->extra_content ?? '' }}</p>-->

            <!--<ul class="list-unstyled list-icon style-1">-->
            <!--  <li><i class="bi bi-stars"></i> Quality content creation</li>-->
            <!--  <li><i class="bi bi-stars"></i> Engaging user experiences</li>-->
            <!--  <li><i class="bi bi-stars"></i> SEO optimized articles</li>-->
            <!--  <li><i class="bi bi-stars"></i> Social media integration</li>-->
            <!--  <li><i class="bi bi-stars"></i> Advanced analytics tracking</li>-->
            <!--</ul>-->

            <!--<h3>Connecting Customers with Your Brand</h3>-->
            <!--<p>{{ $post->brand_message ?? 'We help connect brands with customers through powerful storytelling and engagement strategies.' }}</p>-->

            <!--<div class="theme-tags blog-tag-link tags-links"> Tags:  -->
            <!--  @foreach(explode(',', $post->tags) as $tag)-->
            <!--    <a href="{{ url('tag/' . trim($tag)) }}">{{ trim($tag) }}</a>-->
            <!--  @endforeach-->
            <!--</div>-->
          </div>
        </div>
       </div>

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
            <h5 class="widget-title">Recent Articles</h5>
            <div class="recent-post">
              <ul class="list-unstyled">
                @foreach($latestPosts as $latest)
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

          <div class="widget">
            <h5 class="widget-title">Categories</h5>
            <ul class="widget-categories list-unstyled">
              @foreach($categories as $category)
              <li><a href="https://askdigitalagency.com/blog">{{ $category->name }} <span>({{ $category->posts_count }})</span></a></li>
              @endforeach
            </ul>
          </div>

          <div class="widget">
            <h5 class="widget-title">Popular Tags</h5>
            <ul class="widget-tags list-inline">
              @foreach(explode(',', $post->tags) as $tag)
              <li><a href="{{ url('tag/' . trim($tag)) }}">{{ trim($tag) }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@include('front-end.footer')