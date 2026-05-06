@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portfolios</h1>
        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Add Portfolio
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
                        @foreach ($portfolios as $key => $portfolio)
                            <tr id="portfolio-{{ $portfolio->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $portfolio->photo) }}" class="magnific">
                                        <img src="{{ asset('storage/' . $portfolio->photo) }}" width="50">
                                    </a>
                                </td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->category->name }}</td>
                                <td>
                                    <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm delete-portfolio" data-id="{{ $portfolio->id }}">
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
    // Delete Portfolio with Ajax & SweetAlert
    $(document).on('click', '.delete-portfolio', function (e) {
        e.preventDefault();

        let portfolioId = $(this).data('id');
        let row = $('#portfolio-' + portfolioId);

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
                    url: "{{ route('admin.portfolio.destroy', '') }}/" + portfolioId,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Remove the row from the table
                        row.fadeOut(500, function () {
                            $(this).remove();
                        });
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: 'Something went wrong. Please try again.'
                        });
                    }
                });
            }
        });
    });
});
</script>

@include('layouts.footer')
