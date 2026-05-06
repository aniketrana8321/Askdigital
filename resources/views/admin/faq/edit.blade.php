@include('layouts.header')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit FAQ</h1>
        <a href="{{ route('admin.faq.index') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-bars"></i> All FAQs
        </a>
    </div>  

    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="faqEditForm">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="service_id" class="form-label">Select Service*</label>
                    <select name="service_id" class="form-control" required>
                        <option value="">-- Select Service --</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" {{ $faq->service_id == $service->id ? 'selected' : '' }}>
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="question" class="form-label">Question*</label>
                    <input type="text" name="question" class="form-control" value="{{ $faq->question }}" required>
                </div>

                <div class="mb-3">
                    <label for="answer" class="form-label">Answer*</label>
                    <textarea name="answer" class="form-control" required>{{ $faq->answer }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update FAQ</button>
            </form>
        </div>
    </div>
</div>

<script>
    $('#faqEditForm').submit(function(e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
            url: "{{ route('admin.faq.update', $faq->id) }}",
            type: "POST",
            data: formData,
            success: function(response) {
                Swal.fire("Updated!", response.message ?? "FAQ updated successfully", "success").then(() => {
                    window.location.href = "{{ route('admin.faq.index') }}";
                });
            },
            error: function(xhr) {
                let message = "Something went wrong!";
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                Swal.fire("Error!", message, "error");
            }
        });
    });
</script>

@include('layouts.footer')
