<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.22.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:35:35 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Law Office of Pema Lhamu Bhutia</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/') }}website/logo.webp">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/') }}website/logo.webp">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/logo.webp">
    <link rel="manifest" href="{{ asset('/') }}website/logo.webp">
    <meta name="msapplication-TileImage" content="{{ asset('/') }}website/logo.webp">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('/') }}assets/js/config.js"></script>
    <script src="{{ asset('/') }}vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('/') }}vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('/') }}assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="{{ asset('/') }}assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('/') }}assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>

    <style>
        @media (min-width: 992px) {
            .login-card {
                width: 440px;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body>
    @include('auth.form.login-form1')
    {{-- @include('auth.form.login') --}}
    <script src="{{ asset('/') }}vendors/popper/popper.min.js"></script>
    <script src="{{ asset('/') }}vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}vendors/anchorjs/anchor.min.js"></script>
    <script src="{{ asset('/') }}vendors/is/is.min.js"></script>
    <script src="{{ asset('/') }}vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('/') }}vendors/lodash/lodash.min.js"></script>
    <script src="{{ asset('/') }}vendors/list.js/list.min.js"></script>
    <script src="{{ asset('/') }}assets/js/theme.js"></script>
</body>

</html>
