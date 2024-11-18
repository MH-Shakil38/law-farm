@extends('admin.layouts.app')
@section('content')
    <div class="search-table">
    </div>
    @include('admin.backup.other-dashboard-content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.next-page', function(event) {
                event.preventDefault(); // Prevent the default anchor click behavior
                var next = $(this).data('next'); // Get the URL of the clicked page
                alldata(next); // Call the function to fetch and update the page
            });

            $(document).on('keyup', '.search', function(event) {
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
                var search = $('.search').val();
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
@endsection
