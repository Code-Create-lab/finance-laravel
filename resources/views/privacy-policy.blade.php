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
                            <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Privacy Policy
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
    <!-- =================== Privacy Policy Section =================== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card shadow-sm border-0 rounded-3 p-4 p-md-5">
                        {{-- <h1 class="mb-4 text-center fw-bold text-dark">
                            Privacy Policy
                        </h1> --}}

                        <p class="mb-3 text-muted">
                            For the purpose of this policy, <strong>“personal information”</strong> means any information
                            that
                            can be used to identify you personally.
                        </p>

                        <p class="mb-3 text-muted">
                            If you are a first-time visitor to <strong>Vistara.Finance</strong>, we don't know who you are.
                        </p>

                        <p class="mb-3 text-muted">
                            We collect technical data about your interaction with the Services. This is data we get from
                            your
                            use of our services. We collect certain data about your interaction with our website, such as
                            pages visited and average time spent on the website, your internet protocol address, the unique
                            identifier of your device and device information such as operating system, operating system
                            version, browser plugins, crashes, system activity, hardware settings, date and time of your
                            request and referral URL, and cookies that may uniquely identify your browser and mobile
                            application.
                        </p>

                        <p class="mb-0 text-muted">
                            We use this data to analyze how you use our website and improve the services provided through
                            the
                            website.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =================== End Privacy Policy Section =================== -->
@endsection
