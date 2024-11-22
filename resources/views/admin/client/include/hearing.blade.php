<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between">
        <h5 class="mb-0">Court hearing history</h5>
        <div id="table-customers-replace-element">
            <button data-bs-toggle="collapse" data-bs-target="#hearing-collapse" aria-expanded="true"
                aria-controls="hearing-collapse"
                class="btn btn-falcon-default btn-sm text-success collapsed" type="button"><svg
                    class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2"
                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                    data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;">
                    <g transform="translate(224 256)">
                        <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                            <path fill="currentColor"
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                                transform="translate(-224 -256)"></path>
                        </g>
                    </g>
                </svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span
                    class="d-none d-sm-inline-block ms-1">Add Court hearing history</span></button>

        </div>
    </div>
    <div class="card-body fs-10 p-0">
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <div class="accordion-collapse collapse" id="hearing-collapse"
                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('clients.hearing.date') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="client_id" value="{{ $client->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-lable" for="title">Title</label>
                                    <input type="text" name="title"
                                        placeholder="Enter file title" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-lable" for="date"> Date</label>
                                    <input type="date" name="date"
                                        placeholder="Enter file title" class="form-control">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="timepicker1">Time</label>
                                    <input name="time" class="form-control datetimepicker"
                                        id="timepicker1" type="text" placeholder="H:i"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="file">File's</label>
                                    <input type="file" name="file"
                                    placeholder="Enter file title" class="form-control">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label class="form-lable" for="title">Description</label>
                                    <textarea name="description" class="form-control" id="" rows="3"
                                        placeholder="Enter Short Description"></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button class="btn btn-primary form control"> <i
                                            class="fas fa-plus"> </i> Save
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        <div class="card mb-3 mb-lg-0">

            <div class="card-body fs-10">
                <div class="row">
                    @forelse ($client->hearing->reverse() as $info)
                        <div class="col-md-12 h-100">
                            <div class="d-flex btn-reveal-trigger">
                                <div class="calendar"><span
                                        class="calendar-month">{{ Carbon\Carbon::parse($info->date)->format('M') }}</span><span
                                        class="calendar-day">{{ Carbon\Carbon::parse($info->date)->format('d') }}</span>
                                </div>
                                <div class="flex-1 position-relative ps-3">
                                    {{-- @php
                                        $nextHearing = $client->hearing
                                            ->filter(
                                                fn($info) => \Carbon\Carbon::parse(
                                                    $info->date,
                                                )->isFuture(),
                                            ) // Only future dates
                                            ->sortBy(
                                                fn($info) => \Carbon\Carbon::parse($info->date),
                                            ) // Sort by date
                                            ->first(); // Get the nearest date
                                    @endphp --}}

                                    <h6 class="fs-9 mb-0"><a href="#">
                                            {{ $info->title }}
                                            <br>
                                            @if (\Carbon\Carbon::parse($info->date)->isToday())
                                            <span class="badge badge-subtle-danger rounded-pill">Today</span>
                                        @elseif (\Carbon\Carbon::parse($info->date)->isFuture() && $loop->first)
                                            <span class="badge badge-subtle-success rounded-pill">Next Hearing</span>
                                        @endif
                                        </a>
                                    </h6>
                                    <p class="mb-1"><strong class="text-bold">Created By:</strong><a href="#!"
                                            class="text-700">{{ $info->createdBy->name ?? '' }}</a>
                                    </p>
                                    <p class="text-1000 mb-0"><strong class="text-bold">Time:</strong>
                                        {{ Carbon\Carbon::parse($info->time ?? '')->format('H:i') }}
                                    </p>
                                    <p class="text-1000 mb-0"><strong class="text-bold">Date:</strong>
                                        {{ Carbon\Carbon::parse($info->date)->format('d M y') }}
                                    </p>
                                    {{ $info->description ?? '' }}
                                    <div class="border-bottom border-dashed my-3"></div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
