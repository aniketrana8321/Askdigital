<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = PostCategory::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts',
            'description' => 'required',
            'post_category_id' => 'required|exists:post_categories,id',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string|max:500',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:4048',
        ]);

        $photoPath = $request->file('photo')->store('uploads/posts', 'public');

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'post_category_id' => $request->post_category_id,
            'seo_title' => $request->seo_title,
            'seo_meta_description' => $request->seo_meta_description,
            'photo' => $photoPath,
        ]);

        return response()->json(['success' => true, 'message' => 'Post created successfully.']);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = PostCategory::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'post_category_id' => 'required|exists:post_categories,id',
            'description' => 'required|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_description' => 'nullable|string|max:500',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048'
        ]);

        $post->title = $request->title;
        $post->post_category_id = $request->post_category_id;
        $post->description = $request->description;
        $post->seo_title = $request->seo_title;
        $post->seo_meta_description = $request->seo_meta_description;

        if ($request->hasFile('photo')) {
            if ($post->photo) {
                Storage::delete('' . $post->photo);
            }
            $photoPath = $request->file('photo')->store('uploads/posts', 'public');
            $post->photo = $photoPath;
        }

        $post->save();

        return response()->json([
            'message' => 'Post updated successfully!',
            'post' => $post
        ]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->photo) {
            Storage::delete('' . $post->photo);
        }

        $post->delete();

        return response()->json(['success' => 'Post deleted successfully']);
    }
}
