<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.0.0/css/bootstrap5-toggle.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/flaticon.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/spacing.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    /* .bg-gradient-primary {
    background-color: #3b65ad !important;
     background-image:  #3b65ad !important;
    background-size: cover;

}
.text-success {
    color: #ef36a2 !important;
}
.btn-info {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
} */

    .bg-gradient-primary {
    background-color: #3b65ad !important;
     background-image:  #3b65ad !important;
    background-size: cover;

}
.text-success {
    color: #ef36a2 !important;
}
.btn-info {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
}
.btn-primary {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
}
.nav-tabs .nav-item .nav-link.active {
    color: #fff !important;
    background-color: #58b05c !important;
}

.btn-success {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
}

.nav-link {
    color: #000;
}
.btn-block {
    display: block;
    width: 13%;
    /* margin-left: 21px; */
}


</style>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#/dashboard">
                <div class="sidebar-brand-text mx-3 ttn">
                    <div class="right">
                       ASK
                    </div>
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
    <a class="nav-link" href="#/dashboard">
        <i class="fas fa-home"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.website-settings') }}">
        <i class="far fa-caret-square-right"></i>
        <span>Website Settings</span>
    </a>
</li>



<!-- <li class="nav-item ">
    <a class="nav-link" href="#/language/index">
        <i class="far fa-caret-square-right"></i>
        <span>Language Settings</span>
    </a>
</li> -->


<li class="nav-item dd ">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_blog" aria-expanded="true" aria-controls="collapse_blog">
        <i class="fas fa-folder"></i>
        <span>Blog Section</span>
    </a>
    <div id="collapse_blog" class="collapse " data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route('admin.post-category.index') }}">Post Category</a>
            <a class="collapse-item" href="{{ route('admin.post.index') }}">Post</a>
        </div>
    </div>
</li>


<!-- <li class="nav-item dd ">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_subscriber" aria-expanded="true" aria-controls="collapse_subscriber">
        <i class="fas fa-folder"></i>
        <span>Subscribers</span>
    </a>
    <div id="collapse_subscriber" class="collapse " data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#/subscriber/index">All Subscribers</a>
            <a class="collapse-item" href="#/subscriber/send-message">Send Message to All</a>
        </div>
    </div>
</li> -->


<li class="nav-item dd ">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_all_sections" aria-expanded="true" aria-controls="collapse_all_sections">
        <i class="fas fa-folder"></i>
        <span>All Sections</span>
    </a>
    <div id="collapse_all_sections" class="collapse " data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <a class="collapse-item" href="#/fun-fact/index">Fun Fact</a> -->
            <a class="collapse-item" href="{{ route('admin.marquee.index') }}">Marquee</a>
            <!-- <a class="collapse-item" href="#/offer/index">Offer</a>
            <a class="collapse-item" href="#/call-to-action/index">Call To Action</a>
            <a class="collapse-item" href="#/welcome-one/item">Welcome One</a>
            <a class="collapse-item" href="#/welcome-two/item">Welcome Two</a>
            <a class="collapse-item" href="#/video-one/item">Video One</a>
            <a class="collapse-item" href="#/video-two/item">Video Two</a>
            <a class="collapse-item" href="#/feature-one/item">Feature One</a>
            <a class="collapse-item" href="#/feature-two/item">Feature Two</a>
            <a class="collapse-item" href="#/why-choose-one/item">Why Choose One</a>
            <a class="collapse-item" href="#/why-choose-two/item">Why Choose Two</a> -->
        </div>
    </div>
</li>

 <li class="nav-item ">
    <a class="nav-link" href="{{ route('admin.inner-pages.index') }}">
        <i class="far fa-caret-square-right"></i>
        <span>Inner pages</span>
    </a>
</li> 

