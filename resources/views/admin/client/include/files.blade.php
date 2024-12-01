<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between bg-light-success" style="background: #adadad !important;">
        <h5 class="mb-0">All File's(Document's)</h5>
        <div id="table-customers-replace-element">
            <button data-bs-toggle="collapse" data-bs-target="#file-collapse" aria-expanded="true"
                aria-controls="file-collapse" class="btn btn-falcon-default btn-sm text-success collapsed"
                type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2"
                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""
                    style="transform-origin: 0.4375em 0.625em;">
                    <g transform="translate(224 256)">
                        <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                            <path fill="currentColor"
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                                transform="translate(-224 -256)"></path>
                        </g>
                    </g>
                </svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span
                    class="d-none d-sm-inline-block ms-1">Upload</span></button>

        </div>
    </div>
    <div class=" fs-10 p-0 mt-2">
        <div class="mb-2" id="accordionExample">

            <div class="accordion-item">
                <div class="accordion-collapse collapse" id="file-collapse"
                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('clients.file.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="client_id" value="{{ $client->id }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-lable" for="title">Title</label>
                                    <input type="text" name="title" placeholder="Enter file title"
                                        value="{{ isset($file) ? $file->title : '' }}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-lable" for="title">Date</label>
                                    <input type="date" name="date" placeholder="Enter file date"
                                        value="{{ isset($file) ? $file->date : '' }}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-lable" for="title">File</label>
                                    <input type="file" name="file" placeholder="Enter file title"
                                        value="{{ isset($file) ? $file->file : '' }}" class="form-control">
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-primary"> <i class="fas fa-plus"></i>
                                    Save</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>


        @forelse ($client->files as $info)
        <div class="dropdown font-sans-serif position-static"><button style="position: absolute;  right: 0px;"
            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
            type="button" id="customer-dropdown-0" data-bs-toggle="dropdown"
            data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg
                class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-10"
                aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="ellipsis-h" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                    d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                </path>
            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
        <div class="dropdown-menu dropdown-menu-end border py-0"
            aria-labelledby="customer-dropdown-0">
            <div class="py-2">
                @if (isset($type) && $type == 'Lawyer')
                <a class="dropdown-item text-success"  href="#">Rename</a>
                @else
                <a class="dropdown-item text-success"  href="#">Rename</a>
                @endif

                <a class="dropdown-item text-danger" href="#" onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'ClientFile', 'id' => $info->id]) }}')">
                Delete
             </a>
            </div>
        </div>
            <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300"
                target="_blank" href="{{ asset($info->file) }}">
                <div class="notification-avatar">
                    <div class="avatar avatar-xl me-3">
                        <div class="avatar-emoji rounded-circle "><span role="img"
                                aria-label="Emoji"> <i class="far fa-file-pdf text-danger"></i>
                            </span></div>
                    </div>
                </div>
                <div class="notification-body">
                    <p class="mb-1"><strong> {{ $info->title }}</strong></p>
                    <span
                        class="notification-time">{{ Carbon\Carbon::parse($info->created_at)->format('F j, g:i A') }}</span>
                </div>
            </a>



        </div>
        @empty
        @endforelse




    </div>
</div>
