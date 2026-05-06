
@include('layouts.header')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sliders</h1>
        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Item</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th style="
    width: 285px;
">Photo</th>
                            <th>Text</th>
                            <th>Banner Show</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $key => $slider)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ asset('storage/'.$slider->photo) }}" alt="" class="w-100" style="max-width: 200px;"></td>
                            <td>{{ $slider->text }}</td>
                            <td>
    <div class="form-check form-switch">
        <input class="form-check-input toggle-status" type="checkbox" 
            data-id="{{ $slider->id }}" 
            {{ $slider->status ? 'checked' : '' }}>
        <label class="form-check-label">
            {{ $slider->status ? 'Active' : 'Inactive' }}
        </label>
    </div>
</td>

                            <td>
                                <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm delete-slider" data-id="{{ $slider->id }}"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
 $('.toggle-status').change(function() {
    let id = $(this).data('id');
    let isChecked = $(this).prop('checked');
    let statusText = isChecked ? '' : '';

    $.ajax({
        url: "/admin/slider/" + id + "/toggle-status",
        type: "PATCH",
        data: { _token: "{{ csrf_token() }}" },
        success: function(response) {
            // Update label text
            $('input[data-id="' + id + '"]').next('.form-check-label').text(statusText);

            // SweetAlert Success Message
            Swal.fire({
                title: "Status Updated!",
                text: "Slider is now " + statusText,
                icon: isChecked ? "success" : "warning",
                confirmButtonText: "OK"
            });
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
});




</script>


<script>
$('.delete-slider').click(function() {
    let id = $(this).data('id');
    if (confirm('Are you sure?')) {
        $.ajax({
            url: "/slider/" + id,
            type: "DELETE",
            data: { _token: "{{ csrf_token() }}" },
            success: function(response) {
                location.reload();
            }
        });
    }
});



</script>

@include('layouts.footer')