<li class="nav-item dd ">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_home_pages" aria-expanded="true" aria-controls="collapse_home_pages">
        <i class="fas fa-folder"></i>
        <span>Home Pages</span>
    </a>
    <div id="collapse_home_pages" class="collapse " data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.home-agency-images.index') }}"> Home Agency images </a>

             <a class="collapse-item" href="{{ route('admin.home-brand-images.index') }}">Home company images</a>
              <a class="collapse-item" href="{{ route('admin.home-project-images.index') }}">Home project images</a>
            <!--<a class="collapse-item" href="#/home-page/3/index">Home Page 3</a>-->
            <!--<a class="collapse-item" href="#/home-page/4/index">Home Page 4</a> -->
        
            <!--<a class="collapse-item" href="#/home-page/contact/photo/index">Contact Photos</a>-->
        </div>
    </div>
</li>


<!-- <li class="nav-item ">
    <a class="nav-link" href="#/other-page/index">
        <i class="far fa-caret-square-right"></i>
        <span>Other Pages</span>
    </a>
</li> -->

<!-- 
<li class="nav-item ">
    <a class="nav-link" href="#/menu/index">
        <i class="far fa-caret-square-right"></i>
        <span>Menu Manage</span>
    </a>
</li> -->




<!-- <li class="nav-item ">
    <a class="nav-link" href="#/portfolio/index">
        <i class="far fa-caret-square-right"></i>
        <span>Portfolio</span>
    </a>
</li> -->

<!-- <li class="nav-item ">
    <a class="nav-link" href="#/team-member/index">
        <i class="far fa-caret-square-right"></i>
        <span>Team Members</span>
    </a>
</li> -->

<li class="nav-item ">
    <a class="nav-link" href="{{ route('admin.slider.index') }}">
        <i class="far fa-caret-square-right"></i>
        <span>Slider</span>
    </a>
    
    
<li class="nav-item dd">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_service" aria-expanded="true" aria-controls="collapse_service">
        <i class="fas fa-cogs"></i>
        <span>Service Section</span>
    </a>
    <div id="collapse_service" class="collapse" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.service-category.index') }}">Service Category</a>
            <a class="collapse-item" href="{{ route('admin.service.index') }}">Service</a>
                        <a class="collapse-item" href="{{ route('admin.service_sub_category.index') }}">Service Sub-Category</a> <!-- New Sub-Category Added -->
                        <a class="collapse-item" href="{{ route('admin.faq.index') }}">Service Faq </a>

        </div>
    </div>
</li> 
<li class="nav-item ">
    <a class="nav-link" href="{{ route('admin.contact.index') }}">
        <i class="far fa-caret-square-right"></i>
        <span>contact Us</span>
    </a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
        <i class="far fa-caret-square-right"></i>
        <span>Team section </span>
    </a>
</li>
<li class="nav-item dd">
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_portfolio" aria-expanded="true" aria-controls="collapse_portfolio">
        <i class="fas fa-briefcase"></i>
        <span>Portfolio Section</span>
    </a>
    <div id="collapse_portfolio" class="collapse" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.portfolio-category.index') }}">Portfolio Category</a>
            <a class="collapse-item" href="{{ route('admin.portfolio.index') }}">Portfolio</a>
        </div>
    </div>
</li>

<li class="nav-item ">
    <a class="nav-link" href="#/faq/index">
        <i class="far fa-caret-square-right"></i>
        <span>FAQ</span>
    </a>
</li>



<!-- <li class="nav-item ">
    <a class="nav-link" href="#/client/index">
        <i class="far fa-caret-square-right"></i>
        <span>Clients</span>
    </a>
</li> -->
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column pb_50">
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="btn btn-info btn-sm mt_20" href="https://askdigitalagency.com" target="_blank">
                Visit Website
            </a>
        </li>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600">	Abhimanyun</span>
                                 <img src="https://askdigitalagency.com/storage/uploads/testimonials/ecQEMDBsNipdB3FVhcLmaYyKNDcexowPwQjWReB5.jpg" class="img-profile rounded-circle" width="40" height="40" alt="User Image">
                            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"  data-bs-popper="static" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Edit Profile
                </a>
                <div class="dropdown-divider"></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
</a>

            </div>
        </li>
    </ul>
</nav>
    
