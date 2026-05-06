@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Service</h1>
        <a href="{{ route('admin.service.index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="serviceForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $service->id }}">

                <!-- Category Selection -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category *</label>
                            <select name="service_category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ $service->service_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control" value="{{ $service->slug }}" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Description *</label>
                    <textarea name="short_description" class="form-control h_100" required>{{ $service->short_description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description *</label>
                    <textarea name="description" class="form-control editor" required>{{ $service->description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Icon *</label>
                            <select id="iconSelect" name="icon" class="form-select">
                                <option value="">Select Icon</option>
                                <option value="flaticon-bank" {{ $service->icon == 'flaticon-bank' ? 'selected' : '' }}>flaticon-bank</option>
                                <option value="flaticon-cloud" {{ $service->icon == 'flaticon-cloud' ? 'selected' : '' }}>flaticon-cloud</option>
                                <option value="flaticon-design" {{ $service->icon == 'flaticon-design' ? 'selected' : '' }}>flaticon-design</option>
                                <option value="flaticon-marketing" {{ $service->icon == 'flaticon-marketing' ? 'selected' : '' }}>flaticon-marketing</option>
                                <option value="flaticon-web-development" {{ $service->icon == 'flaticon-web-development' ? 'selected' : '' }}>flaticon-web-development</option>
                            </select>
                            <div id="iconPreview">
                                <i class="icon {{ $service->icon }}"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ $service->phone }}">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $service->seo_title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100">{{ $service->seo_meta_description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Photo *</label>
                            <input type="file" name="photo" class="form-control">
                            @if($service->photo)
                                <img src="{{ asset('storage/' . $service->photo) }}" alt="Photo" class="img-fluid mt-2" width="100">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Banner</label>
                            <input type="file" name="banner" class="form-control">
                            @if($service->banner)
                                <img src="{{ asset('storage/' . $service->banner) }}" alt="Banner" class="img-fluid mt-2" width="100">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">PDF</label>
                            <input type="file" name="pdf" class="form-control">
                            @if($service->pdf)
                                <a href="{{ asset('storage/'.$service->pdf) }}" target="_blank" class="d-block mt-2">View PDF</a>
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
    $('#serviceForm').on('submit', function(e) {
        e.preventDefault();
        
        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.service.update', $service->id) }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                    }).then(() => {
                        window.location.href = "{{ route('admin.service.index') }}";
                    });
                }
            },
            error: function(response) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Something went wrong. Please try again.',
                });
            }
        });
    });

    $('#iconSelect').on('change', function () {
        var selectedValue = $(this).val();
        $('#iconPreview').html('<i class="icon ' + selectedValue + '"></i>');
    });
});
</script>

@include('layouts.footer')
