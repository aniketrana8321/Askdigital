@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Slider</h1>
        <a href="{{ route('admin.slider.index') }}" class="btn btn-primary"><i class="fas fa-bars"></i> All Items</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="sliderForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Photo *</label>
                    <input type="file" name="photo" class="form-control" required>
                    <span class="text-danger error-message" id="photoError"></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <textarea name="text" class="form-control"></textarea>
                    <span class="text-danger error-message" id="textError"></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Button Text</label>
                    <input type="text" name="button_text" class="form-control">
                    <span class="text-danger error-message" id="buttonTextError"></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Button URL</label>
                    <input type="text" name="button_url" class="form-control" id="button_url">
                    <span class="text-danger error-message" id="buttonUrlError"></span>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        $('#sliderForm').submit(function (e) {
            e.preventDefault(); // Prevent normal form submission

            $('.error-message').text(''); // Clear previous errors

            var formData = new FormData(this);

            // Validate URL format before sending request
            var buttonUrl = $('#button_url').val();
            if (buttonUrl && !isValidURL(buttonUrl)) {
                $('#buttonUrlError').text("The button URL must be a valid URL.");
                return;
            }

            $.ajax({
                url: "{{ route('admin.slider.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                beforeSend: function () {
                    Swal.fire({
                        title: 'Submitting...',
                        text: 'Please wait',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Slider Created Successfully!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = "{{ route('admin.slider.index') }}"; // Redirect to index
                    });
                },
                error: function (xhr) {
                    Swal.close();
                    if (xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            $('#' + key + 'Error').text(value[0]); // Show validation errors
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: xhr.responseJSON.message
                        });
                    }
                }
            });
        });

       function isValidURL(url) {
    var pattern = /^(https?:\/\/)?([\w-]+\.)+[\w-]{2,}(\/[^\s]*)?$/i;
    return pattern.test(url) || url === "#" || url === "";
}

    });
</script>

@include('layouts.footer')
