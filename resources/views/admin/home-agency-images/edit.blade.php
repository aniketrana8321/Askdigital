@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Image</h1>
        <a href="{{ route('admin.home-agency-images.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Images
        </a>
    </div>  

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="editImageForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    <img src="{{ asset('storage/' . $homeAgencyImage->photo) }}" width="150" alt="No Image">
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="photo" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" name="link" class="form-control" value="{{ $homeAgencyImage->link }}" placeholder="Enter link (optional)">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<script>
    $('#editImageForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.home-agency-images.update', $homeAgencyImage->id) }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire("Success!", response.message, "success").then(() => {
                    window.location.href = "{{ route('admin.home-agency-images.index') }}";
                });
            },
            error: function(error) {
                Swal.fire("Error!", "Something went wrong!", "error");
            }
        });
    });
</script>

@include('layouts.footer')
