@extends('layouts.app')

@section('content')
    <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin"
        data-parallax-background-ratio="0.5"
        style="background-image: url(&quot;images/demo-finance-about-title-bg.jpg&quot;); margin-top: inherit; background-position: 50% -122.5px;">
        <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column small-screen">
                        <div class="mt-auto appear anime-complete"
                            data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                            staggervalue="200" easing="easeOutQuad" style="">
                            <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Terms &
                                Conditions
                            </h1>
                        </div>
                        <!-- start breadcrumb -->
                        <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                            <ul data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                                class="appear anime-child anime-complete">
                                <li style="" el="childs" staggervalue="200" easing="easeOutQuad"><a
                                        href="{{ route('home') }}" class="text-white">Home</a></li>
                                <li style="" el="childs" staggervalue="200" easing="easeOutQuad">About</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================== Privacy Policy / Terms Section =================== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card shadow-sm border-0 rounded-3 p-4 p-md-5">
                        {{-- <h1 class="mb-4 text-center fw-bold text-dark">
                            Privacy Policy
                        </h1> --}}

                        <p class="mb-3 text-muted">
                            Welcome to our website. If you continue to browse and use this website, you are agreeing to
                            comply
                            with and be bound by the following terms and conditions of use, which together with our
                            <strong>Privacy Policy</strong>, govern Exemplar Financial &amp; IMF Private Limited’s
                            relationship
                            with you.
                        </p>

                        <p class="mb-3 text-muted">
                            The term <strong>“Vistara.Finance &amp; Private Limited”</strong>
                            (or <strong>“Exemplar” / “us” / “we”</strong>) refers to the owner of the website.
                            The term <strong>“you”</strong> refers to the user or viewer of our website.
                        </p>

                        <h5 class="fw-semibold mt-4 mb-3">Use of This Website</h5>
                        <p class="mb-3 text-muted">
                            The use of this website is subject to the following terms:
                        </p>

                        <p class="mb-3 text-muted">
                            You understand and accept that Exemplar Financial &amp; IMF Private Limited maintains the
                            website
                            <a href="http://www.vistara.finance" target="_blank">http://www.vistara.finance</a>
                            (and related websites) to provide visitors with information about Exemplar, its services and
                            products, and to enable visitors to avail its services.
                        </p>

                        <p class="mb-0 text-muted">
                            You also accept that visitors to the site are required to read these terms, and that using the
                            site
                            constitutes your acceptance and agreement to be bound by such terms.
                            You will also be bound by any changes to these terms as communicated and made available on the
                            website from time to time.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =================== End Privacy Policy / Terms Section =================== -->
@endsection
