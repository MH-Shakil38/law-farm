<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.22.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:32:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Dashboard | Law Office of Pema Lhamu Bhutia</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}website/logo.webp">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/') }}website/logo.webp">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/') }}website/logo.webp">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/logo.webp">
    <link rel="manifest" href="{{ asset('/') }}assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('/') }}website/logo.webp">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('/') }}assets/js/config.js"></script>
    <script src="{{ asset('/') }}vendors/simplebar/simplebar.min.js"></script>
    @include('admin.layouts.header-script')
    <link href="{{ asset('/') }}vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />

</head>

<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">

           @include('admin.layouts.menu')
            <div class="content">
                @include('admin.layouts.top-menu')
                @include('admin.layouts.menu-load')
                <div class="content">
                    @yield('content')
                </div>
                {{-- @include('admin.backup.other-dashboard-content') --}}
                @include('admin.layouts.footer')
            </div>
            @include('admin.component.modal.authentication-modal')
            @include('components.client-import')
        </div>
    </main>
    @include('admin.theem.setting')
<script src="{{ asset('/') }}vendors/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('/') }}vendors/popper/popper.min.js"></script>
    <script src="{{ asset('/') }}vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}vendors/anchorjs/anchor.min.js"></script>
    <script src="{{ asset('/') }}vendors/is/is.min.js"></script>
    <script src="{{ asset('/') }}vendors/prism/prism.js"></script>
    <script src="{{ asset('/') }}vendors/echarts/echarts.min.js"></script>
    <script src="{{ asset('/') }}vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('/') }}vendors/lodash/lodash.min.js"></script>
    <script src="{{ asset('/') }}vendors/list.js/list.min.js"></script>
    <script src="{{ asset('/') }}assets/js/theme.js"></script>

   @include('alert.toster')

   {{-- confimation button --}}
   <script>
    function confirmAction(event, url) {
        event.preventDefault(); // Prevent the default action of the link
        if (confirm('Are you sure you want to delete this record?')) {
            window.location.href = url; // Redirect to the delete route if confirmed
        }
    }
</script>
</body>
</html>
