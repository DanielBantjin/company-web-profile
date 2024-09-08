@extends('layouts.admin')
@section('title', 'Edit Post')
@section('content')
    <div class="col-md-9">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Edit Post</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('admin.posts.update', $post->PostID) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="file" class="form-control" id="image_url" name="image_url">
                        @if ($post->image_url)
                            <img src="{{ asset('storage/' . $post->image_url) }}" alt="Current Image" width="100">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-select" id="category" name="category" required>
                            <option selected disabled>Select Category</option>
                            <option value="news">News</option>
                            <option value="updates">Updates</option>
                            <option value="events">Events</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="tags" name="tags" value="{{ $post->tags }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
