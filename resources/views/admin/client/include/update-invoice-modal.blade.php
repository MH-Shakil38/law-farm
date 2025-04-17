<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#invoice-generate-modal{{ $invoice->id }}"> <i class="far fa-edit"></i></button>
<div class="modal fade" id="invoice-generate-modal{{ $invoice->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
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
                            <form action="{{ route('update.invoice', $invoice->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post') {{-- For updating --}}

                                <div class="row">
                                    <input type="hidden" name="client_id" value="{{ $client->id }}">

                                    {{-- Amount --}}
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="">AMOUNT/MONTO</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input placeholder="EX:100" class="form-control" type="text" name="amount" value="{{ $invoice->amount ?? 0 }}" />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Date --}}
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" name="date" class="form-control" value="{{ \Carbon\Carbon::parse($invoice->date)->format('Y-m-d') }}">
                                        </div>
                                    </div>

                                    {{-- Type --}}
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select name="type" class="form-select">
                                                <option value="cash" {{ $invoice->type == 'cash' ? 'selected' : '' }}>Cash</option>
                                                <option value="zelle" {{ $invoice->type == 'zelle' ? 'selected' : '' }}>Zelle</option>
                                                <option value="cradit card" {{ $invoice->type == 'cradit card' ? 'selected' : '' }}>Cradit Card</option>
                                                <option value="bank deposit" {{ $invoice->type == 'bank deposit' ? 'selected' : '' }}>Bank Deposit</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Optional: File Upload --}}
                                    {{-- <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="file">File/Document</label>
                                            <input type="file" name="file" id="file" class="form-control" />
                                            @if ($invoice->file)
                                                <small>Current File: <a href="{{ asset('storage/' . $invoice->file) }}" target="_blank">View</a></small>
                                            @endif
                                        </div>
                                    </div> --}}

                                    {{-- Reffer By (optional) --}}
                                    {{-- <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer">Reffer By</label>
                                            <input type="text" name="reffer" id="reffer" class="form-control" value="{{ $invoice->reffer }}">
                                        </div>
                                    </div> --}}

                                    {{-- Income Type (optional) --}}
                                    {{-- <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="income_type">Income Type</label>
                                            <input type="text" name="income_type" id="income_type" class="form-control" value="{{ $invoice->income_type }}">
                                        </div>
                                    </div> --}}


                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">Note</label>
                                            <input name="note" class="form-control" />
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">Details</label>
                                            <textarea name="details" id="invoice-summernote" ></textarea>
                                        </div>
                                    </div> --}}

                                    {{-- Submit --}}
                                    <div class="form-group text-end">
                                        <button type="submit" class="btn btn-primary mt-3">Update</button>
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
