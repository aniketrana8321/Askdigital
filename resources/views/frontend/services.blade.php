@include('front-end.header')

<section class="page-title" style="background-image: url(https://demo.phpscriptpoint.com/desix/uploads/banner_1704766456.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="auto-container">
        <div class="row">
            @foreach($services as $service)
            <div class="service-block col-lg-4 col-md-6 wow fadeInUp"><!-- 3 per row -->
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <img src="{{ asset('storage/' . $service->photo) }}" alt="{{ $service->name }}">
                        </figure>
                    </div>
                    <div class="content-box">
                        <i class="icon {{ $service->icon }}"></i>
                        <h5 class="title">{{ $service->name }}</h5>
                    </div>
                    <div class="hover-content">
                        <i class="icon {{ $service->icon }}"></i>
                        <h5 class="title">
                            <a href="{{ route('service.show', $service->slug) }}">{{ $service->name }}</a>
                        </h5>
                        <!-- Limiting description to 13 words -->
                        <div class="text">{{ \Illuminate\Support\Str::words($service->short_description, 13) }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('front-end.footer')
