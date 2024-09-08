@extends('layouts.admin')

@section('title', 'Admin Manage Settings')

@section('content')
<div class="col-md-12 mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Settings</h3>
        </div>
        <div class="card-body">
            <p class="card-text">This is the page where you can manage settings.</p>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Form to manage settings -->
            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="siteTitle" class="form-label">Site Title</label>
                    <input type="text" class="form-control" id="siteTitle" name="siteTitle" value="{{ old('siteTitle', $settings->SiteTitle) }}" required>
                </div>
                <div class="mb-3">
                    <label for="siteDescription" class="form-label">Site Description</label>
                    <textarea class="form-control" id="siteDescription" name="siteDescription" rows="3" required>{{ old('siteDescription', $settings->SiteDescription) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="siteLogo" class="form-label">Site Logo</label>
                    @if ($settings->SiteLogo)
                        <img src="{{ asset('storage/' . $settings->SiteLogo) }}" alt="Current Logo" style="max-width: 100px;">
                    @endif
                    <input type="file" class="form-control" id="siteLogo" name="siteLogo">
                    <small id="logoHelp" class="form-text text-muted">Upload a logo for your site.</small>
                </div>
                <div class="mb-3">
                    <label for="siteFavicon" class="form-label">Site Favicon</label>
                    @if ($settings->SiteFavicon)
                        <img src="{{ asset('storage/' . $settings->SiteFavicon) }}" alt="Current Favicon" style="max-width: 100px;">
                    @endif
                    <input type="file" class="form-control" id="siteFavicon" name="siteFavicon">
                    <small id="faviconHelp" class="form-text text-muted">Upload a favicon for your site.</small>
                </div>
                <button type="submit" class="btn btn-primary">Save Settings</button>
            </form>
        </div>
    </div>
</div>
@endsection
