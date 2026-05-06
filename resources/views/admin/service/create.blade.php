@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Service</h1>
        <a href="{{ route('admin.service.index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="serviceForm" enctype="multipart/form-data">
                @csrf

                <!-- Category Selection -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category *</label>
                            <select name="service_category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Description *</label>
                    <textarea name="short_description" class="form-control h_100" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description *</label>
                    <textarea name="description" class="form-control editor" required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Icon *</label>
                            <select id="iconSelect" name="icon" class="form-select">
                                <option value="">Select Icon</option>
                                <option value="flaticon-bank">flaticon-bank</option>
                                <option value="flaticon-cloud">flaticon-cloud</option>
                                <option value="flaticon-design">flaticon-design</option>
                                <option value="flaticon-marketing">flaticon-marketing</option>
                                <option value="flaticon-web-development">flaticon-web-development</option>
                            </select>
                            <div id="iconPreview"></div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Photo *</label>
                            <input type="file" name="photo" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Banner</label>
                            <input type="file" name="banner" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">PDF</label>
                            <input type="file" name="pdf" class="form-control">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
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
            url: "{{ route('admin.service.store') }}",
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

    $('#iconSelect').on('change', function () {
        var selectedValue = $(this).val();
        $('#iconPreview').html('<i class="icon ' + selectedValue + '"></i>');
    });
});
</script>

@include('layouts.footer')
