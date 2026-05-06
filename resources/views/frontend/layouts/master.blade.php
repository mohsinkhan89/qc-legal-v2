<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Metas  --}}
        <meta charset="UTF-8">
        <link rel="canonical" href="{{ request()->url() }}" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="msapplication-TileColor" content="#0B223E">
        <meta name="msapplication-TileImage" content="{{ url('frontend/assets/images/logo/logo-color.png') }}">
        <meta name="author" content="{{ ucwords(config('app.name')) }}">
        <meta name="theme-color" content="#0B223E">
        <meta name="author" content="{{ ucwords(config('app.name')) }}">
        <meta property="og:site_name" content="{{ ucwords(config('app.name')) }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ url('frontend/assets/images/logo/logo-white-golden.png') }}">
        <meta name="twitter:image" content="{{ url('frontend/assets/images/logo/logo-white-golden.png') }}">
        <meta name="twitter:site" content="{{ setting('site.twiiterlink') }}">
        <meta name="twitter:card" content="summary_large_image">
        @yield('metas')
        {{-- CSS  --}}
        <link rel="stylesheet" href="{{ url('frontend/assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/theme.min.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/utility.min.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/demo/modern-business/base.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/demo/modern-business/modern-business.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/scss/style.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/cookie.css') }}?v={{ config('app.assets_version') }}">
        <link rel="stylesheet" href="{{ url('frontend/assets/css/custom.css') }}?v={{ config('app.assets_version') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chivo&family=Inter:wght@700&display=swap" rel="stylesheet">
        <link class = "recursivecssload" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        {{-- Favicon  --}}
        <link rel="apple-touch-icon" sizes="57x57" href="{{ url('frontend/assets/images/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ url('frontend/assets/images/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ url('frontend/assets/images/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url('frontend/assets/images/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ url('frontend/assets/images/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ url('frontend/assets/images/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ url('frontend/assets/images/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ url('frontend/assets/images/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('frontend/assets/images/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('frontend/assets/images/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('frontend/assets/images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ url('frontend/assets/images/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('frontend/assets/images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ url('frontend/assets/images/favicon/manifest.json') }}">
        @yield('title')
        @yield('style')
        
        <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-LJ9E1C29B3"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-LJ9E1C29B3'); </script>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Qclegal",
                "image": "https://qclegal.com/frontend/assets/images/logo/logo-white-golden-v2.png",
                "@id": "",
                "url": "https://qclegal.com/",
                "telephone": "0161 880 0118",
                "priceRange": "$$$$",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Bartle House Oxford Court,",
                    "addressLocality": "Manchester",
                    "postalCode": "M2 3WQ",
                    "addressCountry": "GB"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 53.4765038,
                    "longitude": -2.2438975
                },
                "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                    ],
                    "opens": "00:09",
                    "closes": "18:00"
                },
                "sameAs": [
                    "https://www.facebook.com/profile.php?id=61571143406265",
                    "https://www.linkedin.com/company/qc-legal/",
                    "https://www.instagram.com/qc_legal/"
                ]
            }
        </script>
        
        <script type="text/javascript">     (function(c,l,a,r,i,t,y){         c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};         t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;         y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);     })(window, document, "clarity", "script", "wd3ndqeu97"); </script>
    </head>
    <body class="lqd-pf-single lqd-pf-single-style-1 lqd-stack-buttons-style-1 lqd-stack-nav-style-3 lqd-stack-nums-style-1 lqd-stack-nav-numbers-visible site-wide-layout" data-mobile-nav-breakpoint="1199" data-mobile-nav-style="classic" data-mobile-nav-scheme="light" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="light" data-mobile-logo-alignment="default">
        <div id="wrap">
        <div class="lqd-sticky-placeholder hidden"></div>
        @include('frontend.includes.header')

        <main class="content bg-white" id="" data-liquid-stack="true" data-stack-options='{"navigation":true,"prevNextButtons":false,"pageNumber":true,"prevNextLabels":{"prev":"Previous","next":"Next"},"effect":"fadeScale","disableOnMobile":true}'>
            {{-- <div id="lqd-contents-wrap"> --}}
                @if (env('PRODUCTION_MODE') != 'local')
                    <div class="under-development position-fixed bottom-20 left-20 d-flex flex-column justify-content-center align-items-center bg-warning text-white text-center p-3" style="opacity: .5;border-radius: 10px;z-index: 99999;position: fixed;background: #dd9325;display: flex;flex-direction: column;align-items: center;padding: 10px 30px;">
                        <div class="icon" style="font-size: 3rem;">
                            <i class="fa-solid fa-triangle-person-digging ts-3-0"></i>
                        </div>
                        <div class="text" style="line-height: 19px;">This website is <br> currently under development.</div>
                    </div>
                @endif
                @yield('content')
            {{-- </div> --}}
        </main>

        @include('frontend.includes.footer')
        </div>
        <div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
            <div class="lqd-modal-inner">
                <div class="lqd-modal-head"></div>
                <section class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-norepeat" style="background-image: url({{ url('frontend/assets/images/common/modal-bg.jpeg') }});">
                <div class="container p-0">
                    <div class="row m-0 min-h-100vh items-center">
                    <div class="col col-12 col-md-6 pr-100 module-content">
                        <div class="ld-fancy-heading">
                        <h2 class="ld-fh-element mb-0/75em text-122 leading-0/8em font-medium text-black">Send a <span>message.</span>
                        </h2>
                        </div>
                        <div class="ld-fancy-heading">
                        <p class="text-18 ld-fh-element">We're here to answer any question you may have.</p>
                        </div>
                        <div class="spacer w-full sm:hidden">
                        <div class="w-full h-140"></div>
                        </div>
                        <div class="container-fluid px-0 text-black">
                        <div class="row m-0">
                            <div class="col col-md-6 p-0">
                            <div class="ld-fancy-heading relative mb-10">
                                <h6 class="ld-fh-element mb-0/5em inline-block relative text-black">careers</h6>
                            </div>
                            <div class="mb-10 ld-fancy-heading relative">
                                <p class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/2em font-medium text-text">Would you like to join our growing team?</p>
                            </div>
                            <div class="ld-fancy-heading relative mb-10">
                                <p class="ld-fh-element mb-0/5em inline-block relative">
                                <a href="#" class="text-16 font-bold leading-1/2em text-black">
                                    <span class="__cf_email__" data-cfemail="bad9dbc8dfdfc8c9fad2cfd894d9d5d7">[email&#160;protected]</span>
                                </a>
                                </p>
                            </div>
                            </div>
                            <div class="col col-md-6 p-0">
                            <div class="ld-fancy-heading relative mb-10">
                                <h6 class="ld-fh-element mb-0/5em inline-block relative text-14 font-bold tracking-0 text-black">Feedbacks</h6>
                            </div>
                            <div class="mb-10 ld-fancy-heading relative mb-10">
                                <p class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/2em font-medium text-text">Have a project in mind? Send a message.</p>
                            </div>
                            <div class="ld-fancy-heading relative">
                                <p class="ld-fh-element mb-0/5em inline-block relative">
                                <a href="#" class="text-16 font-bold leading-1/2em text-black">
                                    <span class="__cf_email__" data-cfemail="7e171018113e160b1c501d1113">[email&#160;protected]</span>
                                </a>
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-5 offset-md-1">
                        <div class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block">
                        <div role="form">
                            <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            </div>
                            <form action="#urlleft" method="post" class="lqd-cf-form" novalidate="novalidate" data-status="init">
                            <p>
                                <span class="lqd-form-control-wrap">
                                <input class="border-black-20 text-black text-14 font-normal bg-transparent" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your Name">
                                </span>
                                <span class="lqd-form-control-wrap">
                                <input class="border-black-20 text-black text-14 font-normal bg-transparent" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your email address">
                                </span>
                                <span class="lqd-form-control-wrap">
                                <input class="border-black-20 text-black text-14 font-normal bg-transparent" type="text" name="subject" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Subject">
                                </span>
                                <span class="lqd-form-control-wrap">
                                <textarea class="border-black-20 text-black text-14 font-normal bg-transparent" name="message" cols="10" rows="4" aria-required="true" aria-invalid="false" placeholder="Your Message"></textarea>
                                </span>
                                <span class="lqd-form-control-wrap">
                                <span class="lqd-cf-acceptance">
                                    <span>
                                    <label>
                                        <input type="checkbox" name="acceptance" value="1" aria-invalid="false">
                                        <span class="lqd-cf-list-item-label">I am bound by the terms of the Service I accept Privacy Policy</span>
                                    </label>
                                    </span>
                                </span>
                                </span>
                                <input type="submit" value="Send email" class="has-spinner lqd-cf-submit border-none text-16 font-bold uppercase tracking-0/5 text-white bg-primary hover:bg-primary">
                            </p>
                            </form>
                            <div class="lqd-cf-response-output"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
                <div class="lqd-modal-foot"></div>
            </div>
        </div>

        {{-- Cookie Start --}}
        <div class="cookie-popup-container" style="display: none;">
            <div class="cookie-popup">
                <div class="cookie-header">
                    <div class="consent-title">
                        <span>We value your privacy</span>
                    </div>
                </div>
                <div class="cookie-para">
                    <p>
                        We use cookies to enhance your browsing experience, analyze site traffic, and personalize content. By clicking "Accept," you consent to our use of cookies.
                    </p>
                </div>

                <div class="cookie-button-container">
                    <div class="nav-buttons">
                        <a href="javascript:void(0);" class="d-flex justify-content-center align-items-center btn-customize me-2 accept-design">
                            <span class="btn5 accept-cookie">Accept</span>
                        </a>
                        <a href="javascript:void(0);" class="d-flex justify-content-center align-items-center decline-css btn-customize me-2 accept-design">
                            <span class="btn5 decline-cookie">Decline</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Cookie End --}}

        {{-- <script src="{{ url('frontend/assets/vendors/jquery.min.js') }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ url('frontend/assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/gsap/minified/gsap.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/gsap/minified/ScrollTrigger.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/gsap/utils/SplitText.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/fastdom/fastdom.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/isotope/packery-mode.pkgd.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/flickity/flickity.pkgd.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/tinycolor-min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/lity/lity.min.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/fresco/js/fresco.js') }}"></script>
        <script src="{{ url('frontend/assets/vendors/fontfaceobserver.js') }}"></script>
        <script src="{{ url('frontend/assets/js/theme.min.js') }}?v={{ config('app.assets_version') }}"></script>
        <script src="{{ url('frontend/assets/js/liquid-ajax-contact-form.min.js') }}?v={{ config('app.assets_version') }}"></script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKS8WZCT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZZ6TZBN0R"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-NZZ6TZBN0R'); </script>
        @yield('script')
        <script>
            $(document).ready(function () {
                $('.ld_sf_submit').on('click', function(e) {
                    e.preventDefault();

                    let email = $(this).closest('form').find('input[name="email"]').val().trim();
                    if (email === '') {
                        return;
                    }

                    let $icon = $(this).find('.fa-paper-plane');
                    $icon.removeClass('fa-paper-plane').addClass('fa-check');

                    setTimeout(function() {
                        $icon.removeClass('fa-check').addClass('fa-paper-plane');
                    }, 5000);
                });

                 $(".accordion-button.custom-cookie-btn").click(function() {
                    $(this).toggleClass("active");
                });

                // check if accepted already
                if (localStorage.getItem('qclegal-cookie-permission') === '1') {
                    $('.cookie-popup-container').hide();
                    $('html').removeClass('cookie-blocked');
                } else {
                    $('.cookie-popup-container').fadeIn(200);
                    $('html').addClass('cookie-blocked');
                }

                // accept cookie
                $('.accept-cookie').click(function () {
                    $('.cookie-popup').slideUp(300);
                    $('.cookie-popup-container').fadeOut(300);
                    $('html').removeClass('cookie-blocked');
                    localStorage.setItem('qclegal-cookie-permission', '1');
                });

                // decline cookie
                $('.decline-cookie').click(function () {
                    $('.cookie-popup').slideUp(300);
                    $('.cookie-popup-container').fadeOut(300);
                    $('html').removeClass('cookie-blocked');
                    localStorage.setItem('qclegal-cookie-permission', '1');
                });
            });

            var checkbox = document.getElementById("customSwitch3");
            if (checkbox) {
                checkbox.checked = true;
                checkbox.dispatchEvent(new Event('change'));
                checkbox.disabled = true;
            }
        </script>
    </body>
</html>
