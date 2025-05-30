<div class="card mb-3">
    <div class="card-header  d-flex justify-content-between ">
        <h5 class="mb-0">Case Update</h5>
        <div id="table-customers-replace-element">
            <button data-bs-toggle="collapse" data-bs-target="#caseInfo" aria-expanded="true" aria-controls="caseInfo"
                class="btn btn-falcon-default btn-sm text-success collapsed"
                type="button"><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span
                    class="d-none d-sm-inline-block ms-1"><span class="fas fa-chevron-down"></span></span></button>

        </div>
    </div>
    <div class=" fs-10 p-0">
        <div class="collapse show" id="caseInfo">

            <div class="accordion-item">
                <div class="accordion-collapse collapse show" id="caseInfo" aria-labelledby="heading2"
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
                                    <label class="form-lable" for="case_number">Handle By</label>
                                    <select name="lawyer_id" id="lawyer_option" class="form-select">
                                        @include('admin.lawyer.option',['lawyer'=>$client->lawyer])
                                    </select>
                                </div>
                                {{-- <div class="col-md-1 mt-4">
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lawyerModal">
                                        New</a>
                                </div> --}}

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

                                {{-- <div class="col-md-12 mt-2">
                                    <label class="form-lable" for="title">Last Update</label>
                                    <textarea name="last_update" class="form-control" id="" rows="2" placeholder="Enter Short Description">{{ isset($client) ? $client->last_update : '' }}</textarea>
                                </div> --}}

                                <div class="col-md-12 mt-2">
                                    <label class="form-lable" for="title">Description</label>
                                    <textarea name="case_details" class="form-control" id="" rows="3" placeholder="Enter Short Description">{{ isset($client) ? $client->case_details : '' }}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button class="btn btn-primary form control float-end"> <i class="fas fa-plus"> </i>
                                        {{ isset($client) ? 'Update' : 'Save' }}
                                    </button>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        {{-- <div class=" mb-3 mb-lg-0">

            <div class="fs-10 p-2">
                <p>{{ $client->short_details }}</p>
            </div>
        </div> --}}
    </div>
</div>
<hr>


{{-- Layer add modal --}}
<div class="modal fade" id="lawyerModal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base cancelBtn"
                    data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <div class="card">
                    <div class="card-body">
                        <h4>Add New Lawyer</h4>
                        <hr>
                        <form id="lawyerForm" action="{{ route('lawyers.store') }}" method="POST">
                            <div class="row p-4">
                                <div class="col-md-6 mt-2">
                                    <input type="hidden" class="client_id" id="client_id" value="{{ $client->id }}">
                                    <label class="form-label" for="name">Lawyer Name</label><br>
                                    <input type="text" name="name" class="form-control-lg " id="name"
                                        placeholder="Enter Name">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="email">Email</label><br>
                                    <input type="text" name="email" class="form-control-lg " id="email"
                                        placeholder="Enter Email">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="phone">Phone</label><br>
                                    <input type="text" name="phone" class="form-control-lg" id="phone"
                                        placeholder="Enter Phone">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="lawyer_type">Case Type</label><br>
                                    <select name="case_type" id="case_type" class="form-control-lg">
                                        <option selected disabled>Select One</option>
                                        @forelse (caseTypes() as $info)
                                            <option value="{{ $info->id }}">{{ $info->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-info float-end">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    input,
    select {
        width: 100%;
    }
</style>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('#lawyerForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Collect form data
            const formData = {
                name: $('#name').val(),
                client_id: $('#client_id').val(),
                case_type: $('#case_type').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                lawyer_type: $('#lawyer_type').val(),
                _token: "{{ csrf_token() }}" // For Laravel, include CSRF token
            };

            // AJAX request
            $.ajax({
                url: $(this).attr('action'), // Use the form's action attribute as the endpoint
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // Show success notification
                    toastr.success('Lawyer added successfully!', 'Success');

                    // Close the modal
                    $('#lawyerModal').modal('hide');

                    // remove modal show class
                    $('#lawyerModal').removeClass('show');

                    // Optionally, reset the form
                    $('#lawyerForm')[0].reset();

                    //apend lawyer
                    $('#lawyer_option').html(response.lawyer)

                },
                error: function(xhr, status, error) {
                    // Handle error response
                    alert('An error occurred. Please try again.');
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
