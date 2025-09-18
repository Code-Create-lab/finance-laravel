<header>

    <!-- start navigation -->

    <nav class="navbar navbar-expand-lg bg-transparent disable-fixed">

        <div class="container-fluid">

            <div class="col-auto col-lg-2 me-lg-0 me-auto">

                <a class="navbar-brand" href="{{route('home')}}">

                    <img src="{{ asset('images/logo.png') }}" width="200px"
                        data-at2x="{{ asset('images/logo.png') }}" alt="" class="default-logo">

                    <img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo.png') }}"
                        alt="" class="alt-logo">

                    <img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo.png') }}"
                        alt="" class="mobile-logo">

                </a>

            </div>

            <div class="col-auto col-lg-8 menu-order position-static">

                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-expanded="false" aria-controls="navbarNav"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-line"></span>

                    <span class="navbar-toggler-line"></span>

                    <span class="navbar-toggler-line"></span>

                    <span class="navbar-toggler-line"></span>

                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                    <ul class="navbar-nav alt-font">

                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>

                        {{--
                        <li class="nav-item dropdown simple-dropdown">

                            <a href="demo-finance-expertise.html" class="nav-link">Expertise</a>

                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li><a href="demo-finance-expertise-details.html">Finance planning</a></li>

                                <li><a href="demo-finance-expertise-details.html">Wealth management</a></li>

                                <li><a href="demo-finance-expertise-details.html">Strategic planning</a></li>

                                <li><a href="demo-finance-expertise-details.html">Audit assurance</a></li>

                            </ul>

                        </li> --}}

                        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#product" class="nav-link">Product</a></li>


                        {{-- <li class="nav-item"><a href="demo-finance-pricing.html" class="nav-link">Pricing</a></li>

                        <li class="nav-item"><a href="demo-finance-news.html" class="nav-link">News</a></li> --}}

                        <li class="nav-item"><a href="#contactUs" class="nav-link">Contact</a></li>

                    </ul>

                </div>

            </div>

            <div class="col-auto col-lg-2 text-end d-none d-sm-flex">

                <div class="header-icon">

                    <div class="header-button"><a href="#contact-form"
                            class="btn btn-very-small btn-white btn-box-shadow btn-round-edge left-icon text-transform-none popup-with-form"><i
                                class="feather icon-feather-mail"></i>Apply Loan</a></div>

                </div>

                <!-- start contact form -->

                <div id="contact-form"
                    class="container p-0 contact-form-style-01 position-relative text-center mfp-hide">

                    <div class="row g-0">

                        <div class="col-lg-5 cover-background md-h-600px xs-h-400px"
                            style="background-image:url('images/demo-finance-form-bg.jpg');"></div>

                        <div class="col-lg-12">

                            <div class="p-15 lg-p-10 bg-white">

                                <span class="mb-10px">Looking for a finance agent?</span>

                                <h3 class="d-inline-block alt-font fw-600 text-dark-gray mb-10 ls-minus-1px">How we
                                    can help you?</h3>

                                @livewire('contact-form')

                            </div>

                        </div>

                    </div>

                </div>

                <!-- end contact form -->

            </div>

        </div>

    </nav>

    <!-- end navigation -->

</header>
