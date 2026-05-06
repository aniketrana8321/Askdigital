@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Marquee</h1>
        <a href="{{ route('admin.marquee.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All Items
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
        <form id="marqueeEditForm">
    @csrf
    <input type="hidden" name="_method" value="PUT"> <!-- ✅ Required for Laravel -->
    <input type="hidden" name="id" id="marquee_id" value="{{ $marquee->id }}">
    
    <div class="mb-3">
        <label class="form-label">Item*</label>
        <input type="text" name="item" class="form-control" id="item" value="{{ $marquee->item }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>

        </div>
    </div>
</div>

<script>
   $('#marqueeEditForm').submit(function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);
    let id = $('#marquee_id').val();
    
    $.ajax({
        url: "/marquee/update/" + id, 
        type: "POST",  // ✅ Laravel will detect `_method=PUT`
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            Swal.fire({
                title: "Updated!",
                text: response.message,
                icon: "success",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.marquee.index') }}"; 
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
