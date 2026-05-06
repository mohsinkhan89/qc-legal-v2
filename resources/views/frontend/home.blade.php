@extends('frontend/layouts/master')
@section('title')
    <title>{{ setting('site.title') }}</title>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="msvalidate.01" content="5ABD460451890B81AC503E765A0E8D5B">

    <style>
        .testimonial {
            background-image: url('{{ url('frontend/assets/images/bg/testimonial-v2.webp') }}');
            background-attachment: fixed;
        }

        @media only screen and (max-width: 510px) {
            .testimonial {
                background-image: url('{{ url('frontend/assets/images/bg/resp-testimonial-bg.webp') }}');
            }
        }
    </style>
@endsection

@section('metas')
    <meta name="google-site-verification" content="07vpgt8JqAaz7QdW0O5p8HuGAPnEmCtYdmYpCMfG9Y0" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PKS8WZCT');</script>
    <!-- End Google Tag Manager -->
    <meta property="og:title" content="{{ setting('site.title') }}">
    <meta name="description" content="{{ setting('site.description') }}">
    <meta property="og:description" content="{{ setting('site.description') }}">
    <meta name="twitter:title" content="{{ setting('site.title') }}">
    <meta name="twitter:description" content="{{ setting('site.description') }}">
@endsection

@section('content')
    <section class="lqd-section qc-x-section banner overflow-hidden" id="landing" data-tooltip="Home" data-section-luminosity="dark" >
        <div class="swiper qc-landing-slider qc-landing-bullets">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-full">
                    <div class="min-h-100vh flex items-center bg-cover bg-center">
                        <div class="landing-video-container qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <video id="dynamicVideo" class="rs-html5-video qc-w-100 qc-h-100 object-cover" muted autoplay playsinline loop>
                                <source id="videoSource" src="{{ url('frontend/assets/videos/landing-v4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="background-video-wrap qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <div class="background-overlay"></div>
                        </div>
                        <div class="container md-set" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "-214px", "scaleX" : 1, "scaleY" : 1}' data-parallax-to='{"y": "215px", "scaleX" : 1.1, "scaleY" : 1.1}'>
                            <div class="row items-center landing-margin">
                                <div class="col col-12 col-xl-12 relative flex flex-col justify-left items-left text-left" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                                    <h1 class="ld-fh-element lqd-highlight-custom-underline lqd-highlight-grow-left text-decoration-default lqd-split-chars relative mb-0 text-84 text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}' data-split-text="true" data-split-options='{"type":"chars, words"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-chars > .split-inner","duration":1800,"delay":"50","ease":"power4.out","direction":"forward","initValues":{"transformOriginX":100,"transformOriginY":100,"transformOriginZ":"100px","opacity":0},"animations":{"transformOriginZ":"-100px","opacity":1}}'>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">Legal Talent  </span>
                                            <span class="lqd-highlight-inner h-auto left-0 bottom-0 qc-text-secondary">
                                                <svg class="w-full relative block" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none" fill="currentColor">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                        <br>
                                        Expertly Placed
                                    </h1>
                                    <h3 class="ld-fh-element relative mb-1/25em text-24 leading-1/6em text-white">
                                        For thirty years, QC Legal has been the legal recruitment partner of choice for law firms, in-house teams and ambitious lawyers across the UK, Middle East and Asia.
                                   </h3>
                                    <div class="qc-search-widget-container">
                                        <form action="{{ route('jobs') }}" method="GET" class="no-custom-select jshndle-job-search-form">
                                            <div class="qc-search-widget">
                                                {{-- <div class="qc-widget-field">
                                                    <div class="relative w-full qc-floating-label">
                                                        <input type="text" name="jobtitle" id="jobtitle" placeholder="" class="border-black-20 text-black text-13 qc-bg-transparent">
                                                        <label for="jobtitle" class="">Enter Job Title </label>
                                                    </div>
                                                </div> --}}
                                                @foreach ($jobFilters as $filter)
                                                    <div class="qc-widget-field">
                                                        <div class="relative w-full qc-floating-label active">
                                                            <i class="fa-solid fa-chevron-down select-arrow"></i>
                                                            <select name="filter_{{ $filter->id }}" id="filter_{{ $filter->id }}"
                                                                class="border-black-20 text-black text-13 qc-bg-transparent show">
                                                                @php
                                                                    $options = $filter->job_filter_options
                                                                        ->filter(function ($item) {
                                                                            return $item->jobs_count > 0;
                                                                        })
                                                                        ->sortBy(function ($item) {
                                                                            return $item->sort_order_status == 1 ? 0 : 1;
                                                                        })
                                                                        ->sortBy(function ($item) {
                                                                            return $item->sort_order_status == 1
                                                                                ? $item->sort_order
                                                                                : $item->value;
                                                                        }, SORT_NATURAL | SORT_FLAG_CASE);
                                                                @endphp
                                                                <option value="" selected>{{ $filter->title ?? 'Select Option' }}</option>
                                                                @foreach ($options as $option)
                                                                    <option value="{{ $option->value }}" data-slug="{{ $option->slug }}">{{ $option->value }} ({{ $option->jobs_count }})</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="qc-widget-field submit">
                                                    <button type="submit" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-primary rounded-10 text-13 font-semibold leading-1/5em tracking-0/1em text-white w-full cleanbox">
                                                        <span class="btn-txt">Explore Jobs</span>
                                                        <span class="btn-icon">
                                                            <i class="fa-solid fa-search icon-md-arrow-forward"></i>
                                                        </span>
                                                        <span class="btn-icon ms-0">
                                                            <i class="fa-solid fa-search icon-md-arrow-forward"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="ld-empty-space w-full h-110 module-space-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="lqd-section qc-x-section statistic res-reset-height flex items-center justify-center py-70 px-10vw lg:px-0 md:items-start global-companies" id="statistic" data-tooltip="Our Stats" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row items-center justify-center">
                 <div class="col col-12 col-lg-12 col-xl-12">
                    <div class="qc-stats-container mt-30" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":30,"ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                        <div class="qc-stats">
                            <div class="qc-stats-item">
                                <div class="stat-icon">
                                    <i class="fa-solid fa-user-graduate"></i>
                                </div>
                                <div class="star-icon">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="stats">
                                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt"><span class="stat-effect">30</span>+</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                            <h4>
                                               Years of Excellence
                                           </h2>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="content">
                                    <h4 class="text-20 qc-text-primary">Serving legal professionals since the mid-1990s</h4>
                                    {{-- <p class="ld-fh-element relative text-17 leading-1/6em">Placed with Firms</p> --}}
                                </div>
                            </div>
                            <div class="qc-stats-item centered">
                                <div class="stat-icon">
                                    <i class="fa-solid fa-trophy"></i>
                                </div>
                                <div class="star-icon">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="stats">
                                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt"><span class="stat-effect">4</span></span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                            <h4>
                                                Global Locations
                                            </h4s>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="content">
                                    <h4 class="text-20 qc-text-primary">London, UAE, Hong Kong & Singapore</h4>
                                    {{-- <p class="ld-fh-element relative text-17 leading-1/6em">In Legal Recruitment</p> --}}
                                </div>
                            </div>
                            <div class="qc-stats-item">
                                <div class="stat-icon">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                                <div class="star-icon">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="stats">
                                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt"><span class="stat-effect">500</span>+</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                            <h4>
                                                Placements Made
                                            </h4>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="content">
                                    <h4 class="text-20 qc-text-primary">Across private practice and in-house sectors</h4>
                                    {{-- <p class="ld-fh-element relative text-17 leading-1/6em">Arround the UK</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section qc-home-intro flex items-center justify-center py-90 px-10vw lg:px-0" id="who-we-are" data-tooltip="Who We Are" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row items-center">
                <div class="col col-12 col-lg-12">
                    <div class="sub-title-column">
                        <span class="qc-section-kicker">Who We Are</span>
                        <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em">
                            Legal Recruitment,
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">Reimagined.</span>
                                <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light"></span>
                            </mark>
                        </h2>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="qc-editorial-copy">
                        <p>Most recruiters post a job. We study people. We spend years building genuine relationships with lawyers at every stage of their careers, because we believe the best matches are built on understanding, not urgency.</p>
                        <p>QC Legal is a specialist legal recruitment agency with more than 20 years of experience connecting exceptional lawyers and legal professionals with leading law firms and in-house legal teams across the UK, Europe, the Middle East, and other major international markets.</p>
                        <h4>We are specialists. We are headhunters. And we genuinely care.</h4>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="lqd-imggrp-container relative transition-all mb-2em">
                        <div class="image ourmission-img">
                            <img src="{{ url('frontend/assets/images/others/our-values-01-v1.jpeg') }}" alt="Our Mission" class="img-fluid qc-w-100">
                        </div>
                        <div class="image ourmission-img side-style second-img-top">
                            <img src="{{ url('frontend/assets/images/others/our-values-02-v3.webp') }}" alt="Our Mission" class="img-fluid qc-w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section qc-home-expertise flex items-center justify-center py-90 px-10vw lg:px-0 qc-bg-light" id="expertise" data-tooltip="Our Expertise" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-7">
                    <div class="sub-title-column">
                        <span class="qc-section-kicker">What We Do</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">Our Expertise</h2>
                        <p class="qc-section-lead">From newly qualified solicitors to General Counsel, we navigate every layer of the legal market.</p>
                    </div>
                </div>
            </div>
            <div class="qc-expertise-grid">
                <article class="qc-expertise-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <div class="card-content">
                        <span>Private Practice</span>
                        <h3>Law Firm Recruitment</h3>
                        <p>We work with the UK’s leading law firms to secure lateral partner hires, team moves and associate placements. Our depth of market knowledge and long-standing relationships with Managing Partners mean we move faster and smarter than any generalist agency.</p>
                    </div>
                </article>
                <article class="qc-expertise-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <div class="card-content">
                        <span>In-House & GC</span>
                        <h3>Building In-House Legal Teams</h3>
                        <p>We connect firms with high-calibre legal talent, from NQs to partners and entire legal teams, supporting strategic hires and long-term growth. Many of our best placements were never looking for a new role until we called.</p>
                    </div>
                </article>
                <article class="qc-expertise-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div class="card-content">
                        <span>Newly Qualified</span>
                        <h3>NQ & Junior Solicitor Jobs</h3>
                        <p>Starting your career on the right note matters. We guide newly qualified solicitors through a nuanced market, matching their specialism, ambitions and personality to firms where they will truly thrive, not just survive.</p>
                    </div>
                </article>
                <article class="qc-expertise-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <div class="card-content">
                        <span>International</span>
                        <h3>Global Reach, Local Insight</h3>
                        <p>Operating across London, the North, UAE, Hong Kong and Singapore, we serve law firms and legal teams that demand cross-border talent strategies. Our international network is deep, discreet and trusted.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section qc-home-trust flex items-center justify-center py-90 px-10vw lg:px-0" id="why-qc-legal" data-tooltip="Why QC Legal" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row items-center">
                <div class="col col-12 col-lg-5">
                    <div class="sub-title-column mb-30 lg:mb-0">
                        <span class="qc-section-kicker">Why QC Legal</span>
                        <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em">Why the Legal World Trusts QC Legal</h2>
                        <p class="qc-section-lead">We redefine legal recruitment through deep market insight, uncompromising integrity, and a genuinely global perspective.</p>
                    </div>
                    <div class="qc-trust-img-container">
                        <div class="qc-trust-img-overlay"></div>
                        <img src="{{ url('frontend/assets/images/others/about-1.webp') }}" alt="Why QC Legal" class="img-fluid">
                    </div>
                </div>
                <div class="col col-12 col-lg-7">
                    <div class="qc-trust-list">
                        <div class="qc-trust-item">
                            <div class="icon-wrap"><i class="fa-solid fa-magnifying-glass"></i></div>
                            <div class="content-wrap">
                                <h3>We headhunt. We don’t just wait for applications</h3>
                                <p>The best lawyers are rarely on job boards. Our approach is proactive, confidential and targeted. We find the people you didn’t know were available</p>
                            </div>
                        </div>
                        <div class="qc-trust-item">
                            <div class="icon-wrap"><i class="fa-solid fa-scale-balanced"></i></div>
                            <div class="content-wrap">
                                <h3>We’re specialists, not generalists</h3>
                                <p>Legal recruitment is all we do. That means sharper market insight, warmer candidate relationships and faster, better-quality shortlists.</p>
                            </div>
                        </div>
                        <div class="qc-trust-item">
                            <div class="icon-wrap"><i class="fa-solid fa-handshake"></i></div>
                            <div class="content-wrap">
                                <h3>We work in long-term partnership</h3>
                                <p>Our modern legal recruitment model combines deep industry expertise with a collaborative, consultative approach.</p>
                            </div>
                        </div>
                        <div class="qc-trust-item">
                            <div class="icon-wrap"><i class="fa-solid fa-user-shield"></i></div>
                            <div class="content-wrap">
                                <h3>We are discreet and confidential</h3>
                                <p>Partner moves and leadership searches require absolute discretion. We handle sensitive mandates with the professionalism and confidentiality they demand.</p>
                            </div>
                        </div>
                        <div class="qc-trust-item">
                            <div class="icon-wrap"><i class="fa-solid fa-users"></i></div>
                            <div class="content-wrap">
                                <h3>We put culture first</h3>
                                <p>We invest time understanding the culture, leadership style and values of every firm we work with, so our candidates are never surprised.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section homepartners res-reset-height flex items-center justify-center py-70 px-10vw lg:px-0 md:items-start global-companies qc-bg-light" id="partners" data-tooltip="Our Partners" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row items-center justify-center">
                <div class="col col-12 col-xl-12 lg:order-first lg:text-center">
                    <div class="w-full flex flex-col items-center text-center lg:items-center lg:text-center">
                        <div class="mb-0/65em ld-fancy-heading relative">
                            <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                Our
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">Partners</span>
                                    <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                        <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                            <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                        </svg>
                                    </span>
                                </mark>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-12 ">
                    <div class="-mr-15 -ml-15 qc-partner-slider-container" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"self","duration":1200,"delay":"5000","ease":"power2.out","direction":"forward","initValues":{"y":30,"opacity":0},"animations":{"y":0,"opacity":1}}'>
                        <div class="swiper qc-partner-swiper qc-landing-bullets">
                            <div class="swiper-wrapper">
                                @foreach ($partners as $partner)
                                    <div class="swiper-slide">
                                        <div class="qc-partner jshndle-partner qc-transition-medium">
                                            <div class="image">
                                                <img src="{{ url('storage') }}/{{ $partner->image }}" alt="{{ $partner->title }}" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section res-reset-height ceonote flex items-center justify-center pt-50 pb-100 bg-norepeat bg-cover bg-center" id="ceonote" data-tooltip="CEO Note" data-section-luminosity="light" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element-2", "ease": "power4.out", "duration": 2000, "stagger": 0.2, "delay": 300, "initValues": {"y": "60px", "rotationZ" : 5, "opacity": 0, "transformOrigin": "50% 50% 120px"} , "animations": {"y": "0px", "rotationZ" : 0, "opacity": 1, "transformOrigin": "50% 50% 0px"}}'>
        <div class="container md-set">
            <div class="row items-center">
                <div class="col col-12 col-md-6 col-lg-5 relative flex flex-col items-start py-30 custom-note-animate animation-element-2 qc-large-w-100">
                    <h3 class="ld-fh-element relative mb-0/5em text-40 leading-1/1em text-black" data-inview="true">
                        A note from the
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">MD</span>
                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                    </h3>
                    <div class="ld-fh-element relative mb-1/25em text-16 leading-1/8em text-black qc-quote-style bg-white animation-element-2">
                        <p class="text-black italic text-16">
                            &nbsp;&nbsp;&nbsp;&nbsp; <span class="d-block d-md-none">&nbsp;&nbsp;&nbsp;&nbsp;</span> “With over four decades of combined experience we have witnessed the evolution of legal recruitment, yet our mission remains constant: to connect world-class legal talent with leading law firms and businesses worldwide.”
                        </p>
                        <p class="text-16">
                            At QC Legal we have re-engineered the recruitment process to each individual project. We galvanise long-term partnerships built on insight, integrity and global perspective. Whether you’re a Managing Partner seeking strategic hires or a legal professional ready for your next move, our commitment is the same — discretion, expertise and best outcomes delivered with excellence!
                        </p>
                        <p class="text-16">
                            We're proud to be trusted by global brands, Magic Circle firms and fast-growing businesses, with a footprint that spans the UK, Europe, the Middle East and beyond.
                        </p>
                        <img src="{{ url('frontend/assets/images/others/quote.png') }}" alt="A note from the CEO" class="img-fluid quote-image">
                        <img src="{{ url('frontend/assets/images/others/quote.png') }}" alt="A note from the CEO" class="img-fluid quote-image opposite">
                        <img src="{{ url('frontend/assets/images/others/home-note-md.jpeg') }}" alt="A note from the CEO" class="img-fluid quote-image ceo">
                    </div>
                    <a href="#" class="btn btn-naked btn-hover-reveal btn-has-label font-family-inherit text-15 text-black animation-element-2">
                        <span class="btn-txt" data-text="─ Ben Haider, Managing Director">─ Ben Haider, Managing Director</span>
                        <span class="btn-icon">
                            <i class="lqd-icn-ess icon-md-arrow-round-forward"></i>
                        </span>
                    </a>
                    <div class="qc-signature animation-element-2" data-custom-animations="true">
                        <img class="img-fluid" src="{{ url('frontend/assets/images/others/qclegal-signature-v2.gif') }}">
                    </div>
                </div>
                <div class="col col-12 col-md-6 offset-lg-1 md:hidden">
                    <div class="lqd-imggrp-single relative animation-element-2 animation-disable-below-1190" data-shadow-style="3" data-roundness="2" data-inview="true" data-animate-shadow="true">
                        <div class="year-stamp">
                            <div class="year-number">
                                <div class="year">40</div>
                                <div class="plus animate-rotateStep">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <div class="year-text">Years of <br> Experience</div>
                        </div>
                        <div class="lqd-imggrp-img-container reverse inline-flex items-center justify-center desktop-ceo-img-container" data-stacking-factor="1" >
                            <figure>
                                <img class="rounded-2 uni-img" width="998" height="696" src="{{ url('frontend/assets/images/others/home-note-md.png') }}" alt="strategy" style="height: 500px; object-fit: cover;" data-aspect>
                                {{-- <img src="{{ url('frontend/assets/images/others/ceo-ben-haider.png') }}" alt="A note from the CEO" class="img-fluid desktop-ceo-image"> --}}
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($reviews) > 0)
        <section class="lqd-section min-h-100vh qc-x-section testimonial res-reset-height flex items-center justify-center py-70 bg-center bg-cover relative transition-all" id="testimonial" data-tooltip="Testimonials" data-section-luminosity="dark">
            <div class="background-overlay transition-all bg-green-100 opacity-100" style="background-image: linear-gradient(90deg, rgb(13 39 63) 30%, rgba(242, 41, 91, 0) 125%)"></div>
            <div class="container px-20 md-set">
                <div class="row">
                    <div class="col col-12 col-lg-12 small-text-center">
                        <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em text-white " data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                            Our
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">Testimonials</span>
                                <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                    <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                        <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                    </svg>
                                </span>
                            </mark>
                        </h2>
                    </div>
                    <div class="col col-12 col-xl-8 relative sm:p-0 small-text-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "duration" : 1800 , "delay" : 180 , "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}' >
                        <div class="carousel-container carousel-white pr-45 relative carousel-nav-left carousel-nav-size-default carousel-nav-left carousel-dots-mobile-outside carousel-dots-mobile-left sm:pr-0 animation-element">
                            <div class="carousel-items relative mb-100" data-lqd-flickity='{"prevNextButtons": true, "groupCells": false, "navArrow": "6", "addSlideNumbersToArrows": true, "cellAlign": "left", "buttonsAppendTo": "self", "pageDots": false, "autoPlay": true}' >
                                @foreach ($reviews as $review)
                                    <div class="carousel-item flex flex-col justify-center qc-pl-2">
                                        <div class="carousel-item-inner relative w-full">
                                            <div class="carousel-item-content relative w-full">
                                                <div class="review-stars flex items-center gap-10 mb-10">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <div class="icon text-24 qc-text-gold">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    @endfor
                                                </div>
                                                <span class="text-white text-24 leading-40 small-text-center">
                                                    “{{ $review->review }}”
                                                </span>
                                                <h6 class="mt-1em mb-0/5em"><span class="text-white-50">{{ $review->name }}</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="absolute lqd-imggrp-single block w-150 left-0 -top-25" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "140px"}'>
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center qc-w-100">
                                <figure class="qc-w-100 relative">
                                    <img class="qc-w-100" src="https://hubhtml.liquid-themes.com/assets/images/demo/company/icon-quote.svg" alt="Testimonial of QC Legal">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="lqd-section qc-x-section qc-home-job-cta flex items-center justify-center py-90 px-10vw lg:px-0 qc-bg-light" id="find-role" data-tooltip="Find A Role" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row items-center">
                <div class="col col-12 col-lg-5">
                    <div class="qc-job-search-img-wrap pr-50 lg:pr-0 mb-50 lg:mb-0">
                        <div class="qc-img-blob-bg"></div>
                        <img src="{{ url('frontend/assets/images/others/home-career-01-v1.webp') }}" alt="Job Search" class="img-fluid qc-job-main-img">
                        <div class="qc-floating-badge">
                            <div class="icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div class="text">
                                <strong>500+</strong>
                                <span>Live Vacancies</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 offset-lg-1">
                    <div class="qc-job-search-content pl-20 lg:pl-0">
                        <span class="qc-section-kicker">Job Search</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">Find Your Next Legal Role</h2>
                        <p class="qc-section-lead mt-20 mb-30 text-18 leading-1/6em text-gray-600">Search hundreds of live vacancies across private practice and in-house, from NQ to partner level. Filter by location and specialism.</p>
                        
                        <div class="qc-feature-list mb-40">
                            <div class="qc-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Exclusive roles not on job boards</span>
                            </div>
                            <div class="qc-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Direct access to hiring partners</span>
                            </div>
                            <div class="qc-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Confidential and discreet process</span>
                            </div>
                        </div>

                        <p class="mb-40 text-16 leading-1/6em text-gray-500">Whether you’re actively looking or simply open to a conversation, we’d love to hear from you. The legal market moves quickly. So should your career.</p>
                        
                        <a href="{{ route('jobs') }}" class="qc-btn-primary group inline-flex items-center gap-15">
                            <span>Explore legal vacancies</span>
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section qc-home-employers flex items-center justify-center py-90 px-10vw lg:px-0" id="hiring-legal-talent" data-tooltip="Hiring Talent" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="qc-employers-content pr-20 lg:pr-0 mb-50 lg:mb-0">
                        <span class="qc-section-kicker">For Employers</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">Hiring Legal Talent?</h2>
                        <div class="qc-editorial-copy mt-20 mb-30">
                            <p class="text-18 leading-1/6em text-gray-600 mb-20">We partner with law firms and in-house teams to deliver discreet, targeted searches, never stacks of generic CVs.</p>
                            <p class="text-16 leading-1/6em text-gray-500">If you’re growing a team, planning a lateral hire, or exploring a market-changing merger, QC Legal is the recruitment partner your competitors wish they’d called first. Our retained and contingency solutions are tailored to your timeline, culture and strategic goals.</p>
                        </div>
                        <div class="qc-employer-list">
                            <div class="employer-list-item">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                <span>Partner and senior associate lateral moves</span>
                            </div>
                            <div class="employer-list-item">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                <span>Full team and practice group relocations</span>
                            </div>
                            <div class="employer-list-item">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                <span>In-house General Counsel and Deputy GC appointments</span>
                            </div>
                            <div class="employer-list-item">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                <span>NQ and junior solicitor volume campaigns</span>
                            </div>
                            <div class="employer-list-item">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                <span>International placements across UK, UAE, Hong Kong and Singapore</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-5 offset-lg-1">
                    <div class="qc-employer-img-wrap">
                        <div class="qc-employer-img-bg"></div>
                        <img src="{{ url('frontend/assets/images/others/about-2.webp') }}" alt="Hiring Legal Talent" class="img-fluid qc-employer-main-img">
                        <div class="qc-employer-floating-box">
                            <div class="box-icon">
                                <i class="fa-solid fa-handshake-angle"></i>
                            </div>
                            <div class="box-content">
                                <h3>Tailored Solutions</h3>
                                <p>Retained & Contingency</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section qc-home-faq flex items-center justify-center py-90 px-10vw lg:px-0 qc-bg-light" id="faqs" data-tooltip="FAQs" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-5">
                    <div class="qc-faq-header pr-30 lg:pr-0 mb-40 lg:mb-0">
                        <span class="qc-section-kicker">FAQs</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">Questions Candidates & Firms Ask</h2>
                        <div class="qc-faq-img-wrap mt-40">
                            <div class="qc-faq-img-bg"></div>
                            <img src="{{ url('frontend/assets/images/others/about-3.webp') }}" alt="FAQ QC Legal" class="img-fluid qc-faq-main-img">
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-7">
                    <div class="qc-faq-list custom-faqs">
                        <details class="qc-faq-item" name="faq" open>
                            <summary class="qc-faq-summary">
                                What does QC Legal specialize in?
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>QC Legal specializes in legal recruitment, with a focus on building legal teams. We work with candidates and law firms across the UK, helping place lawyers at all levels from trainees to senior partners.</p>
                            </div>
                        </details>
                        <details class="qc-faq-item" name="faq">
                            <summary class="qc-faq-summary">
                                What types of roles does QC Legal recruit for?
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>QC Legal recruits for a wide range of legal positions, including newly qualified solicitor jobs, partner placements at both senior equity and fixed share levels and in-house legal team roles from General Counsel downward.</p>
                            </div>
                        </details>
                        <details class="qc-faq-item" name="faq">
                            <summary class="qc-faq-summary">
                                Where does QC Legal operate?
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>QC Legal is headquartered in London and also has a presence in Manchester, as well as coverage in the UAE, Hong Kong & Singapore.</p>
                            </div>
                        </details>
                        <details class="qc-faq-item" name="faq">
                            <summary class="qc-faq-summary">
                                How long has QC Legal been in the legal recruitment industry?
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>QC Legal has been evolving its brand, processes and people for thirty years, growing into a market leader in legal recruitment through deep understanding of both candidate strengths and law firm cultures.</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @include('frontend.includes.sections.get-in-touch') --}}

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/js/glightbox.min.js" integrity="sha512-XL54SjceXZFzblziNnaFFaXggzqCuZrFS4loWPpvPJ6Kg0kc2HyL89+cPeH0GMq0sKL2SegzUmA8Lx9a0st2ow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}

        <script>
            // AOS.init();
            $(document).ready(function () {
               const qcLandingSwiper = new Swiper('.qc-landing-slider', {
                    loop: true,
                    effect: 'creative',
                    creativeEffect: {
                        prev: {
                            translate: ['-25%', 0, -1],
                        },
                        next: {
                            translate: ['100%', 0, 0],
                        },
                    },
                    slidesPerView: 1,
                    speed: 1000,
                    autoplay: {
                        delay: 18000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    navigation: {
                        nextEl: '.qc-swiper-next',
                        prevEl: '.qc-swiper-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    allowTouchMove: true,
                });

                const qcJobSwiper = new Swiper('.qc-job-swiper', {
                    direction: 'vertical',
                    slidesPerView: 1,
                    spaceBetween: 20,
                    mousewheel: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                });

                const qcPartnerSwiper = new Swiper('.qc-partner-swiper', {
                    slidesPerView: 6,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: '.qc-partner-slide-right',
                        prevEl: '.qc-partner-slide-left',
                    },
                    loop: true,
                    autoplay: {
                        delay: 1500,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 2.1,
                        },
                        510: {
                            slidesPerView: 4
                        },
                        990: {
                            slidesPerView: 5,
                        },
                        1191: {
                            slidesPerView: 6
                        }
                    }
                });

                // qch: explore job form submit
                $('.jshndle-job-search-form').on('submit', function(e) {
                    e.preventDefault();
                    let baseUrl = "{{ route('jobs') }}";
                    // let jobtitle = $('#jobtitle').val()?.trim().replace(/\s+/g, '-').toLowerCase() || '';
                    let position = $('select[id^="filter_"]').eq(0).find('option:selected').data('slug') || '';
                    let location = $('select[id^="filter_"]').eq(1).find('option:selected').data('slug') || '';

                    let finalUrl = baseUrl;
                    // finalUrl += '/' + (jobtitle || 'all');
                    finalUrl += '/' + 'all';
                    if (position) finalUrl += '/' + position;
                    if (location) finalUrl += '/' + location;

                    window.location.href = finalUrl;
                });

                // qch: stats effect
                $('.stat-effect').each(function() {
                    var $this = $(this);
                    var target = parseInt($this.text());
                    $({ countNum: 0 }).animate({ countNum: target }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });

                // qch: floating label script
                $(document).on('input focus blur', '.qc-floating-label input, .qc-floating-label textarea', function () {
                    let $wrapper = $(this).closest('.qc-floating-label');
                    if ($(this).val().trim() !== '' || $(this).is(':focus')) {
                        $wrapper.addClass('active');
                    } else {
                        $wrapper.removeClass('active');
                    }
                });

                // qch: job form search
                $('.jshndle-job-search-form').on('submit', function() {
                    $(this).find('input[name], select[name]').each(function() {
                        if (!$(this).val() ||
                            $(this).val().toLowerCase() === 'select location' ||
                            $(this).val().toLowerCase() === 'select category') {
                            $(this).removeAttr('name');
                        }
                    });
                });

                // qch: putting the glightbox on ceo video
                const lightbox = GLightbox({
                    selector: '.glightbox-ceo-video',
                    autoplayVideos: true
                });

                // qch: setting the navigation on the desktop
                if (window.matchMedia("(min-width: 1190px)").matches) {
                    setInterval(() => {
                        var path = window.location.pathname + window.location.hash;
                        var section = $('#landing');
                        if (path === '/' || path === '/#landing') {
                            section.removeClass('pp-section');
                        } else {
                            section.addClass('pp-section');
                        }
                    }, 100);
                }

                // qch: slider of job section
                const $container = $('.qc-jobs-parent-container.home .qc-job-cards-container');
                const $cards = $container.find('.qc-job-card');
                const $topBtn = $('.qc-scroll-click-top');
                const $bottomBtn = $('.qc-scroll-click-bottom');

                let currentIndex = 0;

                function updateButtons() {
                    if (currentIndex <= 0) {
                        $topBtn.addClass('disabled');
                    } else {
                        $topBtn.removeClass('disabled');
                    }

                    if (currentIndex >= $cards.length - 2) {
                        $bottomBtn.addClass('disabled');
                    } else {
                        $bottomBtn.removeClass('disabled');
                    }
                }

                $topBtn.on('click', function() {
                    if (currentIndex > 0) {
                        currentIndex = Math.max(0, currentIndex - 1);
                        $cards.eq(currentIndex)[0].scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        updateButtons();
                    }
                });

                $bottomBtn.on('click', function() {
                    if (currentIndex < $cards.length - 1) {
                        currentIndex = Math.min($cards.length - 1, currentIndex + 1);
                        $cards.eq(currentIndex)[0].scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        updateButtons();
                    }
                });

                updateButtons();

                // v2
                const $imgs = $('.jshndle-img-style');
                const $pausePlayBtn = $('.jshndle-qcs-pause-play i');
                const $progressBar = $('.jshndle-qcs-progress');

                let current = 0;
                let interval;
                let paused = false;
                let progress = 0;
                let progressInterval;

                function updateClasses() {
                    $imgs.removeClass('img-style-active img-style-upcoming true');
                    $imgs.eq(current).addClass('img-style-active true');
                    let next = (current + 1) % $imgs.length;
                    $imgs.eq(next).addClass('img-style-upcoming true');
                    current = next;
                    resetProgress();
                }

                function resetProgress(resume = false) {
                    clearInterval(progressInterval);
                    if (!resume) {
                        progress = 0;
                        $progressBar.css('width', '0%');
                    }
                    progressInterval = setInterval(() => {
                        if (paused) return;
                        progress += 100 / (5000 / 50);
                        if (progress >= 100) {
                            progress = 100;
                            clearInterval(progressInterval);
                        }
                        $progressBar.css('width', progress + '%');
                    }, 50);
                }

                function startSlider() {
                    resetProgress();
                    interval = setInterval(updateClasses, 5000);
                }

                function stopSlider() {
                    clearInterval(interval);
                    clearInterval(progressInterval);
                }

                $('.jshndle-qcs-pause-play').on('click', function () {
                    paused = !paused;
                    if (paused) {
                        $pausePlayBtn.removeClass('fa-pause').addClass('fa-play');
                        stopSlider();
                    } else {
                        $pausePlayBtn.removeClass('fa-play').addClass('fa-pause');
                        resetProgress(true);
                        interval = setInterval(updateClasses, 5000 - (progress / 100) * 5000);
                    }
                });

                startSlider();
            });
        </script>
    @endsection
@endsection
