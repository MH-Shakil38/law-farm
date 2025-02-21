<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#invoice-generate-modal"> <i class="fas fa-plus"></i> </button>
<div class="modal fade" id="invoice-generate-modal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="invoice-generate-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="model-header p-2" style="padding: 1.5rem">
                <h5 class="modal-title" id="invoice-generate-modalLabel" class="p-4">Generate Invoice</h5>
            </div>
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                    <div class="">
                        <div class="row">

                        </div>
                        <div class="">
                            <form action="{{ route('store.invoice') }}" method="post" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="">AMOUNT/MONTO</label>
                                                <div class="input-group mb-3"><span class="input-group-text">$</span><input placeholder="EX:100" class="form-control" type="text" aria-label="Amount (to the nearest dollar)" name="amount" /></div>
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
                                            <input type="date" value="{{ now()->format('Y-m-d') }}" name="date"
                                                id="date" class="form-control" placeholder="Enter date">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">Type</label>
                                            <select name="type" id="" class="form-select">
                                                <option value="cash">Cash</option>
                                                <option value="zelle">Zelle</option>
                                                <option value="cradit card">Cradit Card</option>
                                                <option value="bank deposit">Bank Deposit</option>
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
                                            <input name="note" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">Details</label>
                                            <textarea name="details" id="invoice-summernote" ></textarea>
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
</div>
