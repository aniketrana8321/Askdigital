@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Post</h1>
        <a href="{{ route('admin.post.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="editPostForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                    <small class="text-danger error-title"></small>
                </div>

                <div class="mb-3">
                    <label>Select Category *</label>
                    <select name="post_category_id" class="form-select">
                        @foreach($categories ?? [] as $category)
                            <option value="{{ $category->id }}" {{ $post->post_category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <small class="text-danger error-category"></small>
                </div>

                <div class="mb-3">
                    <label>Description *</label>
                    <textarea name="description" class="form-control editor" rows="5">{{ $post->description }}</textarea>
                    <small class="text-danger error-description"></small>
                </div>

                <div class="mb-3">
                    <label>SEO Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $post->seo_title }}">
                    <small class="text-danger error-seo-title"></small>
                </div>

                <div class="mb-3">
                    <label>SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control" rows="3">{{ $post->seo_meta_description }}</textarea>
                    <small class="text-danger error-seo-meta-description"></small>
                </div>

                <div class="mb-3">
                    <label>Photo *</label>
                    <input type="file" name="photo" class="form-control">
                    <br>
                    <img src="{{ asset('storage/' . $post->photo) }}" width="100">
                    <small class="text-danger error-photo"></small>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#editPostForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);
            let actionUrl = "{{ route('admin.post.update', $post->id) }}";

            $.ajax({
                url: actionUrl,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('small.text-danger').text(''); // Clear previous errors
                },
                success: function (response) {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success"
                    }).then(() => {
                        window.location.href = "{{ route('admin.post.index') }}";
                    });
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        if (errors.title) $('.error-title').text(errors.title[0]);
                        if (errors.post_category_id) $('.error-category').text(errors.post_category_id[0]);
                        if (errors.description) $('.error-description').text(errors.description[0]);
                        if (errors.seo_title) $('.error-seo-title').text(errors.seo_title[0]);
                        if (errors.seo_meta_description) $('.error-seo-meta-description').text(errors.seo_meta_description[0]);
                        if (errors.photo) $('.error-photo').text(errors.photo[0]);
                    } else {
                        Swal.fire("Error!", "Something went wrong!", "error");
                    }
                }
            });
        });
    });
</script>

@include('layouts.footer')
