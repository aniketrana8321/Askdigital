@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    </div>

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="card shadow mb-4 t-left">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <ul class="nav flex-column nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#logo_favicon">Logo and Favicon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#banner">Banner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#login_page_photo">Login Page Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#social_media">Social Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                        <div class="tab-content">
                            <!-- Logo and Favicon Tab -->
                            <div class="tab-pane fade show active" id="logo_favicon">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Existing Logo</td>
                                        <td>Change Logo</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        @if(isset($settings) && $settings->logo)
    <img src="{{ asset('storage/'.$settings->logo) }}" alt="Logo">
@else
    <p>No logo available</p>
@endif

                                        </td>
                                        <td>
                                            <input type="file" name="logo">
                                        </td>
                                    </tr>
                                </table>

                                <table class="table table-bordered">
                                    <tr>
                                        <td>Existing Favicon</td>
                                        <td>Change Favicon</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        @if(isset($settings) && $settings->favicon)
    <img src="{{ asset('storage/' . $settings->favicon) }}" alt="Favicon" class="w_100">
@else
    <p>No favicon available</p>
@endif
                                        </td>
                                        <td>
                                            <input type="file" name="favicon">
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Banner Tab -->
                            <div class="tab-pane fade" id="banner">
                                <div>
                                @if(isset($settings) && $settings->banner)
    <img src="{{ asset('storage/' . $settings->banner) }}" class="w_300">
@else
    <p>No banner available</p>
@endif
                                </div>
                                <input type="file" name="banner">
                            </div>

                            <!-- Login Page Photo Tab -->
                            <div class="tab-pane fade" id="login_page_photo">
                                <div>
                                @if(isset($settings) && $settings->login_page_photo)
    <img src="{{ asset('storage/' . $settings->login_page_photo) }}" class="w_300">
@else
    <p>No login page photo available</p>
@endif
                                </div>
                                <input type="file" name="login_page_photo">
                            </div>
                         





                            <!-- Social Media Tab -->
                            <div class="tab-pane fade" id="social_media">
                                <label>Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook ?? '' }}">
                                
                                <label>Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter ?? '' }}">
                                
                                <label>LinkedIn</label>
                                <input type="text" name="linkedin" class="form-control" value="{{ $settings->linkedin ?? '' }}">
                                
                                <label>Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="{{ $settings->instagram ?? '' }}">
                                
                                <label>YouTube</label>
                                <input type="text" name="youtube" class="form-control" value="{{ $settings->youtube ?? '' }}">
                                
                                <label>Pinterest</label>
                                <input type="text" name="pinterest" class="form-control" value="{{ $settings->pinterest ?? '' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@include('layouts.footer')
