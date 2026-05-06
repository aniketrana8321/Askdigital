@include('layouts.header')

<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Service Sub-Categories</h1>
    <a href="{{ route('admin.service_sub_category.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
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
                        <th>Name</th>
                        <th>Category</th>
                        <th>Service</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subCategories as $key => $subCategory)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <div class="photo-container-small">
                                <a href="{{ asset('storage/' . $subCategory->photo) }}" class="magnific">
                                    <img src="{{ asset('storage/' . $subCategory->photo) }}" alt="" width="50">
                                </a>
                            </div>
                        </td>
                        <td>{{ $subCategory->name }}</td>
                        <td>{{ $subCategory->category ? $subCategory->category->name : '' }}</td>
                        <td>{{ $subCategory->service ? $subCategory->service->name : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.service_sub_category.edit', $subCategory->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-danger btn-sm deleteSubCategory" data-id="{{ $subCategory->id }}">
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

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>
$(document).ready(function () {
    $(".deleteSubCategory").click(function () {
        let subCategoryId = $(this).data("id");
        let token = "{{ csrf_token() }}";
        let url = "{{ route('admin.service_sub_category.destroy', ':id') }}".replace(':id', subCategoryId);

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
                    text: "Please wait while the sub-category is being deleted.",
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
                            text: "The service sub-category has been deleted.",
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
