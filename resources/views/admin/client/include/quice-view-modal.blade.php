{{-- button  start --}}
<a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $info->id }}"
    title="View Information">
    <i class="fas fa-eye"></i>
</a>


{{-- modal start --}}
<div class="modal fade details-modal" id="staticBackdrop{{ $info->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">

            <div class="modal-body p-0">

                <div class="p-4">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="clientInfoModalLabel">Client Information</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Personal Information Section -->
                        <h6 class="text-primary border-bottom pb-2 mb-3">Personal Information</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3"><strong>Name:</strong> {{ $info->name ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>First Name:</strong> {{ $info->first_name ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Last Name:</strong> {{ $info->last_name ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Date of Birth:</strong>
                                {{ $info->date_of_birth ? dateFormat($info->date_of_birth) : 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Gender:</strong> {{ $info->gender ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Nationality:</strong> {{ $info->nationality ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Passport Number:</strong>
                                {{ $info->passport_number ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Marital Status:</strong>
                                {{ $info->marrital_status ?? 'N/A' }}</div>
                        </div>

                        <!-- Contact Information Section -->
                        <h6 class="text-primary border-bottom pb-2 mb-3">Contact Information</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3"><strong>Email:</strong> {{ $info->email ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Phone:</strong> {{ $info->phone ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Alternate Phone:</strong> {{ $info->phone2 ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Address:</strong> {{ $info->address ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>City:</strong> {{ $info->city ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>State:</strong> {{ $info->state ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Zip Code:</strong> {{ $info->zip_code ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Country:</strong> {{ $info->country ?? 'N/A' }}</div>
                        </div>

                        <!-- Case Details Section -->
                        <h6 class="text-primary border-bottom pb-2 mb-3">Case Information</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3"><strong>Last Update:</strong> {{ $info->last_update ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Case Type:</strong> {{ $info->caseType->name ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Case Number:</strong> {{ $info->case_number ?? 'N/A' }}
                            </div>
                            <div class="col-12 mb-3"><strong>Case Details:</strong> {{ $info->case_details ?? 'N/A' }}
                            </div>
                            <div class="col-12 mb-3"><strong>Short Details:</strong>
                                {{ $info->short_details ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Hearing Date:</strong>
                                {{ $info->hearing_date ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Hearing Time:</strong>
                                {{ $info->hearing_time ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Alien Number:</strong>
                                {{ $info->alien_number ?? 'N/A' }}</div>
                        </div>

                        <!-- Additional Information Section -->
                        <h6 class="text-primary border-bottom pb-2 mb-3">Additional Information</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3"><strong>Referred By:</strong> {{ $info->ref_by ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Direction:</strong> {{ $info->direction ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Lawyer ID:</strong> {{ $info->lawyer->name ?? 'N/A' }}
                            </div>
                            <div class="col-md-6 mb-3"><strong>Status:</strong>
                                {{ $info->status == 1 ? 'Active' : 'Inactive' }}</div>
                            <div class="col-md-6 mb-3"><strong>Created By:</strong>
                                {{ $info->createdBy->name ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3"><strong>Updated By:</strong>
                                {{ $info->updatedBy->name ?? 'N/A' }}</div>
                            <div class="col-md-6 mb-3">
                                <strong>Image:</strong>
                                @if ($info->image)
                                    <img src="{{ asset('uploads/' . $info->image) }}" alt="Client Image"
                                        class="img-fluid rounded" width="100">
                                @else
                                    N/A
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-info" target="_blank" href="{{ route('client.agreement',$info->id) }}">Agreement</a>
                        {{-- <a  onclick="confirmLink(event, '{{ route('clients.aprove', $info->id) }}')"
                            href="{{ route('clients.aprove', $info->id) }}" class="btn btn-primary">Recived</a> --}}
                            @php
                                $route = Route::currentRouteName();
                            @endphp
                        <a href="{{ route('print.client-info',['type'=> $route == "clients.index"? '' : 'tmp','id'=>$info->id]) }}" class="btn btn-warning">Print</a>
                        <a onclick="change_status(event, '{{ route('change.status', ['model' => 'TmpClient', 'id' => $info->id]) }}','Remove to Pending list')" type="button" class="btn btn-danger" data-bs-dismiss="modal">Move Pending List</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
