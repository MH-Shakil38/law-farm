@if ($paginator->hasPages())
    <div class="card-footer d-flex align-items-center justify-content-center  m-auto">


        <div>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <button class="btn btn-sm btn-falcon-default me-1 disabled" title="Previous" disabled>
                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                            </path>
                        </svg>
                    </button>
                @else
                    <button class="btn btn-sm btn-falcon-default me-1 prev-page" title="Previous"
                        data-prev="{{ $paginator->currentPage() - 1 }}">
                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                            </path>
                        </svg>
                    </button>
                @endif

                {{-- Pagination Elements --}}
                @php
                    $start = max(1, $paginator->currentPage() - 4);
                    $end = min($start + 7, $paginator->lastPage());

                    if ($end - $start < 7) {
                        $start = max(1, $end - 7);
                    }
                @endphp

                @foreach (range($start, $end) as $page)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><button class="page" type="button"
                                data-page="{{ $page }}">{{ $page }}</button></li>
                    @else
                        <li><button class="page" type="button"
                                data-page="{{ $page }}">{{ $page }}</button></li>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button class="btn btn-sm btn-falcon-default ms-1 next-page" type="button" title="Next"
                        data-next="{{ $paginator->currentPage() + 1 }}">
                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </button>
                @else
                    <button class="btn btn-sm btn-falcon-default ms-1 next-page disabled" type="button" title="Next">
                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </button>
                @endif

            </ul>
            <div class="card-footer d-flex align-items-center justify-content-center  m-auto">
                <div class="d-block">
                    <p class="small text-muted">
                        Showing
                        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                        to
                        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                        of
                        <span class="fw-semibold">{{ $paginator->total() }}</span>
                        results
                    </p>
                </div>
            </div>
        </div>

    </div>
    <br>
@else
<div class="card-footer d-flex align-items-center justify-content-center  m-auto">
    <div class="d-block">
        <p class="small text-muted">
            Showing
            <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
            to
            <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
            of
            <span class="fw-semibold">{{ $paginator->total() }}</span>
            results
        </p>
    </div>
</div>

@endif
