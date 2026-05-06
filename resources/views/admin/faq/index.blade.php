@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">FAQ List</h1>
        <a href="{{ route('admin.faq.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Add New FAQ
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="faqTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $loop->iteration + ($faqs->currentPage() - 1) * $faqs->perPage() }}</td>
                            <td>{{ $faq->service->name ?? '-' }}</td>
                            <td>{{ $faq->question }}</td>
                            <td>{{ $faq->answer }}</td>
                            <td>
                                <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $faq->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center">
                    {!! $faqs->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Delete FAQ AJAX --}}
<script>
    $('.delete-btn').click(function () {
        let id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "This will permanently delete the FAQ.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/admin/faq/${id}`,
                    type: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        Swal.fire("Deleted!", response.message, "success").then(() => {
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
</script>

@include('layouts.footer')
