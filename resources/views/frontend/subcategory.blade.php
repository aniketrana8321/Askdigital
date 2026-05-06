@include('front-end.header')

<!-- Page Title Start -->
<section class="page-title">
    <div class="page-title-bg" data-bg-img="{{ asset('storage/'.$subcategory->photo) }}"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="theme-breadcrumb-box">
                    <h1>{{ $subcategory->name }}</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">
                                    <i class="bi bi-house-door me-1"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ $subcategory->name }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->

<!-- Body Content Start -->
<div class="page-content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-fluid rounded" src="{{ asset('storage/'.$subcategory->photo) }}" alt="{{ $subcategory->name }}">
                </div>
            </div>
            <div class="row my-10">
                <div class="col-lg-3">
                    <h3 class="mb-0">{{ $subcategory->name }}</h3>
                </div>
                <div class="col-lg-8 ms-auto mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-lg-4 ms-auto">
                            <ul class="list-unstyled list-icon style-1 mb-0">
                                <li><i class="bi bi-stars"></i> {{ $subcategory->description }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <p>{!! $subcategory->description !!}</p>
                </div>
            </div>

            <!-- Related Services -->
            <div class="row">
                <div class="col">
                    <h4>Related Services</h4>
                    <ul>
                        @foreach($relatedServices as $service)
                            <li><a href="{{ url($service->slug) }}">{{ $service->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Body Content End -->

@include('front-end.footer')
