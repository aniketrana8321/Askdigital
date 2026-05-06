@include('layouts.header')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="portfolioEditForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $portfolio->id }}">

                <div class="mb-3">
                    <label class="form-label">Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ $portfolio->title }}" required>
                </div>

                <div class="mb-3">
                    <label>Category *</label>
                    <select name="portfolio_category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                                {{ $portfolio->portfolio_category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Photo *</label>
                    <input type="file" name="photo" class="form-control">
                    
                    <!-- Display existing image -->
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $portfolio->photo) }}" width="150" alt="Portfolio Image">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')

<script>
$(document).ready(function () {
    $('#portfolioEditForm').on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);
        let id = $('input[name="id"]').val();

        $.ajax({
            url: "{{ route('admin.portfolio.update', '') }}/" + id,  // Update route
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                Swal.fire({
                    title: 'Updating...',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    willOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Updated!',
                    text: response.message,
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = "{{ route('admin.portfolio.index') }}";  // Redirect to index
                });
            },
            error: function (xhr) {
                Swal.close();
                let errors = xhr.responseJSON.errors;
                if (errors) {
                    let errorMsg = '';
                    $.each(errors, function (key, value) {
                        errorMsg += value[0] + '<br>';
                    });
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: errorMsg
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong. Please try again.'
                    });
                }
            }
        });
    });
});
</script>
