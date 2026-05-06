@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Service Categories</h1>
        <a href="{{ route('admin.service-category.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Item
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
    <input type="checkbox" class="toggle-status" data-id="{{ $category->id }}" {{ $category->status ? 'checked' : '' }} data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger">
</td>

                                <td>
                                    <a href="{{ route('admin.service-category.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.service-category.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
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
    $('.toggle-status').change(function () {
        var status = $(this).prop('checked') ? 1 : 0;
        var categoryId = $(this).data('id');

        $.ajax({
            type: "POST",
            url: "{{ route('admin.service-category.toggleStatus') }}",
            data: {
                _token: "{{ csrf_token() }}",
                status: status,
                id: categoryId
            },
            success: function (response) {
                alert(response.message); // You can replace with toastr if you use it
            },
            error: function () {
                alert("Something went wrong!");
            }
        });
    });
</script>
@include('layouts.footer')
