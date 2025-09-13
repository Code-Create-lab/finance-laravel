<!doctype html>

<html class="no-js" lang="en">

<head>

    <title>Crafto - The Multipurpose HTML5 Template</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="author" content="ThemeZaa">

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos.">

    <!-- favicon icon -->

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- google fonts preconnect -->

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- style sheets and font icons -->

    <link rel="stylesheet" href="css/vendors.min.css" />

    <link rel="stylesheet" href="css/icon.min.css" />

    <link rel="stylesheet" href="css/style.min.css" />

    <link rel="stylesheet" href="css/responsive.min.css" />

    <link rel="stylesheet" href="demos/finance/finance.css" />

</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#bc8947" class="custom-cursor">

    <!-- start cursor -->

    <div class="cursor-page-inner">

        <div class="circle-cursor circle-cursor-inner"></div>

        <div class="circle-cursor circle-cursor-outer"></div>

    </div>

    <!-- end cursor -->

    <!-- start header -->
    @include('layouts.header')
    <!-- end header -->



    @yield('content')

    <!-- start footer -->

    @include('layouts.footer')

    <!-- end footer -->


    <!-- start scroll progress -->

    <div class="scroll-progress d-none d-xxl-block">

        <a href="#" class="scroll-top" aria-label="scroll">

            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>

        </a>

    </div>

    <!-- end scroll progress -->

    <!-- javascript libraries -->

    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/vendors.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
