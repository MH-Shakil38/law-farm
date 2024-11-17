@extends('admin.layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <div class="card-body position-relative">
            <div id="customersTable"
                data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;address&quot;,&quot;city&quot;,&quot;state&quot;,&quot;postal_code&quot;,&quot;country&quot;,&quot;case_type&quot;,&quot;case_number&quot;,&quot;case_details&quot;,&quot;short_details&quot;,&quot;date_of_birth&quot;,&quot;nationality&quot;,&quot;passport_number&quot;,&quot;status&quot;,&quot;created_by&quot;,&quot;updated_by&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
                <div class="card-header">
                    <div class="row flex-between-center">
                        <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                            <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Users</h5>
                        </div>
                        <div class="col-8 col-sm-auto text-end ps-2 text-success">
                            <a href="{{ route('clients.create') }}" class="btn btn-falcon-default btn-sm text-success"
                                type="button">
                                <svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                    </path>
                                </svg>
                                <span class="d-none d-sm-inline-block ms-1 ">New</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row justify-content-end justify-content-end gx-3 gy-0 px-3">
                        <div class="col-sm-auto"><select class="form-select form-select-sm mb-3"
                                data-list-filter="case_type">
                                <option selected="">Select Case</option>
                                @forelse ($caseTypes as $info)
                                    <option value="{{ $info->id }}">{{ $info->name }}</option>
                                @empty
                                @endforelse
                                <option value="canada">Canada</option>
                                <option value="uk">UK</option>
                            </select></div>

                        <div class="col-sm-auto">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Search..." aria-label="search" />
                                    <div class="input-group-text bg-transparent"><span
                                            class="fa fa-search fs-10 text-600"></span></div>
                                </div>
                            </form>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped fs-10 mb-0">
                            <thead class="bg-200">
                                <tr>
                                    <th>
                                        <div class="form-check fs-9 mb-0 d-flex align-items-center">
                                            <input class="form-check-input" id="checkbox-bulk-customers-select"
                                                type="checkbox">
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
                            <tbody class="list">
                                @forelse ($clients as $info)
                                    <tr>
                                        <td>
                                            <div class="form-check fs-9 mb-0 d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox">
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
                                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                    type="button" id="customer-dropdown-0" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-10"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-h" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
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
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center"><button
                        class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous"
                        data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10"
                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
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
                </div>
            </div>
        </div>
    </div>
@endsection
