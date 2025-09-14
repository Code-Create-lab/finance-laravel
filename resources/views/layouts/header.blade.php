<header>

    <!-- start navigation -->

    <nav class="navbar navbar-expand-lg bg-transparent disable-fixed">

        <div class="container-fluid">

            <div class="col-auto col-lg-2 me-lg-0 me-auto">

                <a class="navbar-brand" href="demo-finance.html">

                    <img src="{{ asset('images/logo.png') }}" data-at2x="images/demo-finance-logo-white@2x.png"
                        alt="" class="default-logo">

                    <img src="{{ asset('images/logo.png') }}" data-at2x="images/demo-finance-logo-white@2x.png"
                        alt="" class="alt-logo">

                    <img src="images/demo-finance-logo-black.png" data-at2x="images/demo-finance-logo-black@2x.png"
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

                        <li class="nav-item"><a href="demo-finance.html" class="nav-link">Home</a></li>

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

                        <li class="nav-item"><a href="" class="nav-link">Product</a></li>
                        <li class="nav-item"><a href="" class="nav-link">About</a></li>


                        {{-- <li class="nav-item"><a href="demo-finance-pricing.html" class="nav-link">Pricing</a></li>

                        <li class="nav-item"><a href="demo-finance-news.html" class="nav-link">News</a></li> --}}

                        <li class="nav-item"><a href="demo-finance-contact.html" class="nav-link">Contact</a></li>

                    </ul>

                </div>

            </div>

            <div class="col-auto col-lg-2 text-end d-none d-sm-flex">

                <div class="header-icon">

                    <div class="header-button"><a href="#contact-form"
                            class="btn btn-very-small btn-white btn-box-shadow btn-round-edge left-icon text-transform-none popup-with-form"><i
                                class="feather icon-feather-mail"></i>Free quote</a></div>

                </div>

                <!-- start contact form -->

                <div id="contact-form"
                    class="container p-0 contact-form-style-01 position-relative text-center mfp-hide">

                    <div class="row g-0">

                        <div class="col-lg-5 cover-background md-h-600px xs-h-400px"
                            style="background-image:url('images/demo-finance-form-bg.jpg');"></div>

                        <div class="col-lg-7">

                            <div class="p-15 lg-p-10 bg-white">

                                <span class="mb-10px">Looking for a finance agent?</span>

                                <h3 class="d-inline-block alt-font fw-600 text-dark-gray mb-10 ls-minus-1px">How we
                                    can help you?</h3>

                                <form action="email-templates/contact-form.php" method="post">

                                    <div class="position-relative form-group mb-20px">

                                        <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>

                                        <input type="text" name="name" class="form-control required"
                                            placeholder="Enter your name*" />

                                    </div>

                                    <div class="position-relative form-group mb-20px">

                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>

                                        <input type="email" name="email" class="form-control required"
                                            placeholder="Enter your email*" />

                                    </div>

                                    <div class="position-relative form-group mb-20px">

                                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Enter your phone" />

                                    </div>

                                    <div class="position-relative form-group form-textarea">

                                        <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>

                                        <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>

                                        <input type="hidden" name="redirect" value="">

                                        <button
                                            class="btn btn-medium btn-base-color btn-box-shadow btn-round-edge w-100 mt-20px submit"
                                            type="submit">Send message</button>

                                        <div class="form-results mt-20px d-none"></div>

                                    </div>

                                </form>

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
