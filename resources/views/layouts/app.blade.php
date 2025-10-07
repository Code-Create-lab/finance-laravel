<!doctype html>

<html class="no-js" lang="en">

<head>

    <title>Vistara Finance</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="author" content="ThemeZaa">

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords"
        content="Auto Loan Delhi NCR, Balance Transfer Loan Delhi NCR, Best home loan consultant in Delhi Delhi NCR, Best home loan consultant in Faridabad Delhi NCR, Best home loan consultant in Gurgaon Delhi NCR, Best home loan consultant in Gurugram Delhi NCR, Best home loan consultant in Haryana Delhi NCR, Best home loan consultant in Noida Delhi NCR, Best Home Loan in India Delhi NCR, Bike Loan Delhi NCR, Business Loan Delhi NCR, Car Loan Delhi NCR, Car Loan EMI Delhi NCR, Collateral Delhi NCR, Credit Delhi NCR, credit cards Delhi NCR, credit score / credit scoring Delhi NCR, Debt Delhi NCR, Debt Consolidation Loan Delhi NCR, Education Loan Delhi NCR, Education Loan EMI Delhi NCR, Emergency Loan Delhi NCR, EMI (Equated Monthly Installment) Delhi NCR, Finance Delhi NCR, Finance Commission Delhi NCR, finance Gurgaon gurugram Delhi ncr Delhi NCR, Fintech Loan Delhi NCR, Gold Loan Delhi NCR, Higher Education Loan Delhi NCR, Home Finance Delhi NCR, Home Loan Delhi NCR, Home Loan Delhi NCR, Home loan agents near me Delhi NCR, Home Loan Balance Transfer Delhi NCR, Home Loan Calculator Delhi NCR, Home loan documents required Delhi NCR, Home Loan Eligibility Delhi NCR, Home Loan Eligibility Delhi NCR, Home loan eligibility calculator Delhi NCR, Home Loan EMI Calculator Delhi NCR, Home Loan EMI Calculator Delhi NCR, Home loan for salaried employees Delhi NCR, Home loan for self-employed Delhi NCR, Home Loan Interest Rate Delhi NCR, Home Loan Interest Rate Delhi NCR, Home loan interest rates today Delhi NCR, Home loan office near me Delhi NCR, Home loan with low CIBIL score Delhi NCR, Home Loan With">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos.">

    <!-- favicon icon -->

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

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
    @livewireStyles

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ET9MFRCE67"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ET9MFRCE67');
    </script>

    <style>
        .d-none {
            display: none;
        }

        .read-more {
            color: #007bff;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>

    <style>
        .whatsapp_float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            border-radius: 50%;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .whatsapp_float img {
            width: 35px;
            height: 35px;
        }
    </style>

</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#bc8947" class="custom-cursor">


    <!-- WhatsApp Floating Button -->
    <a href="https://api.whatsapp.com/send/?phone=%2B919289094469&text=Hi+Friend&type=phone_number&app_absent=0"
        class="whatsapp_float" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="50px">
    </a>

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
    <div class="row text-center">

        <div class="container">
            <p>Designed by <a target="_blank" href=" https://bulksmsdelhincr.com/ "><b>BulkSMSDelhiNcr</b></a> </p>
        </div>
    </div>
    <!-- start scroll progress -->

    {{-- <div class="scroll-progress d-none d-xxl-block">

        <a href="#" class="scroll-top" aria-label="scroll">

            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>

        </a>

    </div> --}}

    <!-- end scroll progress -->

    <!-- javascript libraries -->

    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/vendors.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>


    <script>
        $(document).on('click', '.nav-item', function() {
            var baseUrl = '/'; // your page
            var hash = $(this).data('hash'); // e.g. section1
            var finalUrl = baseUrl + '#' + hash;

            console.log("finalUrl", finalUrl);

            // Force full reload
            window.location.href = finalUrl;
            window.location.reload(); // <- this forces the reload
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4, // default for large screens
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 0px (mobile)
                0: {
                    slidesPerView: 1
                },
                // when window width is >= 768px (tablet/desktop)
                768: {
                    slidesPerView: 4
                }
            }
        });


        // Website Content Protection Script
        // Add this script to your HTML file before closing </body> tag

        (function() {
            'use strict';

            // 1. Disable Right Click
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                showWarning('Right click is disabled on this website');
                return false;
            });

            // 2. Disable Text Selection
            document.addEventListener('selectstart', function(e) {
                e.preventDefault();
                return false;
            });

            // 3. Disable Copy (Ctrl+C / Cmd+C)
            document.addEventListener('copy', function(e) {
                e.preventDefault();
                showWarning('Copying is disabled on this website');
                return false;
            });

            // 4. Disable Cut (Ctrl+X / Cmd+X)
            document.addEventListener('cut', function(e) {
                e.preventDefault();
                return false;
            });

            // 5. Disable Paste (Optional - uncomment if needed)
            // document.addEventListener('paste', function(e) {
            //     e.preventDefault();
            //     return false;
            // });

            // 6. Disable Keyboard Shortcuts
            document.addEventListener('keydown', function(e) {
                // F12 - Developer Tools
                if (e.keyCode === 123) {
                    e.preventDefault();
                    // showWarning('Developer tools are disabled');
                    return false;
                }

                // Ctrl+Shift+I / Cmd+Option+I - Inspect Element
                if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.keyCode === 73) {
                    e.preventDefault();
                    showWarning('Inspect element is disabled');
                    return false;
                }

                // Ctrl+Shift+J / Cmd+Option+J - Console
                if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.keyCode === 74) {
                    e.preventDefault();
                    showWarning('Console is disabled');
                    return false;
                }

                // Ctrl+U / Cmd+U - View Source
                if ((e.ctrlKey || e.metaKey) && e.keyCode === 85) {
                    e.preventDefault();
                    showWarning('View source is disabled');
                    return false;
                }

                // Ctrl+S / Cmd+S - Save Page
                if ((e.ctrlKey || e.metaKey) && e.keyCode === 83) {
                    e.preventDefault();
                    showWarning('Saving page is disabled');
                    return false;
                }

                // Ctrl+C / Cmd+C - Copy
                if ((e.ctrlKey || e.metaKey) && e.keyCode === 67) {
                    e.preventDefault();
                    showWarning('Copying is disabled');
                    return false;
                }

                // Ctrl+A / Cmd+A - Select All
                if ((e.ctrlKey || e.metaKey) && e.keyCode === 65) {
                    e.preventDefault();
                    showWarning('Select all is disabled');
                    return false;
                }

                // Ctrl+P / Cmd+P - Print
                if ((e.ctrlKey || e.metaKey) && e.keyCode === 80) {
                    e.preventDefault();
                    showWarning('Printing is disabled');
                    return false;
                }
            });

            // 7. Disable Drag and Drop for Images
            document.addEventListener('dragstart', function(e) {
                if (e.target.tagName === 'IMG') {
                    e.preventDefault();
                    return false;
                }
            });

            // 8. Detect DevTools Opening (Basic Detection)
            let devtoolsOpen = false;
            const threshold = 160;

            setInterval(function() {
                if (window.outerWidth - window.innerWidth > threshold ||
                    window.outerHeight - window.innerHeight > threshold) {
                    if (!devtoolsOpen) {
                        devtoolsOpen = true;
                        // showWarning('Developer tools detected! Please close them.');
                        // Optional: Redirect or blur content
                        // document.body.style.filter = 'blur(10px)';
                    }
                } else {
                    if (devtoolsOpen) {
                        devtoolsOpen = false;
                        // document.body.style.filter = 'none';
                    }
                }
            }, 500);

            // 9. Clear Console Periodically (Optional)
            setInterval(function() {
                console.clear();
            }, 2000);

            // 10. Disable Image Context Menu
            const images = document.getElementsByTagName('img');
            for (let i = 0; i < images.length; i++) {
                images[i].addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                    return false;
                });
                // Prevent dragging
                images[i].setAttribute('draggable', false);
            }

            // Warning Message Function
            function showWarning(message) {
                // Create a simple alert-style warning
                const warning = document.createElement('div');
                warning.textContent = message;
                warning.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #ff4444;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            z-index: 999999;
            font-family: Arial, sans-serif;
            font-size: 14px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            animation: slideIn 0.3s ease-out;
        `;

                document.body.appendChild(warning);

                setTimeout(function() {
                    warning.style.animation = 'slideOut 0.3s ease-in';
                    setTimeout(function() {
                        if (warning.parentNode) {
                            warning.parentNode.removeChild(warning);
                        }
                    }, 300);
                }, 2000);
            }

            // Add CSS animations
            const style = document.createElement('style');
            style.textContent = `
        @keyframes slideIn {
            from { transform: translateX(400px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(400px); opacity: 0; }
        }
        * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        input, textarea {
            -webkit-user-select: text;
            -moz-user-select: text;
            -ms-user-select: text;
            user-select: text;
        }
    `;
            document.head.appendChild(style);

            console.log('%cSTOP!', 'color: red; font-size: 60px; font-weight: bold;');
            console.log('%cThis is a browser feature intended for developers.', 'font-size: 18px;');
            console.log('%cIf someone told you to copy-paste something here, it is a scam.', 'font-size: 18px;');

        })();
    </script>
    @livewireScripts
</body>

</html>
