@extends('layouts.admin')

@section('title', 'Admin Manage Posts')

@section('content')
<div class="col-md-12">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Manage Posts</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                                <td>{{ $post->Title }}</td>
                                <td>{{ Str::limit($post->Content, 50) }}</td>
                                <td>{{ $post->Category }}</td>
                                <td>{{ $post->Tags }}</td>
                                <td><img src="{{ asset($post->Image_url) }}" alt="Post Image" style="max-width: 100px;"></td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $post->PostID) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.posts.destroy', $post->PostID) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
