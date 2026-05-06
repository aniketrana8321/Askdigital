@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Testimonial</h1>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Testimonials
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
           <form id="testimonialForm" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Name *</label>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Designation *</label>
                <input type="text" name="designation" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Image *</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">LinkedIn</label>
                <input type="url" name="linkedin" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Facebook</label>
                <input type="url" name="facebook" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Twitter</label>
                <input type="url" name="twitter" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>

        </div>
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('layouts.footer')


<script>
$(document).ready(function () {
    $("#testimonialForm").submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);

        Swal.fire({
            title: "Submitting...",
            text: "Please wait while we save your testimonial.",
            allowOutsideClick: false,
            showConfirmButton: false,
            didOpen: () => { Swal.showLoading(); }
        });

        $.ajax({
            url: "{{ route('admin.testimonials.store') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                Swal.fire("Success!", response.message, "success").then(() => {
                    window.location.href = "{{ route('admin.testimonials.index') }}";
                });
            },
            error: function (xhr) {
                Swal.fire("Error!", "Something went wrong!", "error");
            }
        });
    });
});
</script>
