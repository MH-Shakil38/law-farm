@extends('admin.layouts.app')

@section('content')
<div class="card shadow-none">
    <div class="card-body p-0 pb-3">
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <h3>Secrate List</h3>

                </div>

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
                            @forelse ($clients as $info)
                            @if ($info->status == 2 || $info->is_secrate == 1)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            data-bulk-select-row="{{ json_encode(['id' => $info->id, 'name' => $info->name]) }}" />
                                    </div>
                                </td>
                                <td>{{ $info->case_number }}</td>
                                <td><a href="{{ route('clients.show', $info->id) }}">{!! str_ireplace(
                                    request()->search,
                                    "<span style='background-color: yellow;'>" . request()->search . '</span>',
                                    $info->name,
                                ) !!}</a> </td>
                                <td>{!! str_ireplace(
                                    request()->search,
                                    "<span style='background-color: yellow;'>" . request()->search . '</span>',
                                    $info->phone,
                                ) !!}</td>
                                <td>{{ $info->lawyer->name ?? '' }}</td>
                                <td>{{ $info->createdBy->name ?? '--' }}</td>
                                {{-- <td>{{ $info->created_at->format('d M y') }}</td> --}}
                                <td>{{ $info->last_update ?? '...' }}</td>
                                <td class="text-center">{{$info->hearing_date ? Carbon\Carbon::parse($info->hearing_date)->format('D, d M Y') : 'NULL' }}</td>
                                <td>
                                    <div class="dropdown">

                                        @include('admin.client.include.quice-view-modal',['type'=>'client'])

                                        <button class="btn btn-link bg-info dropdown-toggle float-right mt-1" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="{{ route('clients.edit', $info->id) }}"
                                                class="dropdown-item text-info">Edit</a>
                                            <a class="dropdown-item text-success"
                                                href="{{ route('clients.show', $info->id) }}">Details</a>

                                            <a href="#"
                                                onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'Client', 'id' => $info->id]) }}')"
                                                class="dropdown-item text-danger">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif

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

@endsection
