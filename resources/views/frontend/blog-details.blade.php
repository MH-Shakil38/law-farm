@extends('frontend.layouts.app')

@section('content')
<section class="top-position1 pt-0">

        <div class="page-title-section bg-img cover-background secondary-overlay" data-overlay-dark="8"
            data-background="{{ asset('v1') }}/img/bg-3.jpg"
            style="background-image: url({{ asset('v1') }}/img/bg-3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>{{ $blog->title }}</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb -->
        <div class="row mb-4">
            <div class="col-md-12">
                <ul class="breadcrumb bg-light p-2 rounded">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>
            </div>
        </div>
  <div class="container">
        <!-- News Details -->
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="news-details">
                    <!-- News Image -->
                    @if($blog->image)
                        <img src="{{ asset($blog->image) }}" class="img-fluid mb-3 rounded" alt="{{ $blog->title }}">
                    @endif

                    <!-- Title -->
                    <h1 class="mb-3">{{ $blog->title }}</h1>

                    <!-- Meta Info -->
                    <div class="mb-3 text-muted">
                        <small>
                            <i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('d M, Y') }}
                            |
                            @if($blog->service)
                                <i class="fas fa-folder"></i> {{ $blog->service->name }}
                            @endif
                        </small>
                    </div>

                    <!-- Excerpt -->
                    @if($blog->excerpt)
                        <p class="lead">{{ $blog->excerpt }}</p>
                    @endif

                    <!-- Full Content -->
                    <div class="news-body mt-4">
                        {!! $blog->content !!}
                    </div>

                    <!-- Tags / Keywords -->
                    @if($blog->keyword)
                        <div class="mt-4">
                            <strong>Tags:</strong>
                            @foreach(explode(',', $blog->keyword) as $tag)
                                <span class="badge bg-primary text-white">{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
    <div class="bg-light p-3 rounded">
        <h5 class="mb-3">Related Posts</h5>
        <ul class="list-unstyled">
            @foreach(blogs() as $info)
                @if($info->id !== $blog->id)
                    <li class="mb-3">
                        <a href="{{ route('blog.details', $info->slug) }}" class="d-flex text-decoration-none text-dark">
                            <!-- Image Column -->
                            <div class="col-4 pe-2">
                                <img src="{{ asset($info->image) }}" class="img-fluid rounded" alt="{{ $info->title }}" style="height: 70px;width:100%">
                            </div>

                            <!-- Title Column -->
                            <div class="col-8">
                                <strong>{{ $info->title }}</strong>
                                <br>
                                <small class="text-muted">{{ $info->created_at->format('d M, Y') }}</small>
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>

        </div>
    </div>
</section>
<style>
    .related-posts a {
    display: flex;
    gap: 10px;
    align-items: center;
}
.related-posts img {
    width: 100%;
    height: 70px;
    object-fit: cover;
}

</style>
@endsection
