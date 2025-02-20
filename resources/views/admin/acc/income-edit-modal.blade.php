
<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#income-edit-modal{{ $info->id }}"> <i class="fas fa-edit"></i> </button>

<div class="modal fade" id="income-edit-modal{{ $info->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
aria-labelledby="incomeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                aria-label="Close"></button></div>
        <div class="modal-body p-0">
            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                <h4 class="mb-1" id="incomeModalLabel">Add Income</h4>
                <p class="fs-11 mb-0">Add by <a class="link-600 fw-semi-bold"
                        href="#!">{{ auth()->user()->name }}</a></p>
            </div>
            <div class="p-4">
                <div class="form">
                    <form action="{{ route('store.invoice') }}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="client_id">Client</label>
                                    <select name="client_id" id="" class="form-select">
                                        <option disabled selected value="">Select Client</option>
                                        @forelse(clients() as $client)
                                            <option {{ $info->client_id == $client->id ? 'selected' : ''}} value="{{ $client->id }}">{{ $client->name }}</option>
                                        @empty
                                        @endforelse

                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="">AMOUNT/MONTO</label>
                                        <div class="input-group mb-3"><span class="input-group-text">$</span><input placeholder="EX:100" class="form-control" type="text" aria-label="Amount (to the nearest dollar)" name="amount" value="{{ $info->amount }}"/></div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="reffer_by">Reffer By</label>
                                    <input type="text" name="reffer_by" id="reffer_by" class="form-control"
                                        placeholder="Enter Amount">
                                </div>
                            </div> --}}
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" value="{{ $info->date }}" name="date"
                                        id="date" class="form-control" placeholder="Enter date" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="reffer_by">Type</label>
                                    <select name="type" id="" class="form-select">
                                        <option {{ $info->client_id == 'cash' ? 'selected' : ''}} value="cash">Cash</option>
                                        <option {{ $info->client_id == 'Zelle' ? 'selected' : ''}} value="zelle">Zelle</option>
                                        <option {{ $info->client_id == 'cradit card' ? 'selected' : ''}} value="cradit card">Cradit Card</option>
                                        <option {{ $info->client_id == 'bank deposit' ? 'selected' : ''}} value="bank deposit">Bank Deposit</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="reffer_by">File/Document</label>
                                    <input type="file" name="file" id="file" class="form-control"
                                        rows="3" />
                                </div>
                            </div> --}}
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="reffer_by">Note</label>
                                    <textarea name="note" id="edit-summernote{{ $info->id }}" >{{ @$info->note }}</textarea>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
     $(document).ready(function() {
            $('#edit-summernote{{ $info->id }}').summernote({
                placeholder: 'Enter Your payment note',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
</script>
