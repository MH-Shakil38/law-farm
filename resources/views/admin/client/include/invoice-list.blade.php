<div class="card mb-3">
    <div class="card-header bg-body-tertiary d-flex justify-content-between" style="background: #adadad !important;">
        <h5 class="mb-0">Invoice List</h5>
        <div id="table-customers-replace-element">
            @include('admin.client.include.invoice-generate-modal')
            {{-- <a class="btn btn-falcon-default btn-sm text-primary collapsed" href="{{ route('create.invoice', $client->id) }}">New</a> --}}
                <button data-bs-toggle="collapse" data-bs-target="#invoic-collapse" aria-expanded="true"
                aria-controls="invoic-collapse" class="btn btn-falcon-default btn-sm text-success collapsed"
                type="button"><span class="d-none d-sm-inline-block"><i class="fas fa-angle-down"></i></span></button>

        </div>
    </div>
    <div class="fs-10 p-0 ">
        <div class="" id="accordionExample">

            <div class=" accordion-item" style="padding: 10px">
                <div class="accordion-collapse collapse show" id="invoic-collapse"
                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body card-body">
                        <table class="table table-bordered" style="widht:100%">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1">SL</th>
                                    <th scope="col" class="col-3">Date</th>
                                    <th scope="col" class="col-3">Payment Type</th>
                                    <th scope="col" class="col-2">Paid</th>
                                    <th scope="col" class="col-3">Action</th>
                                </tr>
                                @forelse ($client->invoices as $invoice)
                                    <tr class="align-center">
                                        <td class="col-1">{{ $loop->iteration }}</td>
                                        <td scope="col-3" class="col-3">{{ Carbon\Carbon::parse($invoice->created_at)->format('d M y, h:m:s') }}</td>
                                        <td scope="col-2" class="col-3">{{ $invoice->type }}</td>
                                        <td scope="col-2" class="col-2" style="text-align:center;background: #fff3bd"> <i class="fas fa-dollar-sign"></i>{{ $invoice->amount }}</td>
                                        <td scope="col-4" class="col-3">
                                            <a title="Print Invoice" href="{{ route('print.client.invoice', $invoice->id) }}" class="btn btn-sm btn-danger"> <i class="fas fa-print"></i> </a>
                                            <a title="edit invoice" href="{{ route('edit.client.invoice',$invoice->id) }}" class="btn btn-sm btn-info"> <i class="far fa-edit"></i> </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                <tr class="align-center">
                                    <td colspan="2"></td>
                                    <td style="background: #cdcdcd;text-align:right"><strong>Total Paid : </strong></td>
                                    <td  style="background: #fff3bd;text-align:center"> <i class="fas fa-dollar-sign"></i>{{ $client->invoices->sum('amount') }}</td>
                                </tr>
                                <tr class="align-center">
                                    <td colspan="2"></td>
                                    <td style="background: #cdcdcd;text-align:right"><strong>Agrement Total : </strong></td>
                                    <td style="background: #fff3bd;text-align:center"> <i class="fas fa-dollar-sign"></i>{{ $client->agreement->total_amount }}</td>
                                </tr>
                                <tr class="align-center">
                                    <td colspan="2"></td>
                                    <td style="background: #cdcdcd;text-align:right"><strong>Total Due : </strong></td>
                                    <td  style="background: #fff3bd;text-align:center"> <i class="fas fa-dollar-sign"></i> <strong> {{$client->agreement->total_amount - $client->invoices->sum('amount') }}</strong></td>
                                </tr>

                            </thead>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<hr>
