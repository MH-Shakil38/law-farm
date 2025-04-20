<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="google-site-verification" content="Wkz-G52S8YGvQw2xb-ZRsR9knEaqBoapX1MnaDY8ZnU" />
    <title>Law Office of Pema Lhamu Bhutia PC | Elmhurst, NY Immigration & Family Lawyer</title>
    <meta name="description"
        content="The Law Office of Pema Lhamu Bhutia PC provides expert legal services in immigration, family law, and more. Serving Elmhurst, Queens, and the NYC area with trusted legal guidance.">

    <meta name="keywords"
        content="Law Office of Pema Lhamu Bhutia, Immigration Lawyer Elmhurst NY, Family Lawyer Queens, Elmhurst Legal Services, NYC Law Firm, Immigration Attorney New York, Family Law NY">

    <meta name="author" content="Law Office of Pema Lhamu Bhutia PC">

    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph for Facebook -->
    <meta property="og:title" content="Law Office of Pema Lhamu Bhutia PC | Trusted Elmhurst NY Lawyer">
    <meta property="og:description"
        content="Expert legal representation in immigration and family law. Based in Elmhurst, Queens, NY.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://attorneypema.com">
    <meta property="og:image" content="https://attorneypema.com/website/logo.jpg">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Law Office of Pema Lhamu Bhutia PC">
    <meta name="twitter:description"
        content="Providing expert legal services in immigration and family law in Elmhurst, NY.">
    <meta name="twitter:image" content="https://attorneypema.com/website/logo.jpg">

    <!-- LocalBusiness Schema (JSON-LD) -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LegalService",
          "name": "Law Office of Pema Lhamu Bhutia PC",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "4001 80th St 2nd fl",
            "addressLocality": "Elmhurst",
            "addressRegion": "NY",
            "postalCode": "11373",
            "addressCountry": "US"
          },
          "url": "https://attorneypema.com",
          "telephone": "+1-XXX-XXX-XXXX",
          "image": "https://attorneypema.com/website/logo.jpg",
          "priceRange": "$$",
          "areaServed": "New York, Queens, Elmhurst"
        }
        </script>
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
