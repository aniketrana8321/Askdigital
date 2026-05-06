@include('layouts.header')

<div class="container">
    <h1 class="h3 mb-0 text-gray-800">Portfolio Categories</h1>
    <a href="{{ route('admin.portfolio-category.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Category</a>

    <div class="card shadow mt-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>SEO Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->seo_title }}</td>
                        <td>
                            <a href="{{ route('admin.portfolio-category.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.portfolio-category.destroy', $category) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('layouts.footer')