@extends('admin.layouts.app')

@section('content')
    <div class="card mt-4">
        <div id="tableExample4 " data-list='{"valueNames":["name","country","email","payment"]}'>
            <div class="row mt-2 justify-content-end justify-content-end gx-3 gy-0 px-3">
                <div class="col-sm-auto"><select class="form-select form-select-sm mb-3" data-list-filter="country">
                        <option selected="" value="">Select country</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                        <option value="uk">UK</option>
                    </select></div>
                <div class="col-sm-auto"><select class="form-select form-select-sm mb-3" data-list-filter="payment">
                        <option selected="" value="">Select Type</option>
                        <option value="cash">Cash</option>
                        <option value="zelle">Zelle</option>
                        <option value="cradit card">Cradit Card</option>
                        <option value="bank deposit">Bank Deposit</option>
                    </select></div>
                <div class="col-sm-auto">
                    x
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                    <thead class="bg-200">
                        <tr>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap">#</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="date">Date</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="note">Note</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="reffer">Reffer</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="type">Type</th>
                            <th class="text-900 sort align-middle white-space-nowrap text-end pe-4" data-sort="amount">
                                Amount
                            </th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="action">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-purchase-body">
                        <tr class="btn-reveal-trigger">
                            <th class="align-middle white-space-nowrap date">1</th>
                            <th class="align-middle white-space-nowrap date"><a href="#">23-23-23</a></th>
                            <td class="align-middle white-space-nowrap note">ddddddddddddddddddddddddddd</td>
                            <td class="align-middle white-space-nowrap reffer">johndfad</td>
                            <td class="align-middle white-space-nowrap type">johndfad</td>
                            <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                    class="badge badge rounded-pill badge-subtle-success">15000<span
                                        class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <div class="modal fade" id="incomeModal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
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
                            <form action="{{ route('incomes.store') }}" method="post" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="client_id">Client</label>
                                            <select name="client_id" id="" class="form-select">
                                                <option disabled selected value="">Select Client</option>
                                                @forelse(clients() as $client)
                                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                @empty
                                                @endforelse

                                            </select>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="amount">Amount/Monto</label>
                                            <input type="text" name="amount" id="amount" class="form-control"
                                                placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">Reffer By</label>
                                            <input type="text" name="reffer_by" id="reffer_by" class="form-control"
                                                placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" value="{{ Carbon\Carbon::now() }}" name="date"
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
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">File/Document</label>
                                            <input type="file" name="file" id="file" class="form-control"
                                                rows="3" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="reffer_by">Note</label>
                                            <textarea name="note" id="note" class="form-control" rows="3"></textarea>
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
    <link href="vendors/choices/choices.min.css" rel="stylesheet" />
@endsection
