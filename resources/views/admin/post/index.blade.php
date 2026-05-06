@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Posts</h1>
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary shadow-sm">
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
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key => $post)
                            <tr id="post-{{ $post->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $post->photo) }}" class="magnific">
                                        <img src="{{ asset('storage/' . $post->photo) }}" width="50">
                                    </a>
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name ?? 'Uncategorized' }}</td>
                                <td>
                                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm delete-post" data-id="{{ $post->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             <div class="d-flex justify-content-center">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

<script>
$(document).on('click', '.delete-post', function(e) {
    e.preventDefault();
    var post_id = $(this).data('id');

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
                url: '/post/' + post_id,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire("Deleted!", response.success, "success");
                    $('#post-' + post_id).remove();
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
