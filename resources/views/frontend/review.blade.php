@include('front-end.header')


<!--page title start-->

<section class="page-title">
  <div class="page-title-bg" data-bg-img="{{ asset('front-end/images/bg/bg09.jpg') }}"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="theme-breadcrumb-box">
          <h1>Testimonials</h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <i class="bi bi-house-door me-1"></i>Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Testimonials</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!--page title end-->




<style>
    .video-section-new-3 {
      
        background-color: #f5f5f5;
    }

    .video-box-new-3 {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
    }

    .video-box-new-3:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .bg {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        background-size: cover;
        background-position: center;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        transition: all 0.3s;
    }

    .video-box-new-3:hover .overlay {
        background: rgba(0, 0, 0, 0.3);
    }

   

    .btn-box {
        margin-bottom: 15px;
    }

    .play-now {
        display: inline-block;
        font-size: 30px;
        color: #fff;
        text-decoration: none;
    }

    @media (max-width: 991px) {
        .col-lg-4 {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media (max-width: 576px) {
        .col-lg-4 {
            width: 100%;
        }
        
    }
    @media (max-width: 767px) {
    .video-section-new-3 {
        padding: 30px 15px !important;
    }
}

    .video-section-new-3 .video-box-new-3 {
    position: relative;
    min-height: auto;
    margin-top: 20px;
}

.video-section-new-3 {
    padding: 123px;
    position: relative;
}
</style>

<section class="video-section-new-3">
    <div class="auto-container">
        <div class="row gy-4">

            <!-- Video 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="video-box-new-3">
                    <a href="https://youtu.be/FfRoCBwkAMk?si=aUiKunzyn-kKCx_-" data-fancybox="gallery">
                        <img src="https://img.youtube.com/vi/FfRoCBwkAMk/hqdefault.jpg" alt="Video Thumbnail" class="w-100">
                    </a>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="video-box-new-3">
                    <a href="https://youtu.be/vto786dc6eo?si=GWGwGgLuG6FO86fj" data-fancybox="gallery">
                        <img src="https://img.youtube.com/vi/vto786dc6eo/hqdefault.jpg" alt="Video Thumbnail" class="w-100">
                    </a>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="video-box-new-3">
                    <a href="https://youtu.be/YMkYFz_LYvQ?si=aZKWxXDrAnwp87pl" data-fancybox="gallery">
                        <img src="https://img.youtube.com/vi/YMkYFz_LYvQ/hqdefault.jpg" alt="Video Thumbnail" class="w-100">
                    </a>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="video-box-new-3">
                    <a href="https://youtu.be/7GoP7BYOwKA?si=nrP8zcLnX9u9wlAx" data-fancybox="gallery">
                        <img src="https://img.youtube.com/vi/7GoP7BYOwKA/hqdefault.jpg" alt="Video Thumbnail" class="w-100">
                    </a>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="video-box-new-3">
                    <a href="https://youtu.be/6VU4Kgfhxys?si=HwfVRAcyriKKLvaM" data-fancybox="gallery">
                        <img src="https://img.youtube.com/vi/6VU4Kgfhxys/hqdefault.jpg" alt="Video Thumbnail" class="w-100">
                    </a>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="video-box-new-3">
                    <a href="https://youtu.be/HFgL4hbMKLg?si=D_lqA5Gp29Hjl0Mt" data-fancybox="gallery">
                        <img src="https://img.youtube.com/vi/HFgL4hbMKLg/hqdefault.jpg" alt="Video Thumbnail" class="w-100">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>



@include('front-end.footer')
