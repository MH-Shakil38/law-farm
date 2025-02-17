<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<link href="{{ asset('/') }}vendors/simplebar/simplebar.min.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
<link href="{{ asset('/') }}assets/css/theme.min.css" rel="stylesheet" id="style-default">
<link href="{{ asset('/') }}assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
<link href="{{ asset('/') }}assets/css/user.min.css" rel="stylesheet" id="user-style-default">
<script src="{{ asset('/') }}vendors/choices/choices.min.css"></script>
    
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


{{-- menu load --}}
<script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
</script>
