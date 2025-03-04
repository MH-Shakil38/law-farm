<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lawyer.websitelayout.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2025 19:49:55 GMT -->
<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Attorney and Lawyers HTML Template" />
    <meta name="description" content="Lawyer - Attorney and Lawyers HTML Template" />

    <!-- title  -->
    <title>Lawyer - Attorney Pema PLB</title>
    @include('frontend.layouts.header-script')

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        @include('admin.layouts.header')

            @yield('content')

        <!-- FOOTER
        ================================================== -->
       @include('frontend.layouts.footer')

    </div>

 @include('frontend.layouts.footer-script')

</body>
</html>
