@include('layouts.header')

<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Services</h1>
    <a href="{{ route('admin.service.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
        <i class="fas fa-plus"></i> Add Item
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Banner</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Category</th> <!-- Added Category Column -->
<th>Status</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $key => $service)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <div class="photo-container-small">
                                <a href="{{ asset('storage/' . $service->photo) }}" class="magnific">
                                    <img src="{{ asset('storage/' . $service->photo) }}" alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="photo-container-small">
                                <a href="{{ asset('storage/' . $service->banner) }}" class="magnific">
                                    <img src="{{ asset('storage/' . $service->banner) }}" alt="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <i class="{{ $service->icon }} fz_40"></i>
                        </td>
                        <td>{{ $service->name }}</td>
                        
                        <!-- Display Service Category Name -->
                        <td>
                            {{ $service->category ? $service->category->name : '' }}
                        </td>
<td>
    <input type="checkbox" class="toggle-status" data-id="{{ $service->id }}" {{ $service->status ? 'checked' : '' }} data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger">
</td>

                        <td>
                            <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-danger btn-sm deleteService" data-id="{{ $service->id }}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
         <!-- Pagination -->
            <div class="d-flex justify-content-center">
              {{ $services->links('pagination::bootstrap-4') }}

            </div>
    </div>
</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>$('.toggle-status').change(function () {
    var status = $(this).prop('checked') ? 1 : 0;
    var serviceId = $(this).data('id');

    $.ajax({
        type: "POST",
       url: "{{ route('admin.service.toggleStatus') }}",
        data: {
            _token: "{{ csrf_token() }}",
            status: status,
            id: serviceId
        },
        success: function (response) {
            toastr.success(response.message);
        },
        error: function () {
            toastr.error("Something went wrong!");
        }
    });
});
</script>


<script>
$(document).ready(function () {
    $(".deleteService").click(function () {
        let serviceId = $(this).data("id");
        let token = "{{ csrf_token() }}";
        let url = "{{ route('admin.service.destroy', ':id') }}".replace(':id', serviceId);

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleting...",
                    text: "Please wait while the service is being deleted.",
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    url: url,
                    type: "DELETE",
                    data: {
                        _token: token
                    },
                    success: function (response) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "The service has been deleted.",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function () {
                        Swal.fire("Error!", "Something went wrong.", "error");
                    }
                });
            }
        });
    });
});
</script>

@include('layouts.footer')
