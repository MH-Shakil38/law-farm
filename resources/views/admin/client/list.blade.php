@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-none">
        <div class="card-body p-0 pb-3">
            <div class="card-header border-bottom border-200 px-0">
                <div class="d-lg-flex justify-content-between">
                    <div class="row flex-between-center gy-2 px-x1">

                        <div class="col-auto">
                            <form>
                                <div class="input-group input-search-width"><input
                                        class="form-control form-control-sm shadow-none search" type="search"
                                        placeholder="Search  by name" aria-label="search"></div>
                            </form>
                        </div>
                    </div>
                    <div class="border-bottom border-200 my-3"></div>
                    <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                        <div class="bg-300 mx-3 d-none d-lg-block d-xl-none" style="width:1px; height:29px"></div>
                        <div class="d-none" id="table-ticket-actions">
                            <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                                    <option selected="">Bulk actions</option>
                                    <option value="Refund">Refund</option>
                                    <option value="Delete">Delete</option>
                                    <option value="Archive">Archive</option>
                                </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" id="table-ticket-replace-element">
                            <div class="dropdown">
                                <select name="perPage" id="PerPage" class="form-select form-select-sm perPage">
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="500">500</option>
                                </select>
                            </div><a href="{{ route('clients.create') }}"
                                class="btn btn-falcon-default btn-sm mx-2  text-success" type="button"><svg
                                    class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="plus" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""
                                    style="transform-origin: 0.4375em 0.5em;">
                                    <g transform="translate(224 256)">
                                        <g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                            <path fill="currentColor"
                                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                                                transform="translate(-224 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3"></span> Font Awesome fontawesome.com --><span
                                    class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1">New</span></a>
                            <div class="dropdown font-sans-serif ms-2"><button
                                    class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                                    type="button" id="preview-dropdown" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><svg
                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                        </path>
                                    </svg><!-- <span class="fas fa-ellipsis-h fs-11"></span> Font Awesome fontawesome.com --></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2"
                                    aria-labelledby="preview-dropdown"><a class="dropdown-item" href="#!">View</a><a
                                        class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                        href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="d-flex align-items-center justify-content-end my-3">

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
            </div> --}}

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
                            @include('admin.client.ajax-client')
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
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.next-page', function(event) {
                event.preventDefault(); // Prevent the default anchor click behavior
                var next = $(this).data('next'); // Get the URL of the clicked page
                alldata(next); // Call the function to fetch and update the page
            });

            $(document).on('keyup','.search', function(event){
                    alldata();
            })

            $(document).on('click', '.prev-page', function(event) {
                event.preventDefault(); // Prevent the default anchor click behavior
                var prev = $(this).data('prev'); // Get the URL of the clicked page
                alldata(prev); // Call the function to fetch and update the page
            });

            $(document).on('click', '.page', function(event) {
                event.preventDefault(); // Prevent the default anchor click behavior
                var page = $(this).data('page'); // Get the URL of the clicked page
                alldata(page); // Call the function to fetch and update the page
            });


            $('#PerPage').on('change', function() {
                var perPage = $(this).val();
                alldata();
            });


            function alldata(page = null){
                if(page == null){
                    var page = $('.active .page').data('page');
                }else{
                    var page = page;
                }
                var search = $('.search').val();
                var perPage = $('.perPage').val();
                console.log(
                    'the page number is : '+ page +',' +
                    ' and perpage is :' +perPage + ',' +
                    ' and search :' +search + ',' )
                fetchPage(page,perPage,search)
            }


            function fetchPage(page = null, perPage = null, search = null, endDate = null) {

                $.ajax({
                    url: "{{ route('clients.index') }}?page=" + page + "&perPage=" + perPage +
                        "&search=" + search,
                    method: 'GET',
                    success: function(response) {
                        $('.ajax-load').html(response.clients); // Update the table body
                        $('.pagination').html(response.pagination); // Update the pagination
                    }
                });
            }
        });
    </script>
@endsection
