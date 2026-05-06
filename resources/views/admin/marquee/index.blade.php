@include('layouts.header')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Marquees</h1>
        <a href="{{ route('admin.marquee.create') }}" class="btn btn-primary shadow-sm">
    <i class="fas fa-plus"></i> Add Item
</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dtable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($marquees as $key => $marquee)
                        <tr id="row_{{ $marquee->id }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $marquee->item }}</td>
                             <!-- ✅ Status Toggle Button -->
                             <td>
            <div class="form-check form-switch">
                <input class="form-check-input toggle-status" type="checkbox" 
                    data-id="{{ $marquee->id }}" 
                    {{ $marquee->status ? 'checked' : '' }}>
                <label class="form-check-label">
                    {{ $marquee->status ? 'Active' : 'Inactive' }}
                </label>
            </div>
        </td>
                            <td>
                               <!-- Edit Button (Direct Link to Edit Page) -->
                               <a href="{{ route('admin.marquee.edit', $marquee->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $marquee->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
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
$(document).ready(function () {
    $('.toggle-status').change(function () {
        let id = $(this).data('id');
        let isChecked = $(this).prop('checked');
        let statusText = isChecked ? 'Active' : 'Inactive';

        $.ajax({
            url: "/admin/marquee/" + id + "/marquee-status", // ✅ Corrected Route
            type: "PATCH",
            data: { _token: "{{ csrf_token() }}" },
            success: function (response) {
                $('input[data-id="' + id + '"]').next('.form-check-label').text(statusText);
                Swal.fire({
                    title: "Status Updated!",
                    text: "Marquee is now " + statusText,
                    icon: isChecked ? "success" : "warning",
                    confirmButtonText: "OK"
                });
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});


</script>

<script>
   

    $('.delete-btn').click(function() {
        let id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/marquee/delete/" + id,
                    type: "DELETE",
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        Swal.fire("Deleted!", response.message, "success");
                        $("#row_" + id).remove();
                    }
                });
            }
        });
    });
</script>
@include('layouts.footer')
