@extends('layouts.admin')

@section('title', 'Admin Manage Posts')

@section('content')
    <div class="col-md-9">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Manage Posts</h3>
            </div>
            <div class="card-body">
                <p class="card-text">This is the page where you can manage posts.</p>
                <!-- Link to create new post -->
                <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

                <!-- Table to display post data -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->content, 50) }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->tags }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Additional content can be placed here -->
            </div>
        </div>
    </div>
@endsection
