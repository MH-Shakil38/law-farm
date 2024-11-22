<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between">
        <h5 class="mb-0">ALL FILE (Document's)</h5>
        <div id="table-customers-replace-element">
            <button data-bs-toggle="collapse" data-bs-target="#file-collapse" aria-expanded="true"
                aria-controls="file-collapse"
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
                    class="d-none d-sm-inline-block ms-1">ADD NEW FILE</span></button>

        </div>
    </div>
    <div class="card-body fs-10 p-0">
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <div class="accordion-collapse collapse" id="file-collapse"
                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('clients.file.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="client_id" value="{{ $client->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="title"
                                        placeholder="Enter file title" class="form-control">
                                </div>
                                <div class="col-md-5">
                                    <input type="file" name="file"
                                        placeholder="Enter file title" class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-primary"> <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>


        @forelse ($client->files as $info)
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
        @empty
        @endforelse




    </div>
</div>
