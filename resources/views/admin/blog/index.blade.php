@extends('admin.layouts.app')

@section('content')
<div class="container">
 <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Blog List</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-success">Create Blog</a>
</div>

    <div class="row">
        @forelse ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($blog->image)
                        <img src="{{ asset($blog->image) }}" class="card-img-top" alt="{{ $blog->title }}" height="220px">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ Str::limit($blog->excerpt, 100) }}</p>

                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published: {{ $blog->published ? 'Yes' : 'No' }}</small>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>No blogs available.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
