@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Marquee</h1>
        <a href="{{ route('admin.marquee.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>  

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="marqueeForm">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Item*</label>
                    <input type="text" name="item" class="form-control" id="item">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
  $('#marqueeForm').submit(function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: "{{ route('admin.marquee.store') }}",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            Swal.fire({
                title: "Success!",
                text: response.message,
                icon: "success",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.marquee.index') }}"; // Redirect to index page
                }
            });
        },
        error: function(error) {
            Swal.fire("Error!", "Something went wrong!", "error");
            console.log(error.responseJSON);
        }
    });
});
</script>

@include('layouts.footer')