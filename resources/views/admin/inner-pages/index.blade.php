@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Inner Pages</h1>
        <a href="{{ route('admin.inner-pages.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Add Page
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dtable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($innerPages as $key => $page)
                            <tr id="page-{{ $page->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $page->photo) }}" alt="{{ $page->title }}" width="80" height="80" class="img-thumbnail">
                                </td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.inner-pages.edit', $page->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm delete-page" data-id="{{ $page->id }}">
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
                {{ $innerPages->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

<script>
$(document).on('click', '.delete-page', function(e) {
    e.preventDefault();
    var page_id = $(this).data('id');

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
            $.ajax({
                url: '/inner-pages/' + page_id,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire("Deleted!", response.success, "success");
                    $('#page-' + page_id).remove();
                },
                error: function(response) {
                    Swal.fire("Error!", "Something went wrong.", "error");
                }
            });
        }
    });
});
</script>

@include('layouts.footer')
