@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-none">
        <div class="card-body p-0 pb-3">
            <div class="card-header border-bottom border-200 px-0">
                <div class="d-lg-flex justify-content-between">
                    <div class="row flex-between-center gy-2 px-x1">

                        <div class="col-auto">
                            <h4>Client Pending List</h4>
                        </div>
                    </div>
                    <div class="border-bottom border-200 my-3"></div>

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
                                    <th class="text-900 sort pe-1 align-middle" data-sort="name">Date Time</th>
                                    <th class="text-900 sort pe-1 align-middle" data-sort="name">Name</th>
                                    <th class="text-900 sort pe-1 align-middle" data-sort="email">Email</th>
                                    <th class="text-900 sort pe-1 align-middle" data-sort="phone">Phone</th>
                                    <th class="text-900 sort pe-1 align-middle" data-sort="phone">Alien Number</th>
                                    <th class="text-900 sort pe-1 align-middle" data-sort="phone">Case Type</th>
                                    <th class="text-900 sort pe-1 align-middle" data-sort="phone">Action</th>
                                </tr>
                            </thead>
                            <tbody id="bulk-select-body" class="search-table">

                                @forelse ($clients as $key => $info)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    data-bulk-select-row="{{ json_encode(['id' => $info->id, 'name' => $info->name]) }}" />
                                            </div>
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($info->created_at)->format('d M y, h:m:s A') }}</td>
                                        <td>{{ $info->name }}</td>
                                        <td>{{ $info->email }}</td>
                                        <td>{{ $info->phone ?? '' }}</td>
                                        <td>{{ $info->alien_number ?? '--' }}</td>
                                        <td>{{ $info->caseType->name ?? '' }}</td>
                                        <td>
                                            <div class="dropdown">
                                                @include('admin.client.include.quice-view-modal',['type'=>'tmp'])

                                                {{-- <a class="btn btn-primary"
                                                onclick="confirmLink(event, '{{ route('clients.aprove', $info->id) }}')"
                                                href="{{ route('clients.aprove', $info->id) }}">
                                                    <i class="fas fa-check"></i>
                                                </a> --}}
                                                {{-- <a href="#"
                                                onclick="confirmLnk(event, '{{ route('record.delete', ['model' => 'TmpClient', 'id' => $info->id]) }}')"
                                                class="btn btn-danger"> <i class="far fa-times-circle"></i> </a> --}}
                                            </div>
                                        </td>
                                    </tr>


                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="spinner-border hide" role="status"><span class="visually-hidden d-none hide">Loading...</span></div>
    <style>
        .spinner-border {
            position: fixed;
            top: 50%;
            left: 50%;
            display: none;
        }

        .spinner-border .hide {
            display: none;
        }
    </style>




@endsection
