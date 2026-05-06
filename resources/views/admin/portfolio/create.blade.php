@include('layouts.header')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="portfolioForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title *</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Category *</label>
                    <select name="portfolio_category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Photo *</label>
                    <input type="file" name="photo" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')

<script>
$(document).ready(function () {
    $('#portfolioForm').on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.portfolio.store') }}",  // Store route
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                Swal.fire({
                    title: 'Please Wait...',
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
                    title: 'Success!',
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
