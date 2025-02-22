@extends('admin.layouts.app')

@section('content')
    <div class="card mt-4">
        <div id="tableExample4 " data-list='{"valueNames":["name","country","email","payment"]}'>
            <div class="row mt-2 justify-content-end justify-content-end gx-3 gy-0 px-3">
                {{-- <div class="col-sm-auto"><select class="form-select form-select-sm mb-3" data-list-filter="country">
                        <option selected="" value="">Select country</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                        <option value="uk">UK</option>
                    </select></div> --}}
                {{-- <div class="col-sm-auto"><select class="form-select form-select-sm mb-3" data-list-filter="payment">
                        <option selected="" value="">Select Type</option>
                        <option value="cash">Cash</option>
                        <option value="zelle">Zelle</option>
                        <option value="cradit card">Cradit Card</option>
                        <option value="bank deposit">Bank Deposit</option>
                    </select></div> --}}
                <div class="col-sm-auto mb-2">
                    @include('admin.acc.income-create-modal')
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                    <thead class="bg-200">
                        <tr>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap">#</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="date">Date</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="date">Reffer By/Client</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="note">Note</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="type">Type</th>
                            <th class="text-900 sort align-middle white-space-nowrap text-end pe-4" data-sort="amount">
                                Amount
                            </th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="action">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-purchase-body">
                        @forelse ($accounts as $info)
                            <tr class="btn-reveal-trigger">
                                <th class="align-middle white-space-nowrap date">{{ $info->id }}</th>
                                <th class="align-middle white-space-nowrap date"><a href="#">{{ $info->date }}</a>
                                </th>
                                <th class="align-middle white-space-nowrap date"><a href="#">{{ @$info->client->name }}</a>
                                </th>
                                <td class="align-middle white-space-nowrap note">{!! $info->note !!}</td>
                                <td class="align-middle white-space-nowrap reffer">{{ $info->type }}</td>
                                <td class="align-middle text-end fs-9 white-space-nowrap payment"><span
                                        class="badge badge rounded-pill badge-subtle-success">{{ $info->amount }}<span
                                            class="ms-1 fas fa-dollar-sign" data-fa-transform="shrink-2"></span></span></td>
                                <td>
                                    @include('admin.acc.income-edit-modal')
                                </td>
                            </tr>

                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <link href="{{ asset('/') }}vendors/choices/choices.min.css" rel="stylesheet" />
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter Payment Note',
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
@endsection
