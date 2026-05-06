@include('layouts.header')


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Post</h1>
        <a href="{{ route('admin.post.index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form id="postForm" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Description *</label>
                   
                   <textarea name="description" class="form-control editor"></textarea>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Select Category *</label>
                            <select name="post_category_id" class="form-select">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('post_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('post_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Tags</label>
                            <select name="tags[]" class="form-select select2_tags" multiple="multiple">
                                @if(old('tags'))
                                    @foreach(old('tags') as $tag)
                                        <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Photo *</label>
                            <input type="file" name="photo" class="form-control">
                            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mb-50 btn-common">Submit</button>
            </form>
        </div>
    </div>
</div> 

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script>
$(document).ready(function () {
    $("#postForm").on("submit", function (e) {
        e.preventDefault();
        
        let formData = new FormData(this);
        let url = "{{ route('admin.post.store') }}"; // Laravel route to store post

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
                        window.location.href = "{{ route('admin.post.index') }}";
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