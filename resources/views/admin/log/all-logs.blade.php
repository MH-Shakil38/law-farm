@extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between">
        <h5 class="mb-0">Activity log</h5><a class="font-sans-serif"
            href="../../app/social/activity-log.html">All logs</a>
    </div>
    <div class="card-body fs-10 p-0">
        
        @forelse (auth()->user()->logs as $info)
            <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                href="{{ $info->url }}">
                <div class="notification-avatar">
                    <div class="avatar avatar-xl me-3">
                        <div class="avatar-emoji rounded-circle "><span role="img"
                                aria-label="Emoji">🏷️</span></div>
                    </div>
                </div>
                <div class="notification-body">
                    <p class="mb-1"><strong>{{ $info->description }}</strong></p>
                    <span class="notification-time">{{ Carbon\Carbon::parse($info->created_at)->format('M d, h:m A') }}</span>
                </div>
            </a>
        @empty
        @endforelse
    </div>
</div>
@endsection
