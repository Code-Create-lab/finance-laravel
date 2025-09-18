@extends('layouts.app')
@section('content')
    <!-- start banner slider -->

    <style>
        .mySwiper {
            width: 100%;
            height: 300px;
            /* Adjust height */
        }

        .gallerySwiper img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Use contain to avoid cropping */
            display: block;
        }
    </style>

    <section class="p-0 bg-dark-gray">

        <div class="swiper full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination swiper-pagination-style-3 magic-cursor drag-cursor"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "stopOnLastSlide": true, "disableOnInteraction": false },"keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }'>

            <div class="swiper-wrapper">

                <!-- start slider item -->

                <div class="swiper-slide">

                    <div class="position-absolute left-0px top-0px w-100 h-100 cover-background"
                        style="background-image:url('images/demo-finance-slider-01.jpg');"
                        data-anime='{ "translateY": [0, 0], "opacity": [1,1], "scale": [1,1.1], "duration": 7000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    </div>

                    <div class="opacity-light bg-gradient-black-dark-brown"></div>

                    <div class="container h-100">

                        <div class="row align-items-center h-100 justify-content-center">

                            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10 position-relative text-white text-center">

                                <div class="d-inline-block position-relative mb-35px"
                                    data-anime='{ "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "delay": 200 }'>

                                    <span class="d-inline-block fw-400 text-white fs-22 mb-0">Professional finance
                                        consultant</span>

                                    <span
                                        class="h-1px opacity-3 w-100 bg-white d-inline-block transform-origin-left position-absolute bottom-0px left-0px"></span>

                                </div>

                                <div class="alt-font fs-90 lh-80 lg-fs-80 xs-fs-65 fw-500 mb-40px ls-minus-3px sm-ls-minus-2px text-shadow-double-large"
                                    data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "string": ["Giving ideas for your investments"], "duration": 500, "delay": 200, "speed": 10, "easing": "easeOutQuad" }'>
                                </div>

                                <a href="" class="btn btn-base-color btn-box-shadow btn-large btn-round-edge"
                                    data-anime='{ "opacity": [0, 1], "easing": "easeOutCubic", "delay": 800, "duration": 800 }'>Get
                                    started now</a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- end slider item -->

                <!-- start slider item -->

                <div class="swiper-slide">

                    <div class="position-absolute left-0px top-0px w-100 h-100 cover-background"
                        style="background-image:url('images/demo-finance-slider-02.jpg');"
                        data-anime='{ "translateY": [0, 0], "opacity": [1,1], "scale": [1,1.1], "duration": 7000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    </div>

                    <div class="opacity-light bg-gradient-black-dark-brown"></div>

                    <div class="container h-100">

                        <div class="row align-items-center h-100 justify-content-center">

                            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10 position-relative text-white text-center">

                                <div class="d-inline-block position-relative mb-35px"
                                    data-anime='{ "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "delay": 200 }'>

                                    <span class="d-inline-block fw-400 text-white fs-22 mb-0">Finding more
                                        possibilities</span>

                                    <span
                                        class="h-1px opacity-3 w-100 bg-white d-inline-block transform-origin-left position-absolute bottom-0px left-0px"></span>

                                </div>

                                <div class="alt-font fs-90 lh-80 lg-fs-80 xs-fs-65 fw-500 mb-40px ls-minus-3px sm-ls-minus-2px text-shadow-double-large"
                                    data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "string": ["Make investment and idea smart"], "duration": 500, "delay": 200, "speed": 10, "easing": "easeOutQuad" }'>
                                </div>

                                {{-- <a href="demo-finance-expertise.html"
                                    class="btn btn-base-color btn-box-shadow btn-large btn-round-edge"
                                    data-anime='{ "opacity": [0, 1], "easing": "easeOutCubic", "delay": 500, "duration": 800 }'>Get
                                    started now</a> --}}

                            </div>

                        </div>

                    </div>

                </div>

                <!-- end slider item -->

                <!-- start slider item -->

                <div class="swiper-slide">

                    <div class="position-absolute left-0px top-0px w-100 h-100 cover-background"
                        style="background-image:url('images/demo-finance-slider-03.jpg');"
                        data-anime='{ "translateY": [0, 0], "opacity": [1,1], "scale": [1,1.1], "duration": 7000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    </div>

                    <div class="opacity-light bg-gradient-black-dark-brown"></div>

                    <div class="container h-100">

                        <div class="row align-items-center h-100 justify-content-center">

                            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10 position-relative text-white text-center">

                                <div class="d-inline-block position-relative mb-35px"
                                    data-anime='{ "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "delay": 200 }'>

                                    <span class="d-inline-block fw-400 text-white fs-22 mb-0">Ensuring financial
                                        freedom</span>

                                    <span
                                        class="h-1px opacity-3 w-100 bg-white d-inline-block transform-origin-left position-absolute bottom-0px left-0px"></span>

                                </div>

                                <div class="alt-font fs-90 lh-80 lg-fs-80 xs-fs-65 fw-500 mb-40px ls-minus-3px sm-ls-minus-2px text-shadow-double-large"
                                    data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "string": ["Skilled finance expert agency"], "duration": 500, "delay": 200, "speed": 10, "easing": "easeOutQuad" }'>
                                </div>
                                {{-- 
                                <a href="demo-finance-expertise.html"
                                    class="btn btn-base-color btn-box-shadow btn-large btn-round-edge"
                                    data-anime='{ "opacity": [0, 1], "easing": "easeOutCubic", "delay": 500, "duration": 800 }'>Get
                                    started now</a> --}}

                            </div>

                        </div>

                    </div>

                </div>

                <!-- end slider item -->

            </div>

            <!-- start slider pagination -->

            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-sm-none">
            </div>

            <!-- end slider pagination -->

            <!-- start slider navigation -->

            <div
                class="slider-one-slide-prev-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block">
                <i class="line-icon-Arrow-OutLeft icon-extra-large"></i>
            </div>

            <div
                class="slider-one-slide-next-1 icon-very-small text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block">
                <i class="line-icon-Arrow-OutRight icon-extra-large"></i>
            </div>

            <!-- end slider navigation -->

        </div>

    </section>

    <!-- end banner slider -->

    <!-- start section -->

    <section class="big-section overflow-visible cover-background sm-background-image-none">
        {{-- style="background-image:url('images/demo-finance-bg-01.jpg');" --}}

        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center overlap-section z-index-1 overlap-section-three-fourth"
                data-anime='{ "el": "childs", "willchange": "transform", "perspective": [1200,1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 1000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- start features box item -->

                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">

                    <div
                        class="feature-box bg-white h-100 justify-content-start p-17 lg-p-15 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">

                        <div
                            class="feature-box-icon feature-box-icon-rounded mx-auto rounded-circle h-90px w-90px fs-24 text-dark-gray border border-2 border-color-extra-medium-gray mb-25px fw-500">
                            <img src="{{ asset('images/Door_Step_Service.png') }}" alt="">
                        </div>

                        <div class="feature-box-content">

                            <span class="d-inline-block alt-font text-dark-gray fw-500 mb-5px fs-22"> Door Step Service
                            </span>

                            <p class="mb-15px">Imagine having our dedicated team come right to your doorstep! We’re committed to making your experience smooth and hassle-free at every stage.</p>

                            {{-- <span class="fs-18 lh-26 text-base-color text-uppercase text-decoration-line-bottom fw-500">94%
                                score</span> --}}

                        </div>

                        <div class="feature-box-overlay bg-white border-radius-6px"></div>

                    </div>

                </div>

                <!-- end features box item -->

                <!-- start features box item -->

                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">

                    <div
                        class="feature-box bg-white h-100 justify-content-start p-17 lg-p-15 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">

                        <div
                            class="feature-box-icon feature-box-icon-rounded mx-auto rounded-circle h-90px w-90px fs-24 text-dark-gray border border-2 border-color-extra-medium-gray mb-25px fw-500">
                            <img src="{{ asset('images/Simple_Documentation.png') }}" alt="">
                        </div>

                        <div class="feature-box-content">

                            <span class="d-inline-block alt-font text-dark-gray fw-500 mb-5px fs-22">Simple Documentation
                            </span>

                            <p class="mb-15px">We’ve simplified the Vistara.Finance documentation process to make it as easy as possible. Forget the stress and focus on what truly matters to you!</p>
{{-- 
                            <span class="fs-18 lh-26 text-base-color text-uppercase text-decoration-line-bottom fw-500">96%
                                score</span> --}}

                        </div>

                        <div class="feature-box-overlay bg-white border-radius-6px"></div>

                    </div>

                </div>

                <!-- end features box item -->

                <!-- start features box item -->

                <div class="col icon-with-text-style-04 transition-inner-all">

                    <div
                        class="feature-box bg-white h-100 justify-content-start p-17 lg-p-15 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">

                        <div
                            class="feature-box-icon feature-box-icon-rounded mx-auto rounded-circle h-90px w-90px fs-24 text-dark-gray border border-2 border-color-extra-medium-gray mb-25px fw-500">
                            <img src="{{ asset('images/Customised_Eligibility.png') }}" alt="">
                        </div>

                        <div class="feature-box-content">

                            <span class="d-inline-block alt-font text-dark-gray fw-500 mb-5px fs-22">Customised Eligibility
                            </span>

                            <p class="mb-15px">We understand that everyone’s situation is different. That’s why our eligibility criteria are tailored just for you, ensuring the perfect fit for your needs.</p>

                            {{-- <span class="fs-18 lh-26 text-base-color text-uppercase text-decoration-line-bottom fw-500">98%
                                score</span> --}}

                        </div>

                        <div class="feature-box-overlay bg-white border-radius-6px"></div>

                    </div>

                </div>

                <!-- end features box item -->

            </div>

            <!-- start row -->
            <div class="row align-items-center mt-10" id="about">

                <!-- Image column -->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <img src="images/aboutUs.png" alt="About Us" class="img-fluid rounded-3">
                </div>

                <!-- Text column -->
                <div class="col-lg-7 col-md-6">
                    <h1 class="alt-font fw-600 ls-minus-2px text-dark-gray mb-3">About Us</h1>

                    <p class="lh-30">
                        <b>Vistara.Finance</b> (Loan Agency) by <b> Umesh Grover </b>help you compare Financial Products
                        like General
                        Insurance, Life Insurance, Secure Loan, Health Insurance.
                        To enable and sensible comparison, we have tied up with most of the Financial Institution disbursing
                        Loans and selling Life Insurance and Health Insurance in India.
                        We are coming with our new plans in which you can compare all the plan of Life, Health, General
                        based on multiple features. Our motto is to provide you the best plan as per your requirement.
                        Our Company is one step platform for comparing All Financial Products.
                        In Life Insurance we have
                        Child Plans, Term Insurance Plans, Pension Plans, Retirement Plans, and Investment Plans in which
                        Both Endowment and Ulip are there for this we have tied with all the 23 companies of Life Insurance.
                        In Health Insurance we have
                        Critical Illness plans, Medical Insurance Plans, Dengue Cover Policy, Cancer Policy, Heart product
                        and many more
                        In Secure Loans we are dealing with most popular Govt Bank, Private Banks and NBFC.
                        In General Insurance we have all the cash less policies for 2,4 vehicle and also polices for
                        commercial vehicle.
                        Our Team dealing with all these products from last 10 year on retails basis. But now we have the
                        best team and our service is the best services so that day by day we are adding client in our
                        portfolio. We are dealing in all over the India for these products.


                    </p>

                    {{-- <ul class="list-unstyled lh-30">
                        <li><i class="fa-solid fa-check text-base-color me-2"></i> Life Insurance (Child Plans, Term
                            Insurance, Pension, Retirement & Investment)</li>
                        <li><i class="fa-solid fa-check text-base-color me-2"></i> Health Insurance (Critical Illness,
                            Medical, Cancer, Heart & more)</li>
                        <li><i class="fa-solid fa-check text-base-color me-2"></i> Secure Loans (Govt Banks, Private Banks,
                            NBFCs)</li>
                        <li><i class="fa-solid fa-check text-base-color me-2"></i> General Insurance (Cashless policies for
                            vehicles & commercial use)</li>
                    </ul> --}}
                </div>

            </div>
            <!-- end row -->

        </div>

    </section>


    <!-- end section -->

    <!-- start section -->

    <section class="big-section overflow-visible cover-background sm-background-image-none"
        style="background-image:url('images/demo-finance-bg-01.jpg');">

        <div class="container">

            {{-- <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center overlap-section z-index-1 overlap-section-three-fourth"
                data-anime='{ "el": "childs", "willchange": "transform", "perspective": [1200,1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 1000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- start features box item -->

                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">

                    <div
                        class="feature-box bg-white h-100 justify-content-start p-17 lg-p-15 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">

                        <div
                            class="feature-box-icon feature-box-icon-rounded mx-auto rounded-circle h-90px w-90px fs-24 text-dark-gray border border-2 border-color-extra-medium-gray mb-25px fw-500">
                            01</div>

                        <div class="feature-box-content">

                            <span class="d-inline-block alt-font text-dark-gray fw-500 mb-5px fs-22">Vision to
                                plan</span>

                            <p class="mb-15px">Lorem ipsum simply dummy text printing typesetting.</p>

                            <span class="fs-18 lh-26 text-base-color text-uppercase text-decoration-line-bottom fw-500">94%
                                score</span>

                        </div>

                        <div class="feature-box-overlay bg-white border-radius-6px"></div>

                    </div>

                </div>

                <!-- end features box item -->

                <!-- start features box item -->

                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">

                    <div
                        class="feature-box bg-white h-100 justify-content-start p-17 lg-p-15 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">

                        <div
                            class="feature-box-icon feature-box-icon-rounded mx-auto rounded-circle h-90px w-90px fs-24 text-dark-gray border border-2 border-color-extra-medium-gray mb-25px fw-500">
                            02</div>

                        <div class="feature-box-content">

                            <span class="d-inline-block alt-font text-dark-gray fw-500 mb-5px fs-22">Plan to
                                market</span>

                            <p class="mb-15px">Lorem ipsum simply dummy text printing typesetting.</p>

                            <span class="fs-18 lh-26 text-base-color text-uppercase text-decoration-line-bottom fw-500">96%
                                score</span>

                        </div>

                        <div class="feature-box-overlay bg-white border-radius-6px"></div>

                    </div>

                </div>

                <!-- end features box item -->

                <!-- start features box item -->

                <div class="col icon-with-text-style-04 transition-inner-all">

                    <div
                        class="feature-box bg-white h-100 justify-content-start p-17 lg-p-15 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">

                        <div
                            class="feature-box-icon feature-box-icon-rounded mx-auto rounded-circle h-90px w-90px fs-24 text-dark-gray border border-2 border-color-extra-medium-gray mb-25px fw-500">
                            03</div>

                        <div class="feature-box-content">

                            <span class="d-inline-block alt-font text-dark-gray fw-500 mb-5px fs-22">Market to
                                growth</span>

                            <p class="mb-15px">Lorem ipsum simply dummy text printing typesetting.</p>

                            <span class="fs-18 lh-26 text-base-color text-uppercase text-decoration-line-bottom fw-500">98%
                                score</span>

                        </div>

                        <div class="feature-box-overlay bg-white border-radius-6px"></div>

                    </div>

                </div>

                <!-- end features box item -->

            </div> --}}

            <!-- start row -->

            <div class="row align-items-center mt-10">

                <div class="col-xl-6 col-lg-7 col-md-9"
                    data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <h1 class="alt-font fw-600 ls-minus-2px text-dark-gray">Why Choose vistara.finance Us?</h1>
                    <p> Because You Deserve Better</p>

                    <div class="mb-7">

                        <!-- start features box item -->

                        <div class="col icon-with-text-style-08 mb-25px">

                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">

                                <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle border border-2 border-color-base-color me-20px"
                                    style="border-color: #5CA904 !important;">

                                    <i class="fa-solid fa-check icon-small text-base-color"
                                        style="color: #5CA904 !important;"></i>

                                </div>

                                <div class="feature-box-content">

                                    <span class="w-65 md-w-70 sm-w-90 xs-w-100 d-block lh-30"
                                        style="font-weight: bold; color: black;">SAVE WATER</span>

                                </div>

                            </div>

                        </div>

                        <!-- end features box item -->

                        <!-- start features box item -->

                        <div class="col icon-with-text-style-08 mb-25px">

                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">

                                <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle border border-2 border-color-base-color me-20px"
                                    style="border-color: #5CA904 !important;">

                                    <i class="fa-solid fa-check icon-small text-base-color"
                                        style="color: #5CA904 !important;"></i>

                                </div>

                                <div class="feature-box-content">

                                    <span class="w-65 md-w-70 sm-w-90 xs-w-100 d-block lh-30"
                                        style="font-weight: bold; color: black;">SAVE ENERGY</span>

                                </div>

                            </div>

                        </div>


                        <div class="col icon-with-text-style-08">

                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">

                                <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle border border-2 border-color-base-color me-20px"
                                    style="border-color: #5CA904 !important;">

                                    <i class="fa-solid fa-check icon-small text-base-color"
                                        style="color: #5CA904 !important;"></i>

                                </div>

                                <div class="feature-box-content">

                                    <span class="w-65 md-w-70 sm-w-90 xs-w-100 d-block lh-30"
                                        style="font-weight: bold; color: black;">SAVE EARTH</span>

                                </div>

                            </div>

                        </div>

                        <!-- end features box item -->

                    </div>

                    <div class="d-inline-block">

                        <a href="#about"
                            class="btn btn-large btn-dark-gray btn-box-shadow fw-400 me-35px sm-me-25px btn-round-edge">About
                            company</a>

                        {{-- <a href="demo-finance-expertise.html"
                            class="btn btn-link btn-extra-large thin text-dark-gray xs-mt-15px xs-mb-15px">How we
                            work</a> --}}

                    </div>

                </div>

            </div>


            <!-- end row -->

        </div>

    </section>

    <!-- end section -->

    <!-- start section -->

    <section class="bg-very-light-gray overflow-hidden" id="product">

        <div class="container">

            <div class="row justify-content-center mb-2">

                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px">Professional
                        services</span>

                    <h1 class="alt-font text-dark-gray fw-600 ls-minus-1px">Our expertise</h1>

                </div>

            </div>

            <div class="row">

                <div class="col-12 position-relative">

                    <div class="outside-box-right-50 md-outside-box-right-70 sm-outside-box-right-0"
                        data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>

                        <div class="swiper magic-cursor ps-30px pe-30px sm-ps-0 sm-pe-0"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2, "spaceBetween": 50 }, "768": { "slidesPerView": 2, "spaceBetween": 40 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>

                            <div class="swiper-wrapper pt-30px pb-30px">

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i
                                                    class="line-icon-Basket-Coins icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Home
                                                    Loan</a>

                                                <p class="sm-mb-15px truncate-text">Affordable Home Loan
                                                    Dream it. Own it. Live it. secure your home loans with ease.
                                                    Making Your Dream Home a Reality
                                                    Fast and Easy Affordable
                                                </p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/HomeLoan.png)"></div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i class="line-icon-Coins icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Home
                                                    Construction Loan</a>

                                                <p class="sm-mb-15px truncate-text">Home Construction Loan
                                                    Build your vision with the best home construction loan
                                                </p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/HomeConstruction.png)"></div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i
                                                    class="line-icon-Bar-Chart3 icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Home
                                                    Renovation Loan
                                                </a>

                                                <p class="sm-mb-15px truncate-text">Home Improvement & Home Renovation Loan
                                                    Give your space a new look – Get a home renovation loan today!
                                                </p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/HomeRenovationLoan.png)"></div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i
                                                    class="line-icon-Archery-2 icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Loan
                                                    Against Property
                                                </a>

                                                <p class="sm-mb-15px truncate-text">If you ever find that you need some
                                                    urgent funds,
                                                    then Vistara.Finance Mortgage Loan allows you to borrow a substantial
                                                    amount of money by mortgaging your property as collateral.
                                                </p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/LoanAgainstProperty.webp)">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i
                                                    class="line-icon-Basket-Coins icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Commercial
                                                    Purchase Loan
                                                </a>

                                                <p class="sm-mb-15px truncate-text">You will get the Commercial Loan for
                                                    your Commercial
                                                    property at very reasonable rate.</p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/CommercialPurchaseLoan.png)">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i
                                                    class="line-icon-Basket-Coins icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Medical
                                                    insurance
                                                </a>

                                                <p class="sm-mb-15px truncate-text">As a matter of fact, inflation in
                                                    medicare is higher
                                                    than inflation in food and other articles. This makes health insurance
                                                    critical for individuals, especially if they are responsible for the
                                                    financial well-being of the family.</p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/Medicalinsurance.png)">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                                <!-- start slider item -->

                                <div class="swiper-slide">

                                    <div class="row g-0 services-box-style-02">

                                        <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 box-shadow-extra-large">

                                            <div class="services-box-icon">

                                                <i class="line-icon-Coins icon-extra-large text-base-color mb-25px"></i>

                                            </div>

                                            <div class="services-box-content">

                                                <a
                                                    class="d-inline-block alt-font text-dark-gray fs-22 md-fs-20 fw-500">Life insurance</a>

                                                <p class="sm-mb-15px truncate-text">We always want the best for our family
                                                    ,
                                                    An essential part of financial planning is to create provisions for your
                                                    family and loved ones following your death. Life insurance can ensure
                                                    financial security to those who mean the most to you, such as your
                                                    spouse, children and dependent parents.</p>

                                                {{-- <a 
                                                    class="btn btn-extra-large thin btn-link text-base-color">Learn
                                                    more</a> --}}

                                            </div>

                                        </div>

                                        <div class="col-sm-6 services-box-img xs-h-300px">

                                            <div class="h-100 cover-background"
                                                style="background-image: url(images/product/Lifeinsurance.png)"></div>

                                        </div>

                                    </div>

                                </div>

                                <!-- end slider item -->

                            </div>

                        </div>

                    </div>

                    <!-- start slider pagination -->

                    <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->

                    <!-- end slider pagination -->

                </div>

            </div>

        </div>

    </section>

    <!-- end section -->

    <!-- start section -->

    {{-- <section class="big-section">

        <div class="container">

            <div class="row align-items-center justify-content-center">

                <div class="col-lg-6 md-mb-15 xs-mb-22 position-relative"
                    data-anime='{ "opacity": [0,1], "duration": 1000, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <div class="overflow-hidden position-relative top-minus-25px lg-top-minus-0px">

                        <img class="w-100" src="images/demo-finance-02.jpg" alt="">

                    </div>

                    <div class="position-absolute right-15px bottom-minus-20px w-60"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">

                        <img class="w-100" src="images/demo-finance-01.jpg" alt="">

                    </div>

                </div>

                <div class="col-lg-5 offset-lg-1 col-md-9 text-center text-lg-start"
                    data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>

                    <h1 class="alt-font fw-600 text-dark-gray ls-minus-1px">Strategic path for <span class="mb-0 mx-auto"
                            data-fancy-text='{ "effect": "wave", "direction": "up", "string": [ "advance", "finance", "funding" ], "duration": 2000 }'></span>
                    </h1>

                    <p class="w-95 md-w-100">Lorem ipsum is simply dummy text the printing typesetting industry. Lorem
                        ipsum has been the industry's standard dummy text ever since.</p>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2 counter-style-04 mb-7">

                        <!-- start counter item -->

                        <div class="col last-paragraph-no-margin xs-mb-20px">

                            <h2 class="vertical-counter d-inline-flex ls-minus-2px alt-font text-base-color fw-600 mb-0"
                                data-text="+" data-to="260"></h2>

                            <p class="alt-font fs-20 text-dark-gray">Experienced person</p>

                        </div>

                        <!-- end counter item -->

                        <!-- start counter item -->

                        <div class="col last-paragraph-no-margin">

                            <h2 class="vertical-counter d-inline-flex ls-minus-2px alt-font text-base-color fw-600 mb-0"
                                data-text="+" data-to="200"></h2>

                            <p class="alt-font fs-20 text-dark-gray">Worldwide offices</p>

                        </div>

                        <!-- end counter item -->

                    </div>

                    <a href="demo-finance-contact.html"
                        class="btn btn-large btn-dark-gray btn-box-shadow fw-400 btn-round-edge">Joining with us</a>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- end section -->

    <!-- start section -->

    {{-- <section class="bg-very-light-gray overflow-hidden">

        <div class="container-fluid">

            <div class="row justify-content-center mb-2">

                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px">Satisfied
                        customers</span>

                    <h1 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-0">Rewarding cases</h1>

                </div>

            </div>

            <div class="row align-items-center">

                <div class="col-12 position-relative"
                    data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <div class="swiper slider-three-slide swiper-initialized swiper-horizontal magic-cursor"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loopedSlides": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": true, "dynamicBullets": false }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>

                        <div class="swiper-wrapper pt-30px pb-30px">

                            <div class="swiper-slide review-style-04 d-none d-lg-block h-auto"></div>

                            <!-- start review item -->

                            <div class="swiper-slide review-style-04">

                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">

                                    <div class="review-star-icon fs-18 lh-24">

                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>

                                    </div>

                                    <span class="fw-500 fs-22 text-dark-gray mb-20px">Amazing product</span>

                                    <p class="mb-20px">A friend referred your company to me as one that would combine
                                        experience and value into an affordable.</p>

                                    <div class="mt-5px d-flex align-items-center">

                                        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-02.jpg"
                                            alt="">

                                        <div class="d-inline-block align-middle">

                                            <div class="text-dark-gray fw-500">Herman Miller</div>

                                            <div class="lh-20">Founder</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end review item -->

                            <!-- start review item -->

                            <div class="swiper-slide review-style-04">

                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">

                                    <div class="review-star-icon fs-18 lh-24">

                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>

                                    </div>

                                    <span class="fw-500 fs-22 text-dark-gray mb-20px">Customizability</span>

                                    <p class="mb-20px">Your company has provided consistent, high quality, accounting
                                        support during the growth.</p>

                                    <div class="mt-5px d-flex align-items-center">

                                        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-03.jpg"
                                            alt="">

                                        <div class="d-inline-block align-middle">

                                            <div class="text-dark-gray fw-500">Leonel Mooney</div>

                                            <div class="lh-20">Manager</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end review item -->

                            <!-- start review item -->

                            <div class="swiper-slide review-style-04">

                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">

                                    <div class="review-star-icon fs-18 lh-24">

                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>

                                    </div>

                                    <span class="fw-500 fs-22 text-dark-gray mb-20px">Premium quality</span>

                                    <p class="mb-20px">Thank you for providing professional and value-added service that
                                        has exceeded our expectations.</p>

                                    <div class="mt-5px d-flex align-items-center">

                                        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-04.jpg"
                                            alt="">

                                        <div class="d-inline-block align-middle">

                                            <div class="text-dark-gray fw-500">Matthew Taylor</div>

                                            <div class="lh-20">Expert</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end review item -->

                            <!-- start review item -->

                            <div class="swiper-slide review-style-04">

                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">

                                    <div class="review-star-icon fs-18 lh-24">

                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>

                                    </div>

                                    <span class="fw-500 fs-22 text-dark-gray mb-20px">Code quality</span>

                                    <p class="mb-20px">A friend referred your company to me as one that would combine
                                        experience and value into an affordable.</p>

                                    <div class="mt-5px d-flex align-items-center">

                                        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-05.jpg"
                                            alt="">

                                        <div class="d-inline-block align-middle">

                                            <div class="text-dark-gray fw-500">Shoko Mugikura</div>

                                            <div class="lh-20">Manager</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end review item -->

                            <!-- start review item -->

                            <div class="swiper-slide review-style-04">

                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">

                                    <div class="review-star-icon fs-18 lh-24">

                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>

                                    </div>

                                    <span class="fw-500 fs-22 text-dark-gray mb-20px">Creative evolution</span>

                                    <p class="mb-20px">Thank you for providing professional and value-added service that
                                        has exceeded our expectations.</p>

                                    <div class="mt-5px d-flex align-items-center">

                                        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-06.jpg"
                                            alt="">

                                        <div class="d-inline-block align-middle">

                                            <div class="text-dark-gray fw-500">Jacob Kalling</div>

                                            <div class="lh-20">Designer</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end review item -->

                            <!-- start review item -->

                            <div class="swiper-slide review-style-04">

                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">

                                    <div class="review-star-icon fs-18 lh-24">

                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>

                                    </div>

                                    <span class="fw-500 fs-22 text-dark-gray mb-20px">Amazing product</span>

                                    <p class="mb-20px">A friend referred your company to me as one that would combine
                                        experience and value into an affordable.</p>

                                    <div class="mt-5px d-flex align-items-center">

                                        <img class="rounded-circle w-90px h-90px me-20px" src="images/avtar-07.jpg"
                                            alt="">

                                        <div class="d-inline-block align-middle">

                                            <div class="text-dark-gray fw-500">Alexa Harad</div>

                                            <div class="lh-20">Manager</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end review item -->

                            <div class="swiper-slide review-style-04 d-none d-lg-block h-auto"></div>

                        </div>

                        <!-- start slider pagination -->

                        <!--<div class="swiper-pagination slider-four-slide-pagination-2 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->

                        <!-- end slider pagination -->

                    </div>

                </div>

            </div>

            <div class="row justify-content-center"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>

                <div class="col-lg-7 text-center mt-1">

                    <h4 class="alt-font text-dark-gray fw-500 mt-25px ls-minus-1px">Any question? <a
                            href="demo-finance-contact.html"
                            class="fw-600 text-decoration-line-bottom-medium text-dark-gray d-inline-block">We're ready
                            to help!</a></h4>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- end section -->



    <section class="bg-very-light-gray overflow-hidden" id="product">

        <div class="container">

            <div class="row justify-content-center mb-2">

                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px">Gallery</span>

                    <h1 class="alt-font text-dark-gray fw-600 ls-minus-1px">Our Gallery</h1>

                </div>

            </div>

            <div class="row">

                <div class="col-12 position-relative">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @for ($i = 0; $i <= 17; $i++)
                                <div class="swiper-slide gallerySwiper"><img src="images/gallery/{{ $i }}.jpg"
                                        width="200px" alt="About Us 1" />
                                </div>
                            @endfor

                        </div>

                        <!-- Navigation buttons -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- start section -->

    {{-- <section>

        <div class="container">

            <div class="row justify-content-center mb-5">

                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                    <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px">Financial
                        article</span>

                    <h1 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-0">Interesting news</h1>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <ul class="blog-simple blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "willchange": "transform", "translateY": [30, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateY": [-30, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>

                        <li class="grid-sizer"></li>

                        <!-- start blog item -->

                        <li class="grid-item">

                            <figure class="position-relative mb-0 box-hover">

                                <div class="blog-image">

                                    <img src="images/demo-finance-blog-01.jpg" alt="" />

                                    <span class="box-overlay bg-dark-slate-blue"></span>

                                    <span
                                        class="bg-gradient-gray-light-dark-transparent position-absolute opacity-4 top-0px left-0px w-100 h-100"></span>

                                </div>

                                <figcaption class="d-flex flex-column h-100 justify-content-end">

                                    <div class="position-relative post-content p-13 text-center last-paragraph-no-margin">

                                        <div class="position-relative z-index-2 overflow-hidden">

                                            <a href="demo-finance-news.html"
                                                class="d-inline-block fs-16 mb-5px text-base-color text-uppercase fw-500">26
                                                November 2021</a>

                                            <a href="demo-finance-blog-single-simple.html"
                                                class="card-title fs-22 alt-font text-white mb-0 d-block">Teamwork is
                                                essential for small teams challenges</a>

                                            <div class="hover-text"><a href="demo-finance-blog-single-simple.html"
                                                    class="btn btn-link-gradient btn-large text-white thin mt-20px mb-5px opacity-6 fw-400">Continue
                                                    reading<span class="bg-white"></span></a></div>

                                        </div>

                                        <div class="box-overlay bg-dark-gray"></div>

                                    </div>

                                </figcaption>

                            </figure>

                        </li>

                        <!-- end blog item -->

                        <!-- start blog item -->

                        <li class="grid-item">

                            <figure class="position-relative mb-0 box-hover">

                                <div class="blog-image">

                                    <img src="images/demo-finance-blog-02.jpg" alt="" />

                                    <span class="box-overlay bg-dark-slate-blue"></span>

                                    <span
                                        class="bg-gradient-gray-light-dark-transparent position-absolute opacity-4 top-0px left-0px w-100 h-100"></span>

                                </div>

                                <figcaption class="d-flex flex-column h-100 justify-content-end">

                                    <div class="position-relative post-content p-13 text-center last-paragraph-no-margin">

                                        <div class="position-relative z-index-2 overflow-hidden">

                                            <a href="demo-finance-news.html"
                                                class="d-inline-block fs-16 mb-5px text-base-color text-uppercase fw-500">14
                                                february 2020</a>

                                            <a href="demo-finance-blog-single-simple.html"
                                                class="card-title fs-22 alt-font text-white mb-0 d-block">Recognizing
                                                the need is the primary condition</a>

                                            <div class="hover-text"><a href="demo-finance-blog-single-simple.html"
                                                    class="btn btn-link-gradient btn-large text-white thin mt-20px mb-5px opacity-6 fw-400">Continue
                                                    reading<span class="bg-white"></span></a></div>

                                        </div>

                                        <div class="box-overlay bg-dark-gray"></div>

                                    </div>

                                </figcaption>

                            </figure>

                        </li>

                        <!-- end blog item -->

                        <!-- start blog item -->

                        <li class="grid-item">

                            <figure class="position-relative mb-0 box-hover">

                                <div class="blog-image">

                                    <img src="images/demo-finance-blog-03.jpg" alt="" />

                                    <span class="box-overlay bg-dark-slate-blue"></span>

                                    <span
                                        class="bg-gradient-gray-light-dark-transparent position-absolute opacity-4 top-0px left-0px w-100 h-100"></span>

                                </div>

                                <figcaption class="d-flex flex-column h-100 justify-content-end">

                                    <div class="position-relative post-content p-13 text-center last-paragraph-no-margin">

                                        <div class="position-relative z-index-2 overflow-hidden">

                                            <a href="demo-finance-news.html"
                                                class="d-inline-block fs-16 mb-5px text-base-color text-uppercase fw-500">08
                                                january 2020</a>

                                            <a href="demo-finance-blog-single-simple.html"
                                                class="card-title fs-22 alt-font text-white mb-0 d-block">Make business
                                                easy with beautiful application</a>

                                            <div class="hover-text"><a href="demo-finance-blog-single-simple.html"
                                                    class="btn btn-link-gradient btn-large text-white thin mt-20px mb-5px opacity-6 fw-400">Continue
                                                    reading<span class="bg-white"></span></a></div>

                                        </div>

                                        <div class="box-overlay bg-dark-gray"></div>

                                    </div>

                                </figcaption>

                            </figure>

                        </li>

                        <!-- end blog item -->

                    </ul>

                </div>

            </div>

        </div>

    </section> --}}

    <!-- Contact Us Section -->
    <section class="py-5 bg-light" id="contactUs">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold text-dark mb-4">Contact Us</h2>
                    <p class="text-muted">Get in touch with us anytime.</p>

                    <ul class="list-unstyled mt-4">
                        <li class="mb-3">
                            <i class="fa-solid fa-location-dot text-primary me-2 text-base-color"></i>
                            <span>210, Gali Number 3, Madanpuri,
                                Sector 8, Gurugram, Haryana 122001
                            </span>
                        </li>
                        <a
                            href="https://api.whatsapp.com/send/?phone=%2B919289094469&text=Hi+Friend&type=phone_number&app_absent=0">
                            <li class="mb-3">
                                <i class="fa-solid fa-phone text-primary me-2 text-base-color"></i>
                                <span>+91 99900 144 69</span>
                            </li>
                        </a>
                        {{-- <li class="mb-3">
                            <i class="text-base-color fa-solid fa-envelope text-primary me-2 "></i>
                            <span>info@</span>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            var charLimit = 100; // character limit
            $(".truncate-text").each(function() {
                var fullText = $(this).text().trim();
                if (fullText.length > charLimit) {
                    var shortText = fullText.substring(0, charLimit) + "...";
                    // Wrap with span and add a Read more link
                    $(this).html(
                        '<span class="short-text">' + shortText + '</span>' +
                        '<span class="full-text d-none">' + fullText + '</span>' +
                        ' <a href="#" class="read-more">Read more</a>'
                    );
                }
            });

            $(document).on("click", ".read-more", function(e) {
                e.preventDefault();
                var $p = $(this).closest(".truncate-text");
                $p.find(".short-text, .full-text").toggleClass("d-none");
                $(this).text($(this).text() === "Read more" ? "Read less" : "Read more");
            });
        });
    </script>
    <!-- end section -->
@endsection
