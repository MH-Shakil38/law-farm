<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between" style="background: #adadad !important;">
        <h5 class="mb-0">Court hearing history</h5>
        <div id="table-customers-replace-element">
            <button data-bs-toggle="collapse" data-bs-target="#hearing-collapse" aria-expanded="true"
                aria-controls="hearing-collapse" class="btn btn-falcon-default btn-sm text-success collapsed"
                type="button">
                 {{-- <i class="fas fa-plus"></i> --}}
                  <span  class="d-none d-sm-inline-block"><i class="fas fa-angle-down"></i></span> Add New</button>

        </div>
    </div>
    <div class="fs-10 p-0 ">
        <div class="" id="accordionExample">

            <div class=" accordion-item" style="padding: 10px">
                <div class="accordion-collapse collapse {{ isset($hearing) ? 'show' : '' }}" id="hearing-collapse"
                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body card-body">
                        @isset($hearing)
                            <form action="{{ route('clients.hearing.update', $hearing->id) }}" method="POST"
                                enctype="multipart/form-data">
                            @else
                                <form action="{{ route('clients.hearing.date') }}" method="POST"
                                    enctype="multipart/form-data">
                                @endisset

                                @csrf
                                <input type="hidden" name="client_id" value="{{ $client->id }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-lable" for="title">Title</label>
                                        <input type="text" name="title" placeholder="Enter file title"
                                            value="{{ isset($hearing) ? $hearing->title : '' }}" class="form-control">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-lable" for="date">Hearing Date</label>
                                        <input type="date" name="date" placeholder="Enter file title"
                                            value="{{ isset($hearing) ? $hearing->date : '' }}" class="form-control">
                                    </div>
                                    {{-- <div class="col-md-6 mt-2">
                                        <label class="form-label" for="timepicker1">Time</label>
                                        <input name="time" class="form-control datetimepicker" id="timepicker1"
                                            type="text" placeholder="H:i" value="{{ isset($hearing) ? $hearing->time : '' }}"
                                            data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                    </div> --}}

                                    <div class="col-md-6 mt-2">
                                        <label class="form-label" for="file">Document</label>
                                        <input type="file" name="file" placeholder="Enter file title"
                                            class="form-control">
                                    </div>
                                    
                                    <div class="col-md-12 mt-2">
                                        <label class="form-lable" for="title">Last Case Update</label>
                                        <textarea name="last_update" class="form-control" id="" rows="2" placeholder="Enter short case update">{{ isset($hearing) ? $hearing->Last_update : '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-lable" for="title">Description</label>
                                        <textarea name="description" class="form-control" id="" rows="3" placeholder="Enter Short Description">{{ isset($hearing) ? $hearing->description : '' }}</textarea>
                                    </div>
                                    <div class="col-md-12 mt-2 ">
                                        <button class="btn btn-primary form control float-end"> <i class="fas fa-plus"> </i>
                                            {{ isset($hearing) ? 'Update' : 'Save' }}
                                        </button>
                                        @isset($hearing)
                                            <a href="{{ route('clients.show', $hearing->client_id) }}"
                                                class="btn btn-danger float-end">Cancel</a>
                                        @endisset
                                    </div>

                                </div>
                            </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

    @forelse ($client->hearing->reverse() as $info)
   

        <div class="accordion" id="accordionExample{{ $info->id }}">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne{{ $info->id }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" style="padding: 5px"
                        data-bs-target="#collapseOne{{ $info->id }}" aria-expanded="true"
                        aria-controls="collapseOne{{ $info->id }}">
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
                                    </a>
                                </h6>
                                <p class="mb-1"><strong class="text-bold">Created By:</strong><a href="#!"
                                        class="text-700">{{ $info->createdBy->name ?? '' }}</a>
                                </p>
                                {{-- <p class="text-1000 mb-0"><strong class="text-bold">Time:</strong>
                                    {{ Carbon\Carbon::parse($info->time ?? '')->format('H:i') }}
                                </p> --}}
                                <p class="text-1000 mb-0"><strong class="text-bold">Date:</strong>
                                    {{ Carbon\Carbon::parse($info->date)->format('d M y') }}
                                </p>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="collapseOne{{ $info->id }}" class="accordion-collapse collapse"
                    aria-labelledby="headingOne{{ $info->id }}"
                    data-bs-parent="#accordionExample{{ $info->id }}">
                    <div class="accordion-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>Description: </th>
                                <td>{{ $info->description }}</td>
                            </tr>
                            <tr>
                                <th>Last Update: </th>
                                <td>{{ $info->Last_update ?? '' }}</td>
                            </tr>
                            {{-- <tr>
                                <th>Documents: </th>
                                <td>{{ $info->file->file ?? '' }}</td>
                            </tr> --}}
                        </table>

                        <div class="p-2">
                            <a class="btn btn-falcon-default btn-sm px-3 ms-2" type="button" href="{{ route('clients.hearing.edit',$info->id) }}">Edit</a>
                            <a class="btn btn-falcon-default btn-sm px-3 ms-2" type="button" href="#" onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'Hearing', 'id' => $info->id]) }}')">Delete</a>
                            <div class="border-bottom border-dashed my-4 d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @empty
    @endforelse

</div>
<hr>
