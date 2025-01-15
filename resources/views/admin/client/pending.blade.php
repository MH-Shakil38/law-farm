@extends('admin.layouts.app')

@section('content')
<div class="card shadow-none">
    <div class="card-body p-0 pb-3">
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <h3>Pending List</h3>

                </div>
               
        </div>
        <div class="">
            <div class="table-list" id="advanceAjaxTable">

                <div class="table-responsive scrollbar">
                    <table class="table mb-0">
                        <thead class="bg-200">
                            <tr>
                                <th class="align-middle white-space-nowrap">
                                    <div class="form-check mb-0"><input class="form-check-input"
                                            id="bulk-select-example" type="checkbox"
                                            data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' />
                                    </div>
                                </th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="case_number">Case Number</th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="name">Name</th>
                                {{-- <th class="text-900 sort pe-1 align-middle" data-sort="email">Email</th> --}}
                                <th class="text-900 sort pe-1 align-middle" data-sort="phone">Phone</th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="case_type">Handle BY</th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="created_by">Created By</th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="created_by">Last Update</th>
                                {{-- <th class="text-900   pe-1 align-middle" data-sort="updated_by">
                                    <input class="form-control datetimepicker border-none" id="createDatePicker"
                                        type="text" style="width: 200px;background: #065bb3;color:#fff"
                                        placeholder="Created At"
                                        data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' />
                                </th> --}}
                                <th class="text-900 pe-1 align-middle" data-sort="case_type">
                                   Hearing Date
                                </th>
                                <th class="align-middle"></th>
                            </tr>
                        </thead>
                        <tbody id="bulk-select-body" class="search-table">
                            @include('admin.client.ajax-client')
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
