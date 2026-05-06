@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Inner Page</h1>
        <a href="{{ route('admin.inner-pages.index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form id="editForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $innerPage->id }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control" value="{{ $innerPage->title }}">
                            <small class="text-danger error-title"></small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control" value="{{ $innerPage->slug }}">
                            <small class="text-danger error-slug"></small>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description *</label>
                    <textarea name="description" class="form-control editor" cols="30" rows="10">{{ $innerPage->description }}</textarea>
                    <small class="text-danger error-description"></small>
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $innerPage->seo_title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control" cols="30" rows="10">{{ $innerPage->seo_meta_description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Photo *</label>
                            <input type="file" name="photo" class="form-control">
                            <small class="text-danger error-photo"></small>

                            @if($innerPage->photo)
                                <img src="{{ asset('storage/' . $innerPage->photo) }}" alt="Current Image" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mb-50 btn-common">Update</button>
            </form>
        </div>
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>
$(document).ready(function () {
    $("#editForm").on("submit", function (e) {
        e.preventDefault();
        
        let formData = new FormData(this);
        let id = $("input[name='id']").val();
        let url = "{{ route('admin.inner-pages.update', ':id') }}".replace(':id', id);

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("small.text-danger").text(""); // Clear validation errors
            },
            success: function (response) {
                if (response.success) {
                    Swal.fire("Success!", response.message, "success").then(() => {
                        window.location.href = "{{ route('admin.inner-pages.index') }}";
                    });
                } else {
                    Swal.fire("Error!", response.message, "error");
                }
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                if (errors) {
                    $.each(errors, function (key, value) {
                        $(".error-" + key).text(value[0]); // Display validation errors
                    });
                } else {
                    Swal.fire("Error!", "Something went wrong!", "error");
                }
            }
        });
    });
});
</script>

@include('layouts.footer')
