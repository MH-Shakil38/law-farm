<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#expense-edit-modal{{ $info->id }}"> <i class="fas fa-edit"></i> </button>

<div class="modal fade" id="expense-edit-modal{{ $info->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
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
                    <form action="{{ route('expenses.update', $info->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="amount">AMOUNT</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input placeholder="EX:100" class="form-control" type="text" name="amount"
                                               value="{{ $info->amount }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="expense_type">Expense Type</label>
                                    <select name="expense_type" class="form-select">
                                        <option value="rent" {{ $info->expense_type == 'rent' ? 'selected' : '' }}>Rent including parking</option>
                                        <option value="utility" {{ $info->expense_type == 'utility' ? 'selected' : '' }}>Utility bills</option>
                                        <option value="supplies" {{ $info->expense_type == 'supplies' ? 'selected' : '' }}>Supplies</option>
                                        <option value="salaries" {{ $info->expense_type == 'salaries' ? 'selected' : '' }}>Salaries</option>
                                        <option value="attorney referrer" {{ $info->expense_type == 'attorney referrer' ? 'selected' : '' }}>Attorney Referrer fees</option>
                                        <option value="attorney retainer" {{ $info->expense_type == 'attorney retainer' ? 'selected' : '' }}>Attorney Retainer fees</option>
                                        <option value="office food" {{ $info->expense_type == 'office food' ? 'selected' : '' }}>Office lunch/food</option>
                                        <option value="marketing" {{ $info->expense_type == 'marketing' ? 'selected' : '' }}>Marketing</option>
                                        <option value="taxes" {{ $info->expense_type == 'taxes' ? 'selected' : '' }}>Taxes</option>
                                        <option value="others" {{ $info->expense_type == 'others' ? 'selected' : '' }}>Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="payment_type">Payment Type</label>
                                    <select name="payment_type" class="form-select">
                                        <option value="cash" {{ $info->payment_type == 'cash' ? 'selected' : '' }}>Cash</option>
                                        <option value="zelle" {{ $info->payment_type == 'zelle' ? 'selected' : '' }}>Zelle</option>
                                        <option value="credit card" {{ $info->payment_type == 'credit card' ? 'selected' : '' }}>Credit Card</option>
                                        <option value="bank deposit" {{ $info->payment_type == 'bank deposit' ? 'selected' : '' }}>Bank Deposit</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="edit-summernote{{ $info->id }}">{{ $info->note }}</textarea>
                                </div>
                            </div>

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
