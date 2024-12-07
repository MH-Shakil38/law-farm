<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100 ecommerce-card-min-width">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Total Client<span class="ms-1 text-400"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Calculated according to last week's sales"><span class="far fa-question-circle"
                            data-fa-transform="shrink-1"></span></span></h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                    <div class="col">
                        <p class="font-sans-serif lh-1 mb-1 fs-5">{{ clients()->count() }}</p><span
                            class="badge badge-subtle-success rounded-pill fs-11"></span>
                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('clients-thumbnail.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Today Client</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $todayClient->count() }}</div>
                        <span class="badge rounded-pill fs-11 bg-200 text-primary"><span
                                class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('client.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Today Case</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $todayCase->count() }}</div>

                    </div>
                    <div class="col-auto ps-0 mt-n4">
                        <img src="{{ asset('today-case.png') }}" alt="" width="100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Tomorrow Case</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $tomorrowCase->count() }}</div>
                        <span class="badge rounded-pill fs-11 bg-200 text-primary"><span
                                class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('today-case.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-none">
    <div class="card-body p-0 pb-3">
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">

                    <div class="col-auto">
                        <form>
                            <div class="input-group">
                                <input class="form-control form-control-sm shadow-none search-client" type="search"
                                    placeholder="Search  by name" aria-label="search">

                            </div>


                        </form>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <div class="bg-300 mx-3 d-none d-lg-block d-xl-none" style="width:1px; height:auto"></div>

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
                                class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                data-fa-i2svg="" style="transform-origin: 0.4375em 0.5em;">
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
                                type="button" id="preview-dropdown" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg
                                    class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                    </path>
                                </svg><!-- <span class="fas fa-ellipsis-h fs-11"></span> Font Awesome fontawesome.com --></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="preview-dropdown">
                                <a class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                    href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
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
                                <th class="text-900 pe-1 align-middle" data-sort="case_type">
                                    @include('admin.component.date-picker')
                                </th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="case_type">Handle BY</th>
                                <th class="text-900 sort pe-1 align-middle" data-sort="created_by">Created By</th>
                                <th class="text-900   pe-1 align-middle" data-sort="updated_by">
                                    <input class="form-control datetimepicker border-none" id="createDatePicker"
                                        type="text" style="width: 200px;background: #065bb3;color:#fff"
                                        placeholder="Created At"
                                        data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' />
                                </th>
                                <th class="align-middle"></th>
                            </tr>
                        </thead>
                        <tbody id="bulk-select-body" class="search-table">
                            @include('admin.client.ajax-client')
                        </tbody>
                    </table>

                </div>
                <div class="pagination m-auto" style="margin:0 auto">
                    @include('admin.component.paginate', ['paginator' => $clients])
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        flatpickr("#timepicker2", {
            mode: "range",
            dateFormat: "d/m/Y",
            onChange: function(selectedDates, dateStr, instance) {
                $.ajax({
                    url: "{{ route('clients.index') }}?hearing_date=" + dateStr,
                    method: 'GET',
                    success: function(response) {
                        $('.search-table').html(response.clients); // Update the table body
                        $('.pagination').html(response.pagination); // Update the pagination
                    }
                });
            }
        });


        flatpickr("#createDatePicker", {
            mode: "range",
            dateFormat: "d/m/Y",
            onChange: function(selectedDates, dateStr, instance) {
                $.ajax({
                    url: "{{ route('clients.index') }}?created_at=" + dateStr,
                    method: 'GET',
                    success: function(response) {
                        $('.search-table').html(response.clients); // Update the table body
                        $('.pagination').html(response.pagination); // Update the pagination
                    }
                });
            }
        });


        $(document).on('click', '.next-page', function(event) {
            event.preventDefault(); // Prevent the default anchor click behavior
            var next = $(this).data('next'); // Get the URL of the clicked page
            alldata(next); // Call the function to fetch and update the page
        });

        $(document).on('keyup', '.search-client', function(event) {
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


        function alldata(page = null) {
            if (page == null) {
                var page = $('.active .page').data('page');
            } else {
                var page = page;
            }
            var search = $('.search-client').val();
            var perPage = $('.perPage').val();
            console.log(
                'the page number is : ' + page + ',' +
                ' and perpage is :' + perPage + ',' +
                ' and search :' + search + ',')
            fetchPage(page, perPage, search)
        }


        function fetchPage(page = null, perPage = null, search = null, endDate = null) {

            $.ajax({
                url: "{{ route('clients.index') }}?page=" + page + "&perPage=" + perPage +
                    "&search=" + search,
                method: 'GET',
                success: function(response) {
                    $('.search-table').html(response.clients); // Update the table body
                    $('.pagination').html(response.pagination); // Update the pagination
                }
            });
        }
    });
</script>
