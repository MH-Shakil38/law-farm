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
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/') }}assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/') }}assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('/') }}assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('/') }}assets/js/config.js"></script>
    <script src="{{ asset('/') }}vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    @include('admin.layouts.header-script')
</head>

<body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">

           @include('admin.layouts.menu')
            <div class="content">
                @include('admin.layouts.top-menu')
                @include('admin.layouts.menu-load')
                    @yield('content')
                {{-- @include('admin.backup.other-dashboard-content') --}}
                @include('admin.layouts.footer')
            </div>
            @include('admin.componant.modal.authentication-modal')
        </div>
    </main>
    <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->
    @include('admin.theem.setting')

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="{{ asset('/') }}vendors/popper/popper.min.js"></script>
    <script src="{{ asset('/') }}vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}vendors/anchorjs/anchor.min.js"></script>
    <script src="{{ asset('/') }}vendors/is/is.min.js"></script>
    <script src="{{ asset('/') }}vendors/echarts/echarts.min.js"></script>
    <script src="{{ asset('/') }}vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('/') }}vendors/lodash/lodash.min.js"></script>
    <script src="{{ asset('/') }}vendors/list.js/list.min.js"></script>
    <script src="{{ asset('/') }}assets/js/theme.js"></script>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.22.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:34:13 GMT -->

</html>
