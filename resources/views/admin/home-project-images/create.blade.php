@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upload Project Image</h1>
        <a href="{{ route('admin.home-project-images.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Project Images
        </a>
    </div>  

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="imageForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Image*</label>
                    <input type="file" name="photo" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    $('#imageForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.home-project-images.store') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire("Success!", response.message, "success").then(() => {
                    window.location.href = "{{ route('admin.home-project-images.index') }}";
                });
            },
            error: function(error) {
                Swal.fire("Error!", "Something went wrong!", "error");
            }
        });
    });
</script>

@include('layouts.footer')
