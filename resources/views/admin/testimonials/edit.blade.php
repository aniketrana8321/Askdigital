@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Testimonial</h1>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Testimonials
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Designation *</label>
                        <input type="text" name="designation" class="form-control" value="{{ $testimonial->designation }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Current Image:</label><br>
                        @if($testimonial->image)
                            <img src="{{ asset('storage/' . $testimonial->image) }}" width="100">
                        @else
                            No image
                        @endif
                        <br><label>Change Image:</label>
                        <input type="file" name="image" class="form-control mt-2">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>LinkedIn</label>
                        <input type="url" name="linkedin" class="form-control" value="{{ $testimonial->linkedin }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Facebook</label>
                        <input type="url" name="facebook" class="form-control" value="{{ $testimonial->facebook }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Twitter</label>
                        <input type="url" name="twitter" class="form-control" value="{{ $testimonial->twitter }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')
