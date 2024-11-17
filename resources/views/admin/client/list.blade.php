@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-none">
        <div class="card-body p-0 pb-3">
            <div class="d-flex align-items-center justify-content-end my-3">
                <div id="bulk-select-replace-element"><a href="{{ route('clients.create') }}"
                        class="btn btn-falcon-success btn-sm" style="margin-right:20px" type="button"><span class="fas fa-plus"
                            data-fa-transform="shrink-3 down-2"></span><span class="ms-1">New</span></a></div>
                <div class="d-none ms-3" id="bulk-select-actions">
                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="selected">Bulk actions</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select><button class="btn btn-falcon-danger btn-sm ms-2" type="button">Apply</button></div>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table mb-0">
                    <thead class="bg-200">
                        <tr>
                            <th class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" id="bulk-select-example"
                                        type="checkbox"
                                        data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' />
                                </div>
                            </th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="case_number">Case Number</th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="name">Name</th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="email">Email</th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="phone">Phone</th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="case_type">Case Type</th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="created_by">Created By</th>
                            <th class="text-900 sort pe-1 align-middle" data-sort="updated_by">Created At</th>
                            <th class="align-middle"></th>
                        </tr>
                    </thead>
                    <tbody id="bulk-select-body">
                        @forelse ($clients as $info)
                            <tr>
                                <td class="align-middle white-space-nowrap">
                                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                            id="checkbox-1"
                                            data-bulk-select-row="{&quot;id&quot;:1,&quot;name&quot;:&quot;Kit Harington&quot;,&quot;nationality&quot;:&quot;British&quot;,&quot;gender&quot;:&quot;Male&quot;,&quot;age&quot;:32}" />
                                    </div>
                                </td>
                                <td>{{ $info->case_number }}</td>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->email }}</td>
                                <td>{{ $info->phone }}</td>
                                <td>{{ $info->case->name ?? '' }}</td>
                                <td>{{ $info->user->name ?? '--' }}</td>
                                <td>{{ Carbon\Carbon::parse($info->created_at)->format('d M y') }}</td>
                                <td class="align-middle white-space-nowrap py-2 text-end">
                                    <div class="dropdown font-sans-serif position-static"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                            id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><svg
                                                class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                </path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                            aria-labelledby="customer-dropdown-0">
                                            <div class="py-2">
                                                <a class="dropdown-item text-success"
                                                    href="{{ route('clients.edit', $info->id) }}">Edit</a>
                                                <a class="dropdown-item text-danger" href="#"
                                                    onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'Client', 'id' => $info->id]) }}')">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="19" class="text-center">No records found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <p class="mt-3 mb-2">Click the button to get selected rows</p><button class="btn btn-warning"
                    data-selected-rows="data-selected-rows">Get Selected Rows</button>
                <pre id="selectedRows"></pre>
            </div>
        </div>
    </div>
@endsection
