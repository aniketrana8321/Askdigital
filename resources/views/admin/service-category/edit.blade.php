@include('layouts.header')

<div class="container">
    <h1 class="h3 mb-0 text-gray-800">Edit Service Category</h1>
    <a href="{{ route('admin.service-category.index') }}" class="btn btn-primary"><i class="fas fa-bars"></i> All Categories</a>

    <div class="card shadow mb-4 mt-4">
        <div class="card-body">
            <form action="{{ route('admin.service-category.update', $serviceCategory->id) }}" method="post">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $serviceCategory->name) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">SEO Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title', $serviceCategory->seo_title) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">SEO Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control" rows="3">{{ old('seo_meta_description', $serviceCategory->seo_meta_description) }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')
