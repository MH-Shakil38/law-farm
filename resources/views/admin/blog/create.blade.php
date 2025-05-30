@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}</h1>
    </div>
    <div class="card-body">
        <form action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($blog))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-4">
                    <select name="service_id" class="form-control">
                        <option selected disabled>Select Service</option>
                        @forelse($services as $service)
                            <option value="{{ $service->id }}"
                                {{ (isset($blog) && $blog->service_id == $service->id) ? 'selected' : '' }}>
                                {{ $service->name }}
                            </option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="col-md-8">
                    <input type="text" name="title" value="{{ old('title', $blog->title ?? '') }}" placeholder="Title" required class="form-control"><br>
                </div>
                <div class="col-md-12">
                    <textarea name="content" rows="5" required class="form-control" id="summernote">{{ old('content', $blog->content ?? '') }}</textarea><br>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image" class="form-control"><br>
                    @if(isset($blog) && $blog->image)
                        <img src="{{ asset($blog->image) }}" alt="Current Image" width="100">
                    @endif
                </div>
                <div class="col-md-8">
                    <input type="text" name="keyword" value="{{ old('keyword', $blog->keyword ?? '') }}" placeholder="keyword1,keyword2,..." class="form-control">
                </div>
                <div class="col-md-12 mt-2">
                    <label>
                        <input type="checkbox" name="published" {{ (isset($blog) && $blog->published) ? 'checked' : '' }}>
                        Publish
                    </label><br>
                </div>
            </div>

            <button type="submit" class="btn btn-{{ isset($blog) ? 'success' : 'primary' }}">
                {{ isset($blog) ? 'Update' : 'Create' }}
            </button>
        </form>
    </div>
</div>

<link href="{{ asset('/') }}vendors/choices/choices.min.css" rel="stylesheet" />
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Write Blog Here',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection
