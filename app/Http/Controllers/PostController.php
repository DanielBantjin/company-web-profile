<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = Storage::url($imagePath);

        $post = new Post();
        $post->Title = $request->title;
        $post->Content = $request->content;
        $post->Category = $request->category;
        $post->Tags = $request->tags;
        $post->Image_url = $imageUrl;

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post->Title = $request->title;
        $post->Content = $request->content;
        $post->Category = $request->category;
        $post->Tags = $request->tags;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = Storage::url($imagePath);
            $post->Image_url = $imageUrl;
        }

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }

    public function blog()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }

    public function readMore($id)
    {
        try {
            // Ambil data post berdasarkan ID
            $post = Post::findOrFail($id);
            // Kemudian tampilkan view readmore.blade.php dengan data $post
            return view('readmore', compact('post'));
        } catch (ModelNotFoundException $e) {
            // Handle jika post tidak ditemukan
            abort(404);
        }
    }
}
