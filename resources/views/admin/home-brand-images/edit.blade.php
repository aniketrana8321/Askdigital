@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Brand Image</h1>
        <a href="{{ route('admin.home-brand-images.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Brand Images
        </a>
    </div>  

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="editImageForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    <img src="{{ asset('storage/' . $homeBrandImage->photo) }}" alt="Brand Image" width="120">
                </div>
                <div class="mb-3">
                    <label class="form-label">Change Image*</label>
                    <input type="file" name="photo" class="form-control">
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
            url: "{{ route('admin.home-brand-images.update', $homeBrandImage->id) }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire("Success!", response.message, "success").then(() => {
                    window.location.href = "{{ route('admin.home-brand-images.index') }}";
                });
            },
            error: function(error) {
                Swal.fire("Error!", "Something went wrong!", "error");
            }
        });
    });
</script>

@include('layouts.footer')
