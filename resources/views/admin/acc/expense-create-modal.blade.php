<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#expense-create-modal"> <i class="fas fa-plus"></i> Add New </button>

<div class="modal fade" id="expense-create-modal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
aria-labelledby="expenseModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                aria-label="Close"></button></div>
        <div class="modal-body p-0">
            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                <h4 class="mb-1" id="expenseModalLabel">Add Expense</h4>
                <p class="fs-11 mb-0">Add by <a class="link-600 fw-semi-bold"
                        href="#!">{{ auth()->user()->name }}</a></p>
            </div>
            <div class="p-4">
                <div class="form">
                    <form action="{{ route('expenses.store') }}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="row">

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="">AMOUNT</label>
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
                            {{-- <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" value="{{ Carbon\Carbon::now() }}" name="date"
                                        id="date" class="form-control" placeholder="Enter date">
                                </div>
                            </div> --}}
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="expense_type">Expense Type</label>
                                    <select name="expense_type" id=""  class="form-select">
                                        <option value="rent">Rent including parking</option>
                                        <option value="utility">Utility bills</option>
                                        <option value="supplies">Supplies</option>
                                        <option value="salaries">Salaries</option>
                                        <option value="attorney referrer">Attorney Referrer fees</option>
                                        <option value="attorney retainer">Attorney Retainer fees</option>
                                        <option value="office food">Office lunch/food</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="taxes">Taxes</option>
                                        <option value="others">Others</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="type">Payment Type</label>
                                    <select name="payment_type" id="" class="form-select">
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
                                    <label for="note">Note</label>
                                    <textarea name="note" id="summernote" ></textarea>
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
