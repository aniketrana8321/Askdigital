@include('layouts.header')

<div class="container">
    <h1 class="h3 mb-0 text-gray-800">Edit Post Category</h1>
    <a href="{{ route('admin.post-category.index') }}" class="btn btn-primary"><i class="fas fa-bars"></i> All Categories</a>

    <div class="card shadow mb-4 mt-4">
        <div class="card-body">
            <form id="editCategoryForm" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" id="seo_title" value="{{ $category->seo_title }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" id="seo_meta_description" class="form-control" rows="3">{{ $category->seo_meta_description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('layouts.footer')


<script>
    // AJAX Form Submission
    $('#editCategoryForm').submit(function(e) {
        e.preventDefault();

        let formData = $(this).serialize();
        let actionUrl = "{{ route('admin.post-category.update', $category->id) }}";

        $.ajax({
            url: actionUrl,
            type: "PUT",
            data: formData,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(() => {
                        window.location.href = "{{ route('admin.post-category.index') }}";
                    });
                }
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;
                let errorMessages = '';

                $.each(errors, function(key, value) {
                    errorMessages += value[0] + '<br>';
                });

                Swal.fire({
                    title: "Error!",
                    html: errorMessages,
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
</script>


