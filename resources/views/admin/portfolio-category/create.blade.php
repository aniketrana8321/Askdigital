@include('layouts.header')


<div class="container">
    <h1 class="h3 mb-0 text-gray-800">Create Portfolio Category</h1>
    <a href="{{ route('admin.portfolio-category.index') }}" class="btn btn-primary"><i class="fas fa-bars"></i> All Categories</a>

    <div class="card shadow mt-4">
        <div class="card-body">
            <form action="{{ route('admin.portfolio-category.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>SEO Title</label>
                    <input type="text" name="seo_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')