<!-- resources/views/admin/posts/create.blade.php -->

@extends('layouts.admin')

@section('title', 'Create New Post')

@section('content')
    <div class="col-md-9">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Create New Post</h3>
            </div>
            <div class="card-body">
                <!-- Form for creating a new post -->
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
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
                    <div class="form-group mb-3">
                        <label for="tags">Tags</label>
                        <input type="text" id="tags" name="tags" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Create Post</button>                                    
                </form>
            </div>
        </div>
    </div>
@endsection
