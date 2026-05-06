@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Service Sub-Category</h1>
        <a href="{{ route('admin.service_sub_category.index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="serviceSubCategoryForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Category Selection -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category *</label>
                            <select name="service_category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $serviceSubCategory->service_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Optional: Service Selection -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Service (Optional)</label>
                            <select name="service_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ $serviceSubCategory->service_id == $service->id ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Name & Slug -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ $serviceSubCategory->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control" value="{{ $serviceSubCategory->slug }}" required>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description *</label>
                    <textarea name="description" class="form-control editor" required>{{ $serviceSubCategory->description }}</textarea>
                </div>

                <!-- SEO -->
                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $serviceSubCategory->seo_title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100">{{ $serviceSubCategory->seo_meta_description }}</textarea>
                </div>

                <!-- Files -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Photo *</label>
                            <input type="file" name="photo" class="form-control">
                            @if($serviceSubCategory->photo)
                                <img src="{{ asset('storage/' . $serviceSubCategory->photo) }}" class="mt-2" width="100">
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Banner</label>
                            <input type="file" name="banner" class="form-control">
                            @if($serviceSubCategory->banner)
                                <img src="{{ asset('storage/' . $serviceSubCategory->banner) }}" class="mt-2" width="100">
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">PDF</label>
                            <input type="file" name="pdf" class="form-control">
                            @if($serviceSubCategory->pdf)
                                <a href="{{ asset('storage/' . $serviceSubCategory->pdf) }}" target="_blank" class="btn btn-sm btn-info mt-2">View PDF</a>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#serviceSubCategoryForm').on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.service_sub_category.update', $serviceSubCategory->id) }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Updated!',
                        text: response.message,
                    }).then(() => {
                        window.location.href = "{{ route('admin.service_sub_category.index') }}";
                    });
                }
            },
            error: function(response) {
                let errors = response.responseJSON.errors;
                if (errors && errors.slug) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Slug already exists.',
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong. Please try again.',
                    });
                }
            }
        });
    });
});
</script>

@include('layouts.footer')
