@extends('frontend/layouts/master')
@section('title')
    <title>QC Legal | Legal Recruitment Agency | Trainee Solicitor Jobs in UK</title>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="lqd-section qc-x-section banner overflow-hidden" id="landing" data-tooltip="Home" data-section-luminosity="dark" >
        <div class="swiper qc-landing-slider qc-landing-bullets">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-full">
                    <div class="min-h-100vh flex items-center bg-cover bg-center">
                        <div class="landing-video-container qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <video id="dynamicVideo" class="rs-html5-video qc-w-100 qc-h-100 object-cover" muted autoplay playsinline loop poster="https://www.ssfglobal.co.uk/frontend/assets/images/video-thumbnail.jpg">
                                <source id="videoSource" src="{{ url('frontend/assets/videos/landing-v2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="background-video-wrap qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <div class="background-overlay"></div>
                        </div>
                        <div class="container" >
                            <div class="row items-center">
                                <div class="col col-12 col-xl-10 offset-xl-1 relative flex flex-col justify-left items-center text-left" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
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
                                    {{-- <p class="ld-fh-element relative mb-0/5em px-10percent mt-30 text-24 text-white md:px-0 lqd-unit-animation-done">We connect top-tier legal talent with the world's most ambitious law firms.</p>
                                    <div class="ld-empty-space w-full h-55"></div>
                                    <div class="qc-action-btn-container">
                                        <a href="{{ route('jobs') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-secondary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                                            <span class="btn-txt">Explore Legal Opportunities</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div> --}}
                                    <div class="flex flex-col md:flex-row gap-4 items-center justify-center qc-search-row">
                                        <input type="text" placeholder="Search Job Title" class="qc-input-search w-full md:w-auto px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">

                                        <select class="qc-select-category w-full md:w-auto px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                                            <option value="">Select Category</option>
                                            <option value="corporate">Corporate</option>
                                            <option value="litigation">Litigation</option>
                                            <option value="tax">Tax</option>
                                        </select>

                                        <select class="qc-select-location w-full md:w-auto px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                                            <option value="">Select Location</option>
                                            <option value="london">London</option>
                                            <option value="new-york">New York</option>
                                            <option value="dubai">Dubai</option>
                                        </select>

                                        <button class="qc-btn-search px-6 py-3 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Search</button>
                                    </div>
                                    <div class="ld-empty-space w-full h-110 module-space-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide w-full">
                    <div class="min-h-100vh flex items-center bg-cover bg-center">
                        <div class="landing-video-container qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <video id="dynamicVideo" class="rs-html5-video qc-w-100 qc-h-100 object-cover" muted autoplay playsinline loop poster="https://www.ssfglobal.co.uk/frontend/assets/images/video-thumbnail.jpg">
                                <source id="videoSource" src="{{ url('frontend/assets/videos/landing-v2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="background-video-wrap qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <div class="background-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="row items-center">
                                <div class="col col-12 col-xl-10 offset-xl-1 relative flex flex-col justify-center items-center text-center" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                                    <h1 class="ld-fh-element lqd-highlight-custom-underline lqd-highlight-grow-left text-decoration-default lqd-split-chars relative mb-0 text-84 text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}' data-split-text="true" data-split-options='{"type":"chars, words"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-chars > .split-inner","duration":1800,"delay":"50","ease":"power4.out","direction":"forward","initValues":{"transformOriginX":100,"transformOriginY":100,"transformOriginZ":"100px","opacity":0},"animations":{"transformOriginZ":"-100px","opacity":1}}'>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">20 Years </span>
                                            <span class="lqd-highlight-inner h-auto left-0 bottom-0 qc-text-secondary">
                                                <svg class="w-full relative block" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none" fill="currentColor">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                        of Legal Recruitment Expertise
                                    </h1>
                                    <p class="ld-fh-element relative mb-0/5em px-10percent mt-30 text-24 text-white md:px-0 lqd-unit-animation-done">Led by former lawyers, we understand what law firms and candidates need and deliver results that last.</p>
                                    <div class="ld-empty-space w-full h-55"></div>
                                    <div class="qc-action-btn-container">
                                        <a href="{{ route('jobs') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-secondary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                                            <span class="btn-txt">Explore Legal Opportunities</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="ld-empty-space w-full h-110 module-space-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide w-full">
                    <div class="min-h-100vh flex items-center bg-cover bg-center">
                        <div class="landing-video-container qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <video id="dynamicVideo" class="rs-html5-video qc-w-100 qc-h-100 object-cover" muted autoplay playsinline loop poster="https://www.ssfglobal.co.uk/frontend/assets/images/video-thumbnail.jpg">
                                <source id="videoSource" src="{{ url('frontend/assets/videos/landing-v2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="background-video-wrap qc-position-absolute qc-w-100 qc-h-100 overflow-hidden">
                            <div class="background-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="row items-center">
                                <div class="col col-12 col-xl-10 offset-xl-1 relative flex flex-col justify-center items-center text-center" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                                    <h1 class="ld-fh-element lqd-highlight-custom-underline lqd-highlight-grow-left text-decoration-default lqd-split-chars relative mb-0 text-84 text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}' data-split-text="true" data-split-options='{"type":"chars, words"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-chars > .split-inner","duration":1800,"delay":"50","ease":"power4.out","direction":"forward","initValues":{"transformOriginX":100,"transformOriginY":100,"transformOriginZ":"100px","opacity":0},"animations":{"transformOriginZ":"-100px","opacity":1}}'>
                                        Global Reach
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">Personal Focus</span>
                                            <span class="lqd-highlight-inner h-auto left-0 bottom-0 qc-text-secondary">
                                                <svg class="w-full relative block" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none" fill="currentColor">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h1>
                                    <p class="ld-fh-element relative mb-0/5em px-10percent mt-30 text-24 text-white md:px-0 lqd-unit-animation-done">From London to Riyadh to Singapore, our legal recruitment network delivers high-impact hires across borders.</p>
                                    <div class="ld-empty-space w-full h-55"></div>
                                    <div class="qc-action-btn-container">
                                        <a href="{{ route('jobs') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-secondary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                                            <span class="btn-txt">Explore Legal Opportunities</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
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
    <section class="lqd-section qc-x-section about res-reset-height flex items-center justify-center bg-white bg-norepeat pt-70" id="about" data-tooltip="About Us" data-section-luminosity="light" style="background-image: url({{ url('frontend/assets/images/bg/bg-dots.png') }})">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-lg-6 qc-otl-hidden">
                    <div class="lqd-imggrp-container relative transition-all mb-2em qc-about-with-badge">
                        <div class="lqd-imggrp-inner flex flex-wrap">
                            <div class="lqd-imggrp-single module-img-3 img-style-1" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container">
                                    <figure>
                                        <img width="400" src="{{ url('frontend/assets/images/others/about-with-badge-02.webp') }}" alt="about">
                                    </figure>
                                </div>
                            </div>
                            <div class="lqd-imggrp-single module-img-2 img-style-active img-style jshndle-img-style" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container">
                                    <figure>
                                        <img width="253" height="343" src="https://cdn.britannica.com/77/175777-050-370B4EE7/architecture-skyscraper-30-St-Mary-Axe-London-england-Gherkin.jpg" alt="about">
                                    </figure>
                                </div>
                            </div>
                            <div class="lqd-imggrp-single module-img-2 img-style-upcoming img-style jshndle-img-style" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container">
                                    <figure>
                                        <img width="253" height="343" src="https://img.freepik.com/free-photo/empire-state-building-closeup-manhattan-new-york-city_649448-3121.jpg?t=st=1751454740~exp=1751458340~hmac=4eabc8f5d69c5025ac4cd27b7f5a5a50828288347102b2dd3673beb28e9f828b&w=740" alt="about">
                                    </figure>
                                </div>
                            </div>
                            <div class="lqd-imggrp-single module-img-2 img-style jshndle-img-style" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container">
                                    <figure>
                                        <img width="253" height="343" src="https://img.freepik.com/free-photo/toronto-skyline-from-park_649448-3490.jpg?t=st=1751455014~exp=1751458614~hmac=e46d8d19dd61dffb18ea3d28c35bcdc044b7ace7e5f87ce32a9aa9da852aa839&w=740" alt="about">
                                    </figure>
                                </div>
                            </div>
                            <div class="lqd-imggrp-single module-img-2 img-style jshndle-img-style" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container">
                                    <figure>
                                        <img width="253" height="343" src="https://img.freepik.com/free-photo/buildings-business-city_116348-25.jpg?t=st=1751455725~exp=1751459325~hmac=1e6eaa60ba73f0ada8b56ec7bc017798783078bd2d9cc419c757276bea10b097&w=740" alt="about">
                                    </figure>
                                </div>
                            </div>
                            <div class="qcs-options-container">
                                {{-- <div class="qcs-pause-play jshndle-qcs-pause-play">
                                    <i class="fa-solid fa-pause"></i>
                                </div> --}}
                                <div class="qcs-progess-container">
                                    <div class="qcs-progress jshndle-qcs-progress"></div>
                                </div>
                            </div>
                            <div class="year-stamp">
                                <div class="year-number">
                                    <div class="year">20</div>
                                    <div class="plus animate-rotateStep">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <div class="year-text">Years of <br> Expereince</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 flex flex-col items-start">
                    <h6 class="ld-fh-element relative mb-1/5em py-5 px-10 qc-bg-primary rounded-100 text-10 uppercase font-bold text-white">About us</h6>
                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">20 Years</span>
                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                        of Excellence in Legal Recruitment
                    </h2>
                    <p class="ld-fh-element relative mb-1/25em text-18 leading-1/6em text-black"><span class="qc-text-primary qc-fw-600">QC Legal</span> is a specialist, award-winning legal recruitment firm with over 20 years of deep-rooted industry expertise. We are trusted by global law firms and multinational legal teams for our proven track record in sourcing exceptional legal talent at Managing Partner, Board, SMT, and Department Head levels.</p>
                    <div class="accordion accordion-md accordion-title-underlined w-full mb-2em" id="lqd-about-items" role="tablist" aria-multiselectable="true">
                        <div class="accordion-item panel mb-10">
                            <div class="accordion-heading" role="tab" id="lqd-heading-1" data-id="lqd-about-item-1">
                                <h4 class="accordion-title text-17" data-bs-controls="lqd-about-item-1">
                                    <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-about-items" href="#lqd-about-item-1" aria-expanded="false" aria-controls="lqd-about-item-1">What do we do?
                                        <span class="accordion-expander">
                                            <i class="fa-solid fa-plus icon-ion-ios-remove"></i>
                                            <i class="fa-solid fa-minus icon-ion-ios-add"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="lqd-about-item-1" class="accordion-collapse collapse" role="tabpanel" aria-labelledby="lqd-heading-1" data-bs-parent="#lqd-about-items">
                                <div class="accordion-content">
                                    <div class="ld-fancy-heading">
                                        <p class="ld-fh-element relative mb-1/25em tex-16 leading-1/25em text-black">We don't just fill roles , we transform legal teams. From strategic lateral hires to senior in-house placements, we support clients worldwide in building high-performing legal functions that drive results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel mb-10 active">
                            <div class="accordion-heading" role="tab" id="lqd-heading-2" data-id="lqd-about-item-2">
                                <h4 class="accordion-title text-17" data-bs-controls="lqd-about-item-2">
                                    <a class="" data-bs-toggle="collapse" data-bs-parent="#lqd-about-items" href="#lqd-about-item-2" aria-expanded="false" aria-controls="lqd-about-item-2">Why use QC Legal?
                                        <span class="accordion-expander">
                                            <i class="fa-solid fa-plus icon-ion-ios-remove"></i>
                                            <i class="fa-solid fa-minus icon-ion-ios-add"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="lqd-about-item-2" class="accordion-collapse collapse show" role="tabpanel" aria-labelledby="lqd-heading-2" data-bs-parent="#lqd-about-items">
                                <div class="accordion-content">
                                    <div class="ld-fancy-heading">
                                        <p class="ld-fh-element relative mb-1/25em tex-16 leading-1/25em text-black">With two decades of success and international reach, we know what makes a great lawyer and a great employer. Our refined recruitment model saves time and delivers precision-matched candidates from our exclusive talent pool.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-secondary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                        <span class="btn-txt">Learn More About Us</span>
                        <span class="btn-icon">
                            <i class="fa-solid fa-address-card icon-md-arrow-forward"></i>
                        </span>
                        <span class="btn-icon ms-0">
                            <i class="fa-solid fa-address-card icon-md-arrow-forward"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="lqd-section qc-x-section res-reset-height ceonote flex items-center justify-center py-100 bg-norepeat bg-cover bg-center bg-white" id="ceonote"  style="background-image: url({{ url('frontend/assets/images/demo/modern-business/bg-scaled.jpg') }});">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-lg-12 px-20 text-center pt-70">
                    <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                        A note from the
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">CEO</span>
                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                    </h2>
                </div>
                <div class="col col-12 col-md-12">
                    <div class="ceo-video-container relative">
                        <div class="thumbnail">
                            <a href="{{ url('frontend/assets/videos/ceo-message-v2.mp4') }}" class="glightbox-ceo-video">
                                <div class="play-icon">
                                    <div class="icon animate-pulseeffect">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="image">
                                <img src="{{ url('frontend/assets/images/others/ceo-message-bg.webp') }}" alt="A Note From CEO" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="lqd-section qc-x-section res-reset-height ceonote flex items-center justify-center py-50 bg-norepeat bg-cover bg-center bg-white" id="ceonote" data-tooltip="CEO Note" data-section-luminosity="light" style="background-image: url(https://images.ctfassets.net/5wq17jjenal9/5HONwb405JiMudcFrHzOUr/01ab7f73996c82089d42fc9ee3a49aef/St_James_exterior.jpg);">
        <div class="background-overlay transition-all bg-green-100 opacity-100" style="background-image: linear-gradient(90deg, rgb(13 39 63) 30%, rgba(242, 41, 91, 0) 125%)"></div>
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-md-12 col-lg-5 flex flex-col items-start py-30">
                    {{-- <h6 class="ld-fh-element relative mb-1/5em py-5 px-10 qc-bg-primary text-white rounded-100 text-10 uppercase font-bold"> About us</h6> --}}
                    <h3 class="ld-fh-element relative mb-0/5em text-40 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
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
                    <div class="ld-fh-element relative mb-1/25em text-16 leading-1/6em text-black qc-quote-style">
                        <p class="my-0">
                            “With over 20 years in the industry, we've seen legal recruitment evolve — but our purpose has remained the same: to connect world-class legal talent with visionary law firms and businesses.
                            <br>
                            At QC Legal, we've re-engineered the recruitment process. We don't just match CVs to vacancies we build long-term partnerships based on insight, integrity and global reach. Whether you're a Managing Partner seeking strategic hires or a legal professional ready to take the next step, our promise is the same  discretion, expertise and results. We're proud to be trusted by global brands, Magic Circle firms, and high-growth businesses across the UK, Europe, the Middle East and beyond."
                        </p>
                        <img src="{{ url('frontend/assets/images/others/quote.png') }}" alt="A note from the CEO" class="img-fluid quote-image">
                        <img src="{{ url('frontend/assets/images/others/ceo-ben-haider.png') }}" alt="A note from the CEO" class="img-fluid quote-image ceo">
                    </div>
                    <a href="#"
                        class="btn btn-naked btn-hover-reveal btn-has-label font-family-inherit text-15 text-black">
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
                                <img class="rounded-2 uni-img" width="998" height="696" src="https://assets.leverageedu.com/school-cover-image/logo_1620477804457.png" alt="strategy" data-aspect>
                                {{-- <img src="{{ url('frontend/assets/images/others/ceo-ben-haider.png') }}" alt="A note from the CEO" class="img-fluid desktop-ceo-image"> --}}
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        $premiumJobs = $jobs->where('is_premium', 1);
    @endphp
    @if (count($premiumJobs) > 0)
        <section class="lqd-section qc-x-section jobsearch res-reset-height py-30 flex items-end" id="jobsearch" data-tooltip="Job Search" data-section-luminosity="light" style="background-image: url({{ url('frontend/assets/images/demo/modern-business/bg-dots.png') }})">
            <div class="container px-20">
                <div class="row">
                    <div class="col col-12 col-lg-12 px-20 mb-30 mt-50 text-center sm:m-0">
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
                        <p class="ld-fh-element relative mb-0/5em px-10percent md:px-0">Solicitor or Lawyer vacancies - which ever name you start with, your specialist job in Property Litigation, Commercial or Corporate law is waiting for you. Let us connect you. Give us a call for an informal chat on <a href="tel:0161 880 0118" class="qc-text-primary qc-fw-600">0161 880 0118</a> or Email us on <a href="mailto:jobs@qclegal.com" class="qc-text-primary qc-fw-600">jobs@qclegal.com</a></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12 relative px-20">
                            <div class="qc-jobs-parent-container home">
                                <div class="qc-job-cards-container">
                                    @foreach ($premiumJobs as $job)
                                        <div class="qc-job-card jshndle-job-card selected">
                                            <div class="mobile-loading-icon">
                                                <i class="fa-solid fa-loader fa-spin"></i>
                                            </div>
                                            <div class="qc-job-card-header">
                                                <div class="d-flex">
                                                    @if ($job->location)
                                                        <div class="qc-job-card-location badge"><i class="fa-solid fa-location-dot"></i>
                                                            {{ $job->location }}
                                                        </div>
                                                    @endif
                                                    <div class="qc-job-card-location badge qc-premium-badge">
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                @if ($job->title)
                                                    <h3 class="qc-job-card-title">{{ $job->title }}</h3>
                                                @endif
                                            </div>
                                            <div class="qc-job-card-body">
                                                <div class="qc-job-short-desc">
                                                    <p class="my-0 text-ellipsis-3">{{ $job->short_desc }}</p>
                                                </div>
                                                @php
                                                    $fields = collect([
                                                        ['value' => $job->position, 'icon' => 'fa-solid fa-briefcase'],
                                                        ['value' => $job->pqe, 'icon' => 'fa-solid fa-user-graduate'],
                                                        ['value' => $job->type, 'icon' => 'fa-solid fa-clock'],
                                                        ['value' => $job->pay_grade, 'icon' => 'fa-solid fa-circle-sterling'],
                                                        ['value' => $job->desc_count, 'icon' => 'fa-solid fa-align-left'],
                                                        ['value' => $job->sector, 'icon' => 'fa-solid fa-building'],
                                                        ['value' => $job->qc_code, 'icon' => 'fa-solid fa-barcode'],
                                                    ])->filter(fn($field) => $field['value'])->take(8);
                                                @endphp

                                                <div class="qc-job-points">
                                                    @foreach ($fields as $field)
                                                        <div class="point">
                                                            <div class="icon"><i class="{{ $field['icon'] }}"></i></div>
                                                            <div class="text"><p class="my-0">{{ $field['value'] }}</p></div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="qc-action-btn-container">
                                                    <a href="{{ route('jobs') }}?premium=true&qccode={{ $job->qc_code }}" class="mt-10 btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-md border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-primary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                                                        <span class="btn-txt">Apply Now</span>
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
                                    @endforeach
                                </div>
                            </div>
                            <div class="qc-action-btn-container home">
                                <a href="{{ route('jobs') }}" class="mt-10 btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-md border-thin btn-hover-swp btn-has-label items-center font-family-inherit qc-bg-secondary rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em text-white">
                                    <span class="btn-txt">Explore All Jobs</span>
                                    <span class="btn-icon">
                                        <i class="fa-solid fa-search icon-md-arrow-forward"></i>
                                    </span>
                                    <span class="btn-icon ms-0">
                                        <i class="fa-solid fa-search icon-md-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="qc-slider-control-buttons">
                                <div class="qc-scroll-click-top qc-common-scroll-btn">
                                    <div class="icon">
                                        <i class="fa-solid fa-chevron-up"></i>
                                    </div>
                                </div>
                                <div class="qc-scroll-click-bottom qc-common-scroll-btn">
                                    <div class="icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 d-md-none">
                            <div class="jobs-image-parent-container">
                                <div class="jobs-image-container qc-w-90">
                                    <div class="img-01 w-full">
                                        <img class="img-fluid w-full object-cover" src="{{ url('frontend/assets/images/others/career-01-v2.png') }}" alt="Start Your Career">
                                        {{-- <img class="img-fluid w-full object-cover" src="https://img.freepik.com/free-photo/vertical-shot-walkie-talkie-tower-buildings-london-england_181624-1804.jpg?t=st=1751541245~exp=1751544845~hmac=51e79003d9bdb20880431c947f73282a043e72f5932253aa9adcc745e1fe0dd6&w=900" alt="Start Your Career"> --}}
                                        {{-- <img class="img-fluid w-full object-cover" src="https://img.freepik.com/free-photo/modern-skyscrapers-japan-business-district_23-2148836796.jpg?t=st=1751461148~exp=1751464748~hmac=5cdfbe9c00042d3318e8c69cec3fcb4a4aff47caf2ddc4198cf5e295832fce81&w=740" alt="Start Your Career"> --}}
                                        {{-- <img class="img-fluid w-full object-cover" src="{{ url('frontend/assets/images/others/career-01-v1.png') }}" alt="Start Your Career"> --}}
                                    </div>
                                    <div class="img-02">
                                        <img class="img-fluid" src="https://www.interlinkrecruitment.com/application/files/7216/1771/2737/office_london.jpg" alt="London">
                                        {{-- <img class="img-fluid" src="https://ichef.bbci.co.uk/ace/standard/549/cpsprodpb/13593/production/_92715297_dbox_epa_1us_aerial_cluster_304.jpg" alt="London"> --}}
                                        {{-- <img class="img-fluid" src="https://img.freepik.com/free-photo/empowered-business-women-working-together_23-2149322925.jpg?t=st=1751525738~exp=1751529338~hmac=1967d8b1a2d32dd3a8138f21c7262c51131f71b2426abc6d5fc9c38a77e6d9ac&w=740" alt="London"> --}}
                                    </div>
                                    <div class="img-03 animate-rotateStep">
                                        <i class="fa-solid fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper qc-job-swiper qc-landing-bullets">
                        <div class="swiper-wrapper">
                            @foreach ($premiumJobs as $job)
                                <div class="swiper-slide">
                                    <div class="qc-jobs-parent-container">
                                        <div class="qc-job-cards-container">
                                            <div class="qc-job-card jshndle-job-card">
                                                <div class="mobile-loading-icon">
                                                    <i class="fa-solid fa-loader fa-spin"></i>
                                                </div>
                                                <div class="qc-job-card-header">
                                                    <div class="d-flex">
                                                        @if ($job->location)
                                                            <div class="qc-job-card-location badge"><i class="fa-solid fa-location-dot"></i>
                                                                {{ $job->location }}
                                                            </div>
                                                        @endif
                                                        <div class="qc-job-card-location badge qc-premium-badge">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    @if ($job->title)
                                                        <h3 class="qc-job-card-title">{{ $job->title }}</h3>
                                                    @endif
                                                </div>
                                                <div class="qc-job-card-body">
                                                    <div class="qc-job-short-desc">
                                                        <p class="my-0 text-ellipsis-3">{{ $job->short_desc }}</p>
                                                    </div>
                                                    @php
                                                        $fields = collect([
                                                            ['value' => $job->position, 'icon' => 'fa-solid fa-briefcase'],
                                                            ['value' => $job->pqe, 'icon' => 'fa-solid fa-user-graduate'],
                                                            ['value' => $job->type, 'icon' => 'fa-solid fa-clock'],
                                                            ['value' => $job->pay_grade, 'icon' => 'fa-solid fa-circle-sterling'],
                                                            ['value' => $job->desc_count, 'icon' => 'fa-solid fa-align-left'],
                                                            ['value' => $job->sector, 'icon' => 'fa-solid fa-building'],
                                                            ['value' => $job->qc_code, 'icon' => 'fa-solid fa-barcode'],
                                                        ])->filter(fn($field) => $field['value'])->take(8);
                                                    @endphp

                                                    <div class="qc-job-points">
                                                        @foreach ($fields as $field)
                                                            <div class="point">
                                                                <div class="icon"><i class="{{ $field['icon'] }}"></i></div>
                                                                <div class="text"><p class="my-0">{{ $field['value'] }}</p></div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div> --}}
                </div>
            </div>
        </section>
    @endif
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
        <script>
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
