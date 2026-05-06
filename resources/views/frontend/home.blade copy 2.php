@extends('frontend/layouts/master')
@section('title')
    <title>QC Legal | Legal Recruitment Agency | Trainee Solicitor Jobs in UK</title>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
@endsection

@section('content')
    <section class="lqd-section qc-x-section banner overflow-hidden" id="landing" data-tooltip="Home" data-section-luminosity="dark" >
        <div class="swiper qc-landing-slider qc-landing-bullets">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-full">
                    <div class="min-h-100vh flex items-center bg-cover bg-center">
                        <div class="landing-video-container qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <video id="dynamicVideo" class="rs-html5-video qc-w-100 qc-h-100 object-cover" muted autoplay playsinline loop poster="https://www.ssfglobal.co.uk/frontend/assets/images/video-thumbnail.jpg">
                                <source id="videoSource" src="{{ url('frontend/assets/videos/landing-v3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="background-video-wrap qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <div class="background-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="row items-center">
                                <div class="col col-12 col-xl-12 relative flex flex-col justify-left items-left text-left" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                                    <h1 class="ld-fh-element lqd-highlight-custom-underline lqd-highlight-grow-left text-decoration-default lqd-split-chars relative mb-0 text-84 text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}' data-split-text="true" data-split-options='{"type":"chars, words"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-chars > .split-inner","duration":1800,"delay":"50","ease":"power4.out","direction":"forward","initValues":{"transformOriginX":100,"transformOriginY":100,"transformOriginZ":"100px","opacity":0},"animations":{"transformOriginZ":"-100px","opacity":1}}'>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">Legal Recruitment</span>
                                            <span class="lqd-highlight-inner h-auto left-0 bottom-0 qc-text-secondary">
                                                <svg class="w-full relative block" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none" fill="currentColor">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                        Re-Engineered
                                    </h1>
                                    <h3 class="ld-fh-element relative mb-1/25em text-24 leading-1/6em text-white">Rooted in 40+ Years of Legal Expertise. Run by lawyers. Backed by insight. Driven by results.</h3>
                                    <div class="qc-search-widget-container">
                                        <form action="{{ route('jobs') }}" method="GET" class="no-custom-select jshndle-job-search-form">
                                            <div class="qc-search-widget">
                                                <div class="qc-widget-field">
                                                    <div class="relative w-full qc-floating-label">
                                                        <input type="text" name="jobtitle" id="jobtitle" placeholder="" class="border-black-20 text-black text-13 qc-bg-transparent">
                                                        <label for="jobtitle" class="">Enter Job Title </label>
                                                    </div>
                                                </div>
                                                @foreach ($jobFilters as $filter)
                                                    <div class="qc-widget-field">
                                                        <div class="relative w-full qc-floating-label active">
                                                            <i class="fa-solid fa-chevron-down select-arrow"></i>
                                                            @if ($filter->id == 2)
                                                                <select name="joblocation" id="joblocation" class="border-black-20 text-black text-13 qc-bg-transparent show">
                                                                    <option value="Select Location" selected disabled>Select Location</option>
                                                                    @foreach ($filter->job_filter_options as $option)
                                                                        <option value="{{ $option->value }}">{{ $option->value }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @elseif ($filter->id == 3)
                                                                <select name="jobcategory" id="jobcategory" class="border-black-20 text-black text-13 qc-bg-transparent show">
                                                                    <option value="Select Category" selected disabled>Select Category</option>
                                                                    @foreach ($filter->job_filter_options as $option)
                                                                        <option value="{{ $option->value }}">{{ $option->value }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
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
    {{-- <section class="lqd-section portfolio pt-150 pb-100" id="jobsearch" data-tooltip="Job Search" data-section-luminosity="light">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-12 col-lg-12 px-20 mb-40 text-center">
                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                        Make the
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">first step</span>
                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                        to a new career
                    </h2>
                    <p class="ld-fh-element relative mb-0/5em px-10percent md:px-0">Solicitor or Lawyer vacancies -  which ever name you start with, your specialist job in Property Litigation, Commercial or Corporate law is waiting for you. Let us connect you. Give us a call for an informal chat on <a href="tel:{{ setting('site.primary-phone') }}" class="qc-text-primary qc-fw-600">{{ setting('site.primary-phone') }}</a> or Email us on <a href="mailto:{{ setting('site.primary-email') }}" class="qc-text-primary qc-fw-600">{{ setting('site.primary-email') }}</a></p>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class="lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="https://i.pinimg.com/736x/fb/40/a6/fb40a6074c9953e8e67fa5a8fb7d653f.jpg" alt="Web Development">
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg, rgba(246, 72, 42, 0) 25%, rgb(11 34 62) 100%)"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="fa-regular fa-map-location icon-lqd-cogs"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Solicitor Jobs in</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">Manchester</h2>
                                    <div class="lqd-fb-btn mt-1em">
                                        <a href="{{ route('contact') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit bg-white rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-black">
                                            <span class="btn-txt" data-text="Get started" data-transition-delay="true" data-delay-options='{"elements": ".lqd-chars", "delayType": "animation", "startDelay": 0, "delayBetween": 32.5, "reverse": true}' data-split-text="true" data-split-options='{"type": "chars, words"}'>Search Jobs</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class="lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="https://i.pinimg.com/736x/71/68/02/716802c2b3c2dc67412dc3a48481ae6a.jpg" alt="Search Engine Optimization" />
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg, rgba(246, 72, 42, 0) 25%, rgb(11 34 62) 100%)"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="fa-regular fa-map-location icon-lqd-cogs"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Solicitor Jobs In</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">London</h2>
                                    <div class="lqd-fb-btn mt-1em">
                                        <a href="{{ route('contact') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit bg-white rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-black">
                                            <span class="btn-txt" data-text="Get started" data-transition-delay="true" data-delay-options='{"elements": ".lqd-chars", "delayType": "animation", "startDelay": 0, "delayBetween": 32.5, "reverse": true}' data-split-text="true" data-split-options='{"type": "chars, words"}'>Search Jobs</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class="lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="https://i.pinimg.com/736x/cd/e9/f4/cde9f448d968d62de5fbed722527fafb.jpg" alt="eCommerce Consulting" />
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg, rgba(246, 72, 42, 0) 25%, rgb(11 34 62) 100%)"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="fa-regular fa-map-location icon-lqd-cogs"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Solicitor Vacancies In</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">Liverpool</h2>
                                    <div class="lqd-fb-btn mt-1em">
                                        <a href="{{ route('contact') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit bg-white rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-black">
                                            <span class="btn-txt" data-text="Get started" data-transition-delay="true" data-delay-options='{"elements": ".lqd-chars", "delayType": "animation", "startDelay": 0, "delayBetween": 32.5, "reverse": true}' data-split-text="true" data-split-options='{"type": "chars, words"}'>Search Jobs</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class="lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="https://i.pinimg.com/736x/53/af/64/53af64f594650655d23b844c3b613c13.jpg" alt="Business Consultation" />
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg, rgba(246, 72, 42, 0) 25%, rgb(11 34 62) 100%)"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="fa-regular fa-map-location icon-lqd-cogs"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Lawyer Jobs In the</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">United Kingdom</h2>
                                    <div class="lqd-fb-btn mt-1em">
                                        <a href="{{ route('contact') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit bg-white rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-black">
                                            <span class="btn-txt" data-text="Get started" data-transition-delay="true" data-delay-options='{"elements": ".lqd-chars", "delayType": "animation", "startDelay": 0, "delayBetween": 32.5, "reverse": true}' data-split-text="true" data-split-options='{"type": "chars, words"}'>Search Jobs</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="lqd-section qc-x-section about res-reset-height flex items-center justify-center bg-white bg-norepeat pt-70" id="about" data-tooltip="About Us" data-section-luminosity="light" style="background-image: url({{ url('frontend/assets/images/bg/bg-dots.png') }})">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-lg-4 sm:hidden qc-otl-hidden">
                    <div class="lqd-imggrp-container relative transition-all mb-2em">
                        <div class="lqd-imggrp-inner flex flex-wrap">
                            <div class="lqd-imggrp-single absolute transition-all top-20 left-0 module-img-1 qc-aos-zoom-in qc-aos-animate" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container relative inline-flex items-center justify-center transition-all shadow-md">
                                    <figure>
                                        <img width="225" height="239" src="{{ url('frontend/assets/images/others/about-1.webp') }}" alt="about" data-aspect>
                                    </figure>
                                </div>
                            </div>
                            <div class="lqd-imggrp-single absolute transition-all -top-20 -right-40percent module-img-2 qc-aos-zoom-in qc-aos-animate" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container relative inline-flex items-center justify-center transition-all shadow-md">
                                    <figure>
                                        <img width="253" height="343" src="{{ url('frontend/assets/images/others/about-2.webp') }}" alt="about" data-aspect>
                                    </figure>
                                </div>
                            </div>
                            <div class="lqd-imggrp-single relative transition-all left-100 mt-170 md:mt-0 module-img-3 qc-aos-zoom-in qc-aos-animate" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container relative inline-flex items-center justify-center transition-all shadow-md">
                                    <figure>
                                        <img width="264" height="342" src="{{ url('frontend/assets/images/others/about-3.webp') }}" alt="about" data-aspect>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 offset-lg-2 flex flex-col items-start">
                    {{-- <h6 class="ld-fh-element relative mb-1/5em py-5 px-10 qc-bg-primary rounded-100 text-10 uppercase font-bold text-white">Our Insights</h6> --}}
                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                        Our <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">Insights</span>
                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                    </h2>
                    <p class="ld-fh-element relative mb-1/25em text-18 leading-1/6em text-black">With a proven track record and deep insight into the legal sector, QC Legal has spent decades connecting exceptional talent with leading law firms across the UK. Our commitment to quality and lasting partnerships is reflected in the results we've achieved.</p>

                    <div class="row">
                        <div class="col col-12 col-md-12 p-0">
                            <div class="flex flex-row w-full h-full align-contents-center justify-center" style="flex-wrap: wrap;">
                                <div class="counter-box text-title m-0 border-bottom border-black-10">
                                    <div class="lqd-counter relative center lqd-counter-default">
                                        <div class="text-48 font-bold mb-15 lqd-counter-element relative counter-animated" data-enable-counter="true" data-counter-options='{"targetNumber": "5000+"}'>
                                            <span class="block">
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">5</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="5">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -100%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">0</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="0">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -900%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">0</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="0">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -900%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">0</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="0">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -900%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                +
                                            </span>
                                        </div>
                                        <span class="lqd-counter-text text-text">Excellent Candidates</span>
                                    </div>
                                </div>
                                <div class="counter-box text-title m-0">
                                    <div class="lqd-counter relative center lqd-counter-default">
                                        <div class="text-48 font-bold mb-15 lqd-counter-element relative counter-animated" data-enable-counter="true" data-counter-options='{"targetNumber": "40+"}'>
                                            <span class="block">
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">4</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="4">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -900%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">0</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="0">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -800%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                +
                                            </span>
                                        </div>
                                        <span class="lqd-counter-text text-text">Years Experience</span>
                                    </div>
                                </div>
                                <div class="counter-box text-title m-0">
                                    <div class="lqd-counter relative center lqd-counter-default">
                                        <div class="text-48 font-bold mb-15 lqd-counter-element relative counter-animated" data-enable-counter="true" data-counter-options='{"targetNumber": "200+"}'>
                                            <span class="block">
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">2</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="9">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -900%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">0</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="8">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -800%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">0</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="8">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -800%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                +
                                            </span>
                                        </div>
                                        <span class="lqd-counter-text text-text">Partnered Law Firms</span>
                                    </div>
                                </div>
                                <div class="counter-box text-title m-0">
                                    <div class="lqd-counter relative center lqd-counter-default">
                                        <div class="text-48 font-bold mb-15 lqd-counter-element relative counter-animated" data-enable-counter="true" data-counter-options='{"targetNumber": "98%"}'>
                                            <span class="block">
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">9</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="9">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -900%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="lqd-counter-animator d-inline-flex pos-rel inline-flex relative overflow-hidden">
                                                    <span class="lqd-animator-value d-inline-block inline-block invisible">8</span>
                                                    <div class="lqd-animator-numbers lqd-overlay overflow-hidden" data-value="8">
                                                        <ul class="reset-ul w-100 h-100 pos-rel w-full h-full relative" style="transform: translate(0px, -800%);">
                                                            <li class="m-0">0</li>
                                                            <li class="m-0">1</li>
                                                            <li class="m-0">2</li>
                                                            <li class="m-0">3</li>
                                                            <li class="m-0">4</li>
                                                            <li class="m-0">5</li>
                                                            <li class="m-0">6</li>
                                                            <li class="m-0">7</li>
                                                            <li class="m-0">8</li>
                                                            <li class="m-0">9</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                %
                                            </span>
                                        </div>
                                        <span class="lqd-counter-text text-text">Positive Feedback</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <a href="{{ route('about') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-secondary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                        <span class="btn-txt">Learn More About Us</span>
                        <span class="btn-icon">
                            <i class="fa-solid fa-address-card icon-md-arrow-forward"></i>
                        </span>
                        <span class="btn-icon ms-0">
                            <i class="fa-solid fa-address-card icon-md-arrow-forward"></i>
                        </span>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section statistic res-reset-height flex items-center justify-center py-70 px-10vw lg:px-0 md:items-start global-companies" id="statistic" data-tooltip="Our Stats" data-section-luminosity="light" style="background-image: url({{ url('frontend/assets/images/bg/bg-dots.png') }})">
        <div class="container">
            <div class="row items-center justify-center">
                <div class="col col-6 col-lg-6 col-xl-6 lg:order-first" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":30,"ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                    <div class="w-full flex flex-col items-center lg:items-center">
                        <div class="mb-0/65em ld-fancy-heading relative">
                            <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                Our
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">Insights</span>
                                    <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                        <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                            <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                        </svg>
                                    </span>
                                </mark>
                            </h2>
                            <p class="ld-fh-element relative text-20 leading-1/6em">With a proven track record and deep insight into the legal sector, QC Legal has spent decades connecting exceptional talent with leading law firms across the UK. Our commitment to quality and lasting partnerships is reflected in the results we've achieved:</p>
                        </div>
                        {{-- <div class="stats-image-container">
                            <div class="img-01 img-common">
                                <img src="https://images.squarespace-cdn.com/content/v1/5cf6692ee2ed3e0001bd49e3/1572996202894-0XFSE7BFK8L6KHC3LHSL/web-sq-A1-MCR-comp-layers-4.jpg" alt="Statistic 01" class="img-fluid">
                            </div>
                            <div class="img-02 img-common">
                                <img src="https://images.squarespace-cdn.com/content/v1/5cf6692ee2ed3e0001bd49e3/1572996202894-0XFSE7BFK8L6KHC3LHSL/web-sq-A1-MCR-comp-layers-4.jpg" alt="Statistic 01" class="img-fluid">
                            </div>
                        </div> --}}
                    </div>
                </div>
                 <div class="col col-6 col-lg-6 col-xl-6">
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
                                            <span class="lqd-highlight-txt"><span class="stat-effect">5000</span>+</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="content">
                                    <h4 class="text-20 qc-text-primary">Excellent Candidates</h4>
                                    <p class="ld-fh-element relative text-17 leading-1/6em">Placed with Firms</p>
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
                                            <span class="lqd-highlight-txt"><span class="stat-effect">40</span>+</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="content">
                                    <h4 class="text-20 qc-text-primary">Years Experience</h4>
                                    <p class="ld-fh-element relative text-17 leading-1/6em">In Legal Recruitment</p>
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
                                            <span class="lqd-highlight-txt"><span class="stat-effect">200</span>+</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h2>
                                </div>
                                <div class="content">
                                    <h4 class="text-20 qc-text-primary">Partnered Law Firms</h4>
                                    <p class="ld-fh-element relative text-17 leading-1/6em">Arround the UK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section qc-x-section res-reset-height ceonote flex items-center justify-center py-50 bg-norepeat bg-cover bg-center bg-white" id="ceonote" data-tooltip="CEO Note" data-section-luminosity="light" style="background-image: url({{ url('frontend/assets/images/bg/bg-dots.png') }})">
        {{-- <div class="background-overlay transition-all bg-green-100 opacity-100" style="background-image: linear-gradient(90deg, rgb(13 39 63) 30%, rgba(242, 41, 91, 0) 125%)"></div> --}}
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-md-12 col-lg-5 flex flex-col items-start py-30">
                    <h3 class="ld-fh-element relative mb-0/5em text-40 leading-1/1em text-black" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                        A note from the
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">CEO</span>
                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                    </h3>
                    <div class="ld-fh-element relative mb-1/25em text-16 leading-1/8em text-black qc-quote-style">
                        <p class="my-0 text-black">
                            “With over 20 years in the industry, we've seen legal recruitment evolve — but our purpose has remained the same: to connect world-class legal talent with visionary law firms and businesses.
                            <br>
                            At QC Legal, we've re-engineered the recruitment process. We don't just match CVs to vacancies we build long-term partnerships based on insight, integrity and global reach. Whether you're a Managing Partner seeking strategic hires or a legal professional ready to take the next step, our promise is the same  discretion, expertise and results. We're proud to be trusted by global brands, Magic Circle firms, and high-growth businesses across the UK, Europe, the Middle East and beyond."
                        </p>
                        <img src="{{ url('frontend/assets/images/others/quote.png') }}" alt="A note from the CEO" class="img-fluid quote-image">
                        <img src="{{ url('frontend/assets/images/others/ceo-ben-haider.png') }}" alt="A note from the CEO" class="img-fluid quote-image ceo">
                    </div>
                    <a href="#" class="btn btn-naked btn-hover-reveal btn-has-label font-family-inherit text-15 text-black">
                        <span class="btn-txt" data-text="─ Ben Haider, CEO">─ Ben Haider, CEO</span>
                        <span class="btn-icon">
                            <i class="lqd-icn-ess icon-md-arrow-round-forward"></i>
                        </span>
                    </a>
                </div>
                <div class="col col-12 col-md-6 offset-lg-1 md:hidden">
                    <div class="lqd-imggrp-single relative" data-shadow-style="3" data-roundness="2" data-inview="true" data-animate-shadow="true" data-hover3d="true">
                        <div class="lqd-imggrp-img-container reverse inline-flex items-center justify-center desktop-ceo-img-container" data-stacking-factor="1">
                            <figure>
                                <img class="rounded-2 uni-img" width="998" height="696" src="https://images.ctfassets.net/5wq17jjenal9/5HONwb405JiMudcFrHzOUr/01ab7f73996c82089d42fc9ee3a49aef/St_James_exterior.jpg" alt="strategy" style="height: 500px; object-fit: cover;" data-aspect>
                                {{-- <img src="{{ url('frontend/assets/images/others/ceo-ben-haider.png') }}" alt="A note from the CEO" class="img-fluid desktop-ceo-image"> --}}
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lqd-section qc-x-section homepartners res-reset-height flex items-center justify-center py-70 px-10vw lg:px-0 md:items-start global-companies" id="partners" data-tooltip="Our Partners" data-section-luminosity="light" style="background-image: url({{ url('frontend/assets/images/bg/bg-dots.png') }})">
        <div class="container">
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
                            <div class="qc-arrows-container mt-30">
                                <div class="qc-arrows qc-partner-slide-left">
                                    <div class="qc-left ">
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="qc-right qc-partner-slide-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($reviews) > 0)
        <section class="lqd-section min-h-100vh qc-x-section testimonial res-reset-height flex items-center justify-center py-70 bg-center bg-cover relative transition-all" id="testimonial" style="background-image: url('{{ url('frontend/assets/images/others/testimonial-bg.webp') }}');"  data-tooltip="Testimonials" data-section-luminosity="dark">
            <div class="background-overlay transition-all bg-green-100 opacity-100" style="background-image: linear-gradient(90deg, rgb(13 39 63) 30%, rgba(242, 41, 91, 0) 125%)"></div>
            <div class="container px-20">
                <div class="row">
                    <div class="col col-12 col-lg-12 qc-at-text-center">
                        <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
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
                    <div class="col col-12 col-xl-8 relative sm:p-0" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "duration" : 1800 , "delay" : 180 , "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}' >
                        <div class="carousel-container carousel-white pr-45 relative carousel-nav-left carousel-nav-size-default carousel-nav-left carousel-dots-mobile-outside carousel-dots-mobile-left sm:pr-0 animation-element">
                            <div class="carousel-items relative mb-100" data-lqd-flickity='{"prevNextButtons": true, "groupCells": false, "navArrow": "6", "addSlideNumbersToArrows": true, "cellAlign": "left", "buttonsAppendTo": "self", "pageDots": false, "autoPlay": true}' >
                                @foreach ($reviews as $review)
                                    <div class="carousel-item flex flex-col justify-center">
                                        <div class="carousel-item-inner relative w-full">
                                            <div class="carousel-item-content relative w-full qc-at-text-center">
                                                <div class="review-stars flex items-center gap-10 mb-10">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <div class="icon text-24 qc-text-gold">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    @endfor
                                                </div>
                                                <span class="text-white text-24 leading-40">
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
    @include('frontend.includes.sections.get-in-touch')

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
                    mousewheel: true,
                    navigation: {
                        nextEl: '.qc-partner-slide-right',
                        prevEl: '.qc-partner-slide-left',
                    },
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: true,
                    },
                });

                // qch: aos animations
                function qcCheckInView(){
                    $('.qc-aos-zoom-in').each(function(){
                        var $elem = $(this);
                        var elemTop = $elem.offset().top;
                        var elemBottom = elemTop + $elem.outerHeight();
                        var winTop = $(window).scrollTop();
                        var winBottom = winTop + $(window).height();

                        // Trigger when 20% of element visible
                        if (elemTop < winBottom - ($elem.outerHeight() * 0.2)) {
                            if (!$elem.hasClass('qc-aos-animate')) {
                                $elem.addClass('qc-aos-animate');
                            }
                        }
                    });
                }

                qcCheckInView();

                $(window).on('scroll resize load', qcCheckInView);

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

                //qch: animation of about section images

                // v1
                // const imgs = document.querySelectorAll('.jshndle-img-style');
                // let current = 0;

                // function updateClasses() {
                //     imgs.forEach(img => {
                //         img.classList.remove('img-style-active', 'img-style-upcoming', 'true');
                //     });

                //     imgs[current].classList.add('img-style-active', 'true');

                //     let next = (current + 1) % imgs.length;
                //     imgs[next].classList.add('img-style-upcoming', 'true');

                //     current = next;
                // }

                // updateClasses();
                // setInterval(updateClasses, 5000);


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
