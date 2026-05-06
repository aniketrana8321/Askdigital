@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Testimonials</h1>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Testimonial
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-bordered">
               <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Image</th>
        <th>Links</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($testimonials as $key => $testimonial)
    <tr id="row-{{ $testimonial->id }}">
        <td>{{ $key + 1 }}</td>
        <td>{{ $testimonial->name }}</td>
        <td>{{ $testimonial->designation }}</td>
        <td>
            @if($testimonial->image)
                <img src="{{ asset('storage/'.$testimonial->image) }}" width="100" height="70" alt="Image">
            @else
                No Image
            @endif
        </td>
        <td>
            @if($testimonial->linkedin)
                <a href="{{ $testimonial->linkedin }}" target="_blank">LinkedIn</a><br>
            @endif
            @if($testimonial->facebook)
                <a href="{{ $testimonial->facebook }}" target="_blank">Facebook</a><br>
            @endif
            @if($testimonial->twitter)
                <a href="{{ $testimonial->twitter }}" target="_blank">Twitter</a>
            @endif
        </td>
        <td>
             <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-info btn-sm">
        <i class="fas fa-edit"></i>
    </a>
            <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $testimonial->id }}">
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

@include('layouts.footer')

<!-- SweetAlert and AJAX Script -->
<script>
    $(document).ready(function() {
        $('.delete-btn').on('click', function() {
            var testimonialId = $(this).data('id');

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
                        url: "{{ route('admin.testimonials.destroy', '') }}/" + testimonialId,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                $("#row-" + testimonialId).fadeOut(500, function() { $(this).remove(); });
                                Swal.fire("Deleted!", response.message, "success");
                            } else {
                                Swal.fire("Error!", response.message, "error");
                            }
                        },
                        error: function() {
                            Swal.fire("Error!", "Something went wrong.", "error");
                        }
                    });
                }
            });
        });
    });
</script>
