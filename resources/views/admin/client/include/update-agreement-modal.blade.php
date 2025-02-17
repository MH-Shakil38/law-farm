<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#agreement-update-modal">Update
    Agreement</button>
<div class="modal fade" id="agreement-update-modal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="agreement-update-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="model-header p-2" style="padding: 1.5rem">
                <h5 class="modal-title" id="agreement-update-modalLabel" class="p4">Update Agreement</h5>
            </div>
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                    <div class="">
                        <div class="">
                            <form action="{{ route('client.agreement.update') }}" method="POST" class="dropzone dropzone-multiple p-0"
                                id="my-awesome-dropzone" data-dropzone="data-dropzone" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $client->id }}" name="client_id">

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">SIJS</label> <br>
                                            <div class="input-group mb-3"><span class="input-group-text">SISJ: </span><input value="{{ @$client->agreement->sijs }}" class="form-control" type="text" aria-label="Amount (to the nearest dollar)" name="sijs" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">TOTAL AMOUNT</label>
                                            <div class="input-group mb-3"><span class="input-group-text">$</span><input value="{{ @$client->agreement->total_amount }}" class="form-control" type="text" aria-label="Amount (to the nearest dollar)" name="total_amount" /></div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">File</label>
                                            <input type="file" class="form-control-lg" name="file">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">File</label>
                                            <input type="file" class="form-control-lg" name="client_signature">
                                        </div>
                                    </div> --}}

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Details</label>
                                            <textarea id="summernote" name="details">{!! @$client->agreement->details !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-2 float-end">
                                        <div class="form-group float-end">

                                            <button class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
