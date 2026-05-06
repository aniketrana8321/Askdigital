@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Brand Images</h1>
        <a href="{{ route('admin.home-brand-images.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Add Brand Image
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dtable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $key => $image)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $image->photo) }}" width="100" alt="No Image">
                            </td>
                            <td>
                                <a href="{{ route('admin.home-brand-images.edit', $image->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $image->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $images->links('pagination::bootstrap-4') }}
            </div>
       
        </div>
    </div>
</div>

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
                    url: `/admin/home-brand-images/${id}`,
                    type: "DELETE",
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        Swal.fire("Deleted!", response.message, "success");
                        location.reload();
                    }
                });
            }
        });
    });
</script>

@include('layouts.footer')
