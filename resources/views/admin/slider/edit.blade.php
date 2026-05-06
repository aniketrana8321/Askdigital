@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Slider</h1>
        <a href="{{ route('admin.slider.index') }}" class="btn btn-primary"><i class="fas fa-bars"></i> All Items</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
        <form id="editSliderForm" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT') <!-- This ensures Laravel recognizes the PUT request -->
                <input type="hidden" name="slider_id" value="{{ $slider->id }}">
                <div class="mb-3">
                    <label class="form-label">Existing Photo</label>
                    <div><img src="{{ asset('storage/' . $slider->photo) }}" alt="" class="w_200"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Change Photo</label>
                    <input type="file" name="photo" class="form-control">
                    <span class="text-danger error-message" id="photoError"></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <textarea name="text" class="form-control">{{ $slider->text }}</textarea>
                    <span class="text-danger error-message" id="textError"></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Button Text</label>
                    <input type="text" name="button_text" class="form-control" value="{{ $slider->button_text }}">
                    <span class="text-danger error-message" id="buttonTextError"></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Button URL</label>
                    <input type="text" name="button_url" class="form-control" id="button_url" value="{{ $slider->button_url }}">
                    <span class="text-danger error-message" id="buttonUrlError"></span>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<script>
   $(document).ready(function () {
    $('#editSliderForm').submit(function (e) {
        e.preventDefault();
        $('.error-message').text('');

        var formData = new FormData(this);
        formData.append('_method', 'PUT'); // Add this to simulate PUT request

        var buttonUrl = $('#button_url').val();
        if (buttonUrl && !isValidURL(buttonUrl)) {
            $('#buttonUrlError').text("The button URL must be a valid URL.");
            return;
        }

        $.ajax({
            url: "{{ route('admin.slider.update', $slider->id) }}",
            type: "POST", // Change to POST
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            beforeSend: function () {
                Swal.fire({
                    title: 'Updating...',
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
                    text: 'Slider Updated Successfully!',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = "{{ route('admin.slider.index') }}";
                });
            },
            error: function (xhr) {
                Swal.close();
                if (xhr.responseJSON.errors) {
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('#' + key + 'Error').text(value[0]);
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
        var pattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/;
        return pattern.test(url);
    }
});

</script>

@include('layouts.footer')
