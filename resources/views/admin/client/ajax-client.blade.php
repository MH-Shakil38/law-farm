<div class="table-list" id="advanceAjaxTable">

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
                    {{-- <th class="text-900 sort pe-1 align-middle" data-sort="email">Email</th> --}}
                    <th class="text-900 sort pe-1 align-middle" data-sort="phone">Phone</th>
                    <th class="text-900 sort pe-1 align-middle" data-sort="case_type">Case Type</th>
                    <th class="text-900 sort pe-1 align-middle" data-sort="created_by">Created By</th>
                    <th class="text-900 sort pe-1 align-middle" data-sort="updated_by">Created At</th>
                    <th class="align-middle"></th>
                </tr>
            </thead>
            <tbody id="bulk-select-body" class="ajax-load">
@forelse ($clients as $info)
<tr>
    <td>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" data-bulk-select-row="{{ json_encode(['id' => $info->id, 'name' => $info->name]) }}" />
        </div>
    </td>
    <td>{{ $info->case_number }}</td>
    <td><a href="{{ route('clients.show',$info->id) }}">{!! str_ireplace(request()->search, "<span style='background-color: yellow;'>".request()->search."</span>", $info->name) !!}</a> </td>
    <td>{!! str_ireplace(request()->search, "<span style='background-color: yellow;'>".request()->search."</span>", $info->phone) !!}</td>
    <td>{{ $info->caseType->name ?? '' }}</td>
    <td>{{ $info->createdBy->name ?? '--' }}</td>
    <td>{{ $info->created_at->format('d M y') }}</td>
    <td>
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fas fa-ellipsis-h"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="{{ route('clients.edit', $info->id) }}" class="dropdown-item text-info">Edit</a>
                <a class="dropdown-item text-success"  href="{{ route('clients.show', $info->id) }}">Details</a>

                <a href="#" onclick="confirmAction(event, '{{ route('record.delete', ['model' => 'Client', 'id' => $info->id]) }}')" class="dropdown-item text-danger">Delete</a>
            </div>
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
<div class="pagination m-auto" style="margin:0 auto">
@include('admin.component.paginate', ['paginator' => $clients])
{{-- {{ $clients->count() > 0 ? $clients->withQueryString($_GET)->links('admin.component.paginate') : false }} --}}
</div>
{{-- @include('admin.component.paginate', ['paginator' => $clients]) --}}

{{-- <div class="card-footer d-flex align-items-center justify-content-center"><button
    class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous"
    data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10"
        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
        <path fill="currentColor"
            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
        </path>
    </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
<ul class="pagination mb-0">
    <li class="active"><button class="page" type="button" data-i="1"
            data-page="20">1</button></li>
    <li><button class="page" type="button" data-i="2" data-page="20">2</button></li>
    <li><button class="page" type="button" data-i="3" data-page="20">3</button></li>
</ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
    data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10"
        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
        <path fill="currentColor"
            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
        </path>
    </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
</div> --}}
</div>
