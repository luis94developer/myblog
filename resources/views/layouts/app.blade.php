<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
    <title>My Blog</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!--  Social tags -->
    <meta name="keywords" content="Awesome Dashboard UI Kit, Bootstrap, Template, Theme, Freebies, MIT license, Free, Download">
    <meta name="description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
    <meta name="author" content="htmlstream.com">

    <!-- Schema.org -->
    <meta itemprop="name" content="Awesome Dashboard UI Kit">
    <meta itemprop="description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
    <meta itemprop="image" content="{{ asset('assets/img-temp/aduik-preview.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@htmlstream">
    <meta name="twitter:title" content="Awesome Dashboard UI Kit">
    <meta name="twitter:description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
    <meta name="twitter:creator" content="@htmlstream">
    <meta name="twitter:image" content="{{ asset('assets/img-temp/aduik-preview.png') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Htmlstream">
    <meta property="og:title" content="Awesome Dashboard UI Kit">
    <meta property="og:description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
    <meta property="og:url" content="https://htmlstream.com/preview/awesome-dashboard-ui-kit/">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="{{ asset('assets/img-temp/aduik-preview.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/img-temp/aduik-preview.png') }}">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<!-- End Head -->

<!-- Body -->
<body>
<!-- Main -->
<main class="d-flex flex-column u-hero u-hero--end mnh-100vh" style="background-image: url({{ asset('assets/img-temp/bg/bg-1.png') }});">
    <div class="container py-11 my-auto">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="u-footer mt-auto">
        <div class="container">
            <div class="d-md-flex align-items-md-center text-center text-md-left text-muted">
                <!-- Footer Menu -->
                <ul class="list-inline mb-3 mb-md-0">
                    <li class="list-inline-item mr-4">
                        <a class="text-muted" href="https://www.facebook.com/htmlstream" target="_blank">About Htmlstream</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="https://htmlstream.com/" target="_blank">More Freebies</a>
                    </li>
                </ul>
                <!-- End Footer Menu -->

                <!-- Copyright -->
                <span class="text-muted ml-auto">&copy; 2019 <a class="text-muted" href="https://htmlstream.com/" target="_blank">Htmlstream</a>. All Rights Reserved.</span>
                <!-- End Copyright -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</main>
<!-- End Main -->
</body>
<!-- End Body -->
</html>