<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between bg-light-success" style="background: #adadad !important;">
        <h5 class="mb-0">Case Details</h5>
        <div id="table-customers-replace-element">
            <button data-bs-toggle="collapse" data-bs-target="#caseInfo" aria-expanded="true"
                aria-controls="caseInfo" class="btn btn-falcon-default btn-sm text-success collapsed"
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
                    class="d-none d-sm-inline-block ms-1">Update</span></button>

        </div>
    </div>
    <div class=" fs-10 p-0">
        <div class="" id="caseInfo">

            <div class="accordion-item">
                <div class="accordion-collapse collapse" id="caseInfo" aria-labelledby="heading2"
                    data-bs-parent="#caseInfo">
                    <div class="accordion-body" style="padding: 10px">
                        <form action="{{ route('clients.update', $client->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="client_id" value="{{ $client->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-lable" for="case_number">Case Number</label>
                                    <input type="text" name="case_number" placeholder="Enter Case Number"
                                        value="{{ isset($client) ? $client->case_number : '' }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-lable" for="case_number">Assing Lawyer</label>
                                    <select name="lawyer_id" id="" class="form-select">
                                        <option selected disabled>Select Lawyer</option>
                                        @forelse (lawyers() as $info)
                                            <option value="{{ $info->id }}"
                                                {{ $info->id == $client->lawyer_id ? 'selected' : '' }}>
                                                {{ $info->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label class="form-lable" for="case_number">Case</label>
                                    <select name="case_type" id="" class="form-select">
                                        <option selected disabled>Select Case</option>
                                        @forelse (caseTypes() as $info)
                                            <option value="{{ $info->id }}"
                                                {{ $info->id == $client->case_type ? 'selected' : '' }}>
                                                {{ $info->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>


                                <div class="col-md-6 mt-2">
                                    <label class="form-lable" for="date">Next Hearing Date</label>
                                    <input type="date" name="hearing_date" placeholder="Enter file title"
                                        value="{{ isset($client) ? $client->hearing_date : '' }}" class="form-control">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="timepicker1">Time</label>
                                    <input name="hearing_time" class="form-control datetimepicker" id="timepicker1"
                                        type="text" placeholder="H:i"
                                        value="{{ isset($client) ? $client->hearing_time : '' }}"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                </div>


                                <div class="col-md-12 mt-2">
                                    <label class="form-lable" for="title">Description</label>
                                    <textarea name="case_details" class="form-control" id="" rows="3" placeholder="Enter Short Description">{{ isset($client) ? $client->case_details : '' }}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button class="btn btn-primary form control"> <i class="fas fa-plus"> </i>
                                        {{ isset($client) ? 'Update' : 'Save' }}
                                    </button>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        <div class=" mb-3 mb-lg-0">

            <div class="fs-10 p-2">
                <p>{{ $client->short_details }}</p>
            </div>
        </div>
    </div>
</div>
<hr>
