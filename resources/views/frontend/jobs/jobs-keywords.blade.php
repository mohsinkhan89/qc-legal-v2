@extends('frontend/layouts/master')
@section('title')
	<title>{{ ucwords($keywords->title) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $keywords->keywords }}">
    <meta name="keyword-slug" content="{{ $slug }}">
@endsection
@section('style')
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @media only screen and (max-width: 510px) {
            .qc-sublanding {
                background: linear-gradient(93deg, #01091278, #0b223e73), url('{{ url('frontend/assets/images/bg/top-banner-mobile-latest-jobs-v1.webp') }}') no-repeat center/cover !important;
            }
        }
    </style>
@endsection

@section('metas')
    <meta property="og:title" content="{{ ucwords($keywords->title) }}">
    <meta name="description" content="{{ $keywords->description }}">
    <meta property="og:description" content="{{ $keywords->description }}">
    <meta name="twitter:title" content="{{ ucwords($keywords->title) }}">
    <meta name="twitter:description" content="{{ $keywords->description }}">
@endsection

@section('content')
    <section class="lqd-section banner flex items-center bg-cover bg-center border-10 border-white qc-sublanding" id="landing" style="background: linear-gradient(93deg, #01091278, #0b223e73), url('{{ url('frontend/assets/images/bg/top-banner-desktop-latest-jobs-v2.webp') }}') no-repeat center/cover;">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-xl-10 offset-xl-1 relative flex flex-col justify-center items-center text-center" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                    <h1 class="ld-fh-element lqd-highlight-custom-underline lqd-highlight-grow-left text-decoration-default lqd-split-chars relative mb-0 text-84 text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}' data-split-text="true" data-split-options='{"type":"chars, words"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-chars > .split-inner","duration":1800,"delay":"50","ease":"power4.out","direction":"forward","initValues":{"transformOriginX":100,"transformOriginY":100,"transformOriginZ":"100px","opacity":0},"animations":{"transformOriginZ":"-100px","opacity":1}}'>
                        Legal <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">Jobs</span>
                            <span class="lqd-highlight-inner h-auto left-0 bottom-0 qc-text-secondary">
                                <svg class="w-full relative block" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none" fill="currentColor">
                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                </svg>
                            </span>
                        </mark>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="lqd-section case-studies jshndle-section-fixed qc-x-section res-reset-height mainjobsearch flex items-center justify-center py-50 px-10vw bg-white lg:px-0 md:items-start" id="findjobsection" data-section-luminosity="light">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-12 px-10 mb-20 text-center search-container-col">
                    <div class="qc-jobs-parent-container">
                        <div class="qc-search-container">
                            <div class="qc-search">
                                <div class="qc-search-input">
                                    <input type="text" class="qc-search-input jshndle-job-search-input" placeholder="Search for a job">
                                </div>
                                <div class="qc-search-button">
                                    <button class="qc-search-button"><i class="fa-solid fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="qc-filter-button-container">
                            <button class="qc-filter-button jshndle-filter-button">
                                <i class="fa-solid fa-filter-list"></i> Filter
                            </button>
                        </div>
                        <div class="qc-filter-container">
                            @foreach ($job_filters as $filter)
                                <div class="qc-filter">
                                    <select class="qc-form-select jshndle-job-filter" data-filter="{{ $filter->slug }}">
                                        @php
                                            $options = $filter->job_filter_options
                                                ->sortBy(function ($item) {
                                                    return $item->sort_order_status == 1 ? 0 : 1;
                                                })
                                                ->sortBy(function ($item) {
                                                    return $item->sort_order_status == 1 ? $item->sort_order : $item->value;
                                                }, SORT_NATURAL | SORT_FLAG_CASE);
                                        @endphp
                                        <option value="all" selected>{{ $filter->title }}</option>
                                            @foreach ($options as $option)
                                                <option value="{{ $option->slug }}">{{ $option->value }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 qc-error-handling-section notfound jshndle-notfound hide-status hide-true">
                    <div class="notfound-img">
                        <img src="{{ url('frontend/assets/images/others/jobnotfound.svg') }}" alt="Oops! Job Not Found" class="img-fluid">
                    </div>
                    <div class="notfound-content">
                        <div class="ld-fancy-heading relative animation-element">
                            <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                Try another
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">search</span>
                                    <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                        <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                            <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                        </svg>
                                    </span>
                                </mark>
                            </h2>
                        </div>
                        <p>Your requested job could't be found</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 qc-error-handling-section loading jshndle-loading hide-status">
                    <div class="loading-icon">
                        <i class="fa-solid fa-loader fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="qc-jobs-grand-parent-container jshndle-jobs-grand-parent-container hide-status hide-true">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-12 px-10 mb-10 qc-container-height list-container jshndle-list-container">
                        <div class="qc-jobs-parent-container">
                            <div class="qc-job-cards-container jshndle-append-job-cards">
                                <i class="fa-solid fa-loader fa-spin"></i>
                            </div>
                            <div class="qc-job-loadmore-container my-10">
                                <button class="qc-job-loadmore-button jshndle-job-loadmore-button">Load More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 px-10 mb-10 qc-container-height desc-container jshndle-desc-container">
                        <div class="qc-jobs-desc-container qc-jobs-desc-pop jshndle-append-desc set-content">
                            <div class="loading-icon">
                                <i class="fa-solid fa-loader fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <script>
        $(document).ready(function () {
            $('main').removeClass('overflow-hidden');
            $(document).on('keypress', function(e) {
                if (e.which === 13) {
                    e.preventDefault();
                    $('.qc-search-button').click();
                }
            });

            // qch: featured job slider
            const swiper = new Swiper('.qc-featured-job-slider', {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 10,
                speed: 1000,
                navigation: {
                    nextEl: '.qc-swiper-next',
                    prevEl: '.qc-swiper-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                allowTouchMove: true,
                breakpoints: {
                    0: {
                        slidesPerView: 1.1,
                    },
                    768: {
                        slidesPerView: 2.2,
                    },
                    1190: {
                        slidesPerView: 3,
                    }
                }
            });

            // qch: text capitlize case
            function qcCapitalizeText() {
                const smallWords = ['and', 'or', 'of', 'in', 'on', 'at', 'to', 'for', 'by', 'with', 'a', 'an', 'the'];

                $('.qc-text-capitalize, .set-content p strong').each(function() {
                    let words = $(this).text().toLowerCase().split(' ');
                    words = words.map((word, index) => {
                        if (index !== 0 && smallWords.includes(word)) {
                            return word;
                        }
                        return word.charAt(0).toUpperCase() + word.slice(1);
                    });
                    let capitalized = words.join(' ');
                    $(this).text(capitalized);
                });
            }

            // v7
            function qcEachJobUrlAndTitle() {
                const pathParts = window.location.pathname.split('/').filter(Boolean);
                const segments = pathParts.slice(1);

                const decodeSeg = (s) => decodeURIComponent(s || '').replace(/-/g, ' ').trim();
                const ucwords = (str) => str.replace(/\b\w/g, c => c.toUpperCase());

                $('.jshndle-job-filter').each(function () {
                    $(this).val($(this).find('option').first().val());
                });

                // const searchTerm = segments[0] ? ucwords(decodeSeg(segments[0])) : '';
                const searchTerm = segments[0] && segments[0].toLowerCase() !== 'all' ? ucwords(decodeSeg(segments[0])) : '';
                $('.jshndle-job-search-input').val(searchTerm);

                if (segments.length > 1) {
                    segments.slice(1).forEach(seg => {
                        const value = ucwords(decodeSeg(seg));
                        $('.jshndle-job-filter').each(function () {
                            $(this).find('option').each(function () {
                                if (($(this).val() || '').toLowerCase() === value.toLowerCase()) {
                                    $(this).prop('selected', true);
                                    $(this).parent().val($(this).val()).trigger('change');
                                    return false;
                                }
                            });
                        });
                    });
                }

                // let title = '';
                // if (!searchTerm) {
                //     title = 'Legal Jobs UK - Apply Now for Top Law Roles | QC Legal';
                // } else {
                //     const filtersSelected = [];
                //     $('.jshndle-job-filter').each(function () {
                //         const val = $(this).val();
                //         if (val) filtersSelected.push(val);
                //     });

                //     if (filtersSelected.length === 0) {
                //         title = `${searchTerm} Jobs, Find Legal Jobs in UK and World Wide / QC Legal`;
                //     } else {
                //         title = `${searchTerm} Jobs, Legal Jobs in ${filtersSelected.join(', ')} / QC Legal`;
                //     }
                // }
                // if (title) document.title = title;

                let title = '';
                if (searchTerm) {
                    title = `${searchTerm} Jobs, Find Legal Jobs in UK and World Wide / QC Legal`;
                }
                if (title) document.title = title;
            }

            qcEachJobUrlAndTitle();

            // qch: floating label script
            $(document).on('input focus blur', '.qc-floating-label input, .qc-floating-label textarea', function () {
                let $wrapper = $(this).closest('.qc-floating-label');
                if ($(this).val().trim() !== '' || $(this).is(':focus')) {
                    $wrapper.addClass('active');
                } else {
                    $wrapper.removeClass('active');
                }
            });

            // qch: input file script
            $(document).on('change', '#cvfile', function () {
                const fileName = this.files[0]?.name || 'No file chosen';
                $(this).siblings('.upload-filename').text(fileName);
            });

            // qch: adding description from the card
            function jobContentAppend(jobCard) {
                const $target = $('.qc-jobs-desc-pop');
                let jobId = $(jobCard).data('job-id');
                let $loadingIcon = $(jobCard).find('.mobile-loading-icon');
                loadingHtml = `
                    <div class="loading-icon">
                        <i class="fa-solid fa-loader fa-spin"></i>
                    </div>
                `;
                $('.jshndle-job-card').removeClass('selected');
                $(jobCard).addClass('selected');
                $('.jshndle-append-desc').html(loadingHtml);
                $loadingIcon.addClass('true');

                $.ajax({
                    url: "{{ route('jobGet') }}",
                    type: 'POST',
                    data: {
                        job_id: jobId,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);

                        let html = `
                            ${response.is_premium == 1 ? `
                                <div class="qc-premium-badge" title="Premium Job">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            ` : ''}
                            <div class="qc-jobs-desc">
                                <div class="close jshndle-jobs-desc-pop-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                                <div class="heading d-flex items-start">
                                    <h3 class="ld-fh-element relative mb-0/5em text-30 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                        Job
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">Overview</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h3>
                                </div>
                                <h3 class="ld-fh-element relative mb-0/5em text-20 leading-1/1em qc-text-primary">
                                    ${response.title}
                                </h3>
                                <div class="job-overview-container job-common-container">
                                    ${response.location ? `
                                        <div class="job-overview" title="Location: ${response.location}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">Location:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0">${response.location}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                   ${response.position ? `
                                        <div class="job-overview" title="Position: ${response.position}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">Position:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0 qc-text-capitalize">${response.position}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                    ${response.sector ? `
                                        <div class="job-overview" title="Sector: ${response.sector}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">Sector:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0">${response.sector}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                    ${response.qc_code_identity ? `
                                        <div class="job-overview" title="QC Code: ${response.qc_code_identity}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">QC Code:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0">${response.qc_code_identity}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                    ${response.pqe ? `
                                        <div class="job-overview" title="PQE: ${response.pqe}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">PQE:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0">${response.pqe}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                    ${response.desc_count ? `
                                        <div class="job-overview" title="Description: ${response.desc_count}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">Description:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0">${response.desc_count}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                    ${response.pay_grade ? `
                                        <div class="job-overview" title="Pay Grade: ${response.pay_grade}">
                                            <div class="label">
                                                <p class="my-0 qc-fw-600">Pay Grade:</p>
                                            </div>
                                            <div class="text">
                                                <p class="my-0">${response.pay_grade}</p>
                                            </div>
                                        </div>
                                    ` : ''}
                                </div>
                                <div class="apply-button-container">
                                    <div class="apply-button pt-20 pb-10">
                                        <a href="${response.apply_now_custom_link ? response.apply_now_custom_link : 'javascript:void(0)'}" target="${response.apply_now_custom_link_new_tab == 1 ? '_blank' : '_self'}" class="${response.apply_now_custom_link ? '' : 'jshndle-desc-scroll'} btn btn-solid btn-md uppercase btn-hover-txt-liquid-x-alt btn-lg border-thin btn-hover-swp btn-has-label items-center font-family-inherit rounded-100 text-13 font-semibold leading-1/5em tracking-0/1em qc-btn-primary text-white">
                                            <span class="btn-txt" data-text="Get started" data-transition-delay="true" data-delay-options='{"elements": ".lqd-chars", "delayType": "animation", "startDelay": 0, "delayBetween": 32.5, "reverse": true}' data-split-text="true" data-split-options='{"type": "chars, words"}'>Apply Now</span>
                                            <span class="btn-icon">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                            <span class="btn-icon ms-0">
                                                <i class="fa-solid fa-chevron-right icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="qc-seperator"></div>
                                ${response.desc ? response.desc : ''}
                                ${response.apply_now_heading ? `
                                    <div class="bg-wrap text-white qc-bg-primary p-20 rounded-20">
                                        <div class="heading d-flex items-start">
                                            <h3 class="ld-fh-element relative mb-0/5em text-30 leading-1/1em text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                                ${response.apply_now_heading}
                                            </h3>
                                        </div>
                                        ${response.apply_now_note ? `
                                            <div class="apply-container job-common-container">
                                                <div class="apply">
                                                    ${response.apply_now_note}
                                                </div>
                                            </div>
                                        ` : ''}
                                    </div>
                                ` : ''}
                                <div class="heading d-flex items-start mt-30 qc-form-scroll-object">
                                    <h3 class="ld-fh-element relative mb-0/5em text-30 leading-1/1em" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}'>
                                        Apply for this
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">position</span>
                                            <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light">
                                                <svg class="hidden" xmlns="http://www.w3.org/2000/svg" width="235.509" height="13.504" viewbox="0 0 235.509 13.504" aria-hidden="true" preserveaspectratio="none">
                                                    <path d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z" transform="translate(0 0.002)"></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h3>
                                </div>
                                <div class="w-full">
                                    <div class="lqd-contact-form qc-job-apply-form lqd-contact-form-inputs-underlined lqd-contact-form-button-block lqd-contact-form-button-circle lqd-contact-form-inputs-border-thick bg-white pt-45 pb-50 px-75 rounded-12 animation-element qc-bg-light qc-standard-blur job-form-reset">
                                        <div role="form">
                                            <div class="screen-reader-response animation-element"><p role="status" aria-live="polite" aria-atomic="true"></p></div>
                                            <form class="lqd-cf-form jshndle-job-form">
                                                <input type="hidden" value="${response.id}" name="job_id" id="job_id">
                                                <div class="row -mr-15 -ml-15 flex-wrap">
                                                    <div class="col col-12 col-md-6 px-15">
                                                        <div class="relative w-full qc-floating-label">
                                                            <input type="text" name="first_name" id="first_name" placeholder="" class="border-black-20 text-black text-13 qc-bg-transparent" required>
                                                            <label for="first_name" class="">First Name <span class="qc-text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col col-12 col-md-6 px-15">
                                                        <div class="relative w-full qc-floating-label">
                                                            <input type="text" name="last_name" id="last_name" placeholder="" class="border-black-20 text-black text-13 qc-bg-transparent" required>
                                                            <label for="first_name" class="">Last  Name <span class="qc-text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col col-12 col-md-6 px-15">
                                                        <div class="relative w-full qc-floating-label">
                                                            <input type="text" name="email" id="email" placeholder="" class="border-black-20 text-black text-13 qc-bg-transparent" required>
                                                            <label for="first_name" class="">Email <span class="qc-text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col col-12 col-md-6 px-15">
                                                        <div class="relative w-full qc-floating-label">
                                                            <input type="text" name="phone_number" id="phone_number" placeholder="" class="border-black-20 text-black text-13 qc-bg-transparent" required>
                                                            <label for="first_name" class="">Phone Number <span class="qc-text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col col-12 col-md-12 px-15 mb-10">
                                                        <div class="relative w-full qc-floating-label">
                                                            <textarea class="border-black-20 text-black text-13 qc-bg-transparent" id="cover_letter" name="cover_letter" cols="10" rows="6" aria-required="true" aria-invalid="false" placeholder=""></textarea>
                                                            <label for="first_name" class="">Message </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 px-15">
                                                        <label class="qc-custom-file-upload w-full">
                                                            <input type="file" name="cvfile" id="cvfile" aria-required="true" aria-invalid="false" required>
                                                            <span class="upload-label">Upload CV <span class="qc-text-danger">*</span></span>
                                                            <small>(only .docx, .pdf, .jpg, .png)</small>
                                                            <span class="upload-filename">No file chosen</span>
                                                        </label>
                                                    </div>
                                                    <div class="col col-12 px-15 mb-10">
                                                        <label class="flex items-start qc-terms-check space-x-2">
                                                            <input type="checkbox" name="terms" id="terms" class="w-4 h-4 mr-2" required>
                                                            <span>By submitting this form, you agree that this website may store and handle your personal data in line with our privacy policy. <span class="qc-text-danger">*</span></span>
                                                        </label>
                                                    </div>
                                                    <div class="col col-md-12 px-15">
                                                        <button class="jshndle-job-form-submit job-form-submit lqd-cf-form-control lqd-cf-submit border-0 qc-bg-primary text-14 text-white">Apply</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="lqd-cf-response-output"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        $('.jshndle-append-desc').html(html);
                        qcCapitalizeText();
                        $loadingIcon.removeClass('true');
                        if ($target.hasClass('true')) {
                            $('.qc-jobs-desc-pop').removeClass('true');
                        } else {
                            $('.qc-jobs-desc-pop').addClass('true');
                        }
                    }
                });
            }

            $(document).on('click', '.jshndle-job-card', function() {
                jobContentAppend(this);
            });

            // qch: functions to call multiple time
            function getExactHeight() {
                let listHeight = $('.jshndle-list-container').outerHeight();
                $('.jshndle-desc-container').css('max-height', listHeight + 'px');

                console.log("List Height: ", listHeight);
            }

            function renderFirstJob() {
                if (window.innerWidth >= 1190) {
                    const params = new URLSearchParams(window.location.search);
                    const isPremium = params.get('premium') === 'true';
                    const qcCode = params.get('qccode');

                    if (isPremium && qcCode) {
                        const $target = $(`.jshndle-job-card.job-premium[data-qccode="${qcCode}"]`);
                        if ($target.length) {
                            $target.first().trigger('click');
                        } else {
                            $('.jshndle-job-card.job-premium').first().trigger('click');
                        }
                    } else if (isPremium) {
                        $('.jshndle-job-card.job-premium').first().trigger('click');
                    } else {
                        $('.jshndle-job-card.job-common').first().trigger('click');
                    }
                }
            }

            // qch: scrolling apply now button to the form
            $(document).on('click', '.jshndle-desc-scroll', function() {
                const $container = $('.qc-jobs-desc-pop');
                const $target = $('.qc-form-scroll-object');

                const scrollTop = $target.position().top + $container.scrollTop();

                $container.animate({
                    scrollTop: scrollTop
                }, 300);
            });

            // qch: closing the mobile popup
            $(document).on('click', '.jshndle-jobs-desc-pop-close', function () {
                $('.qc-jobs-desc-pop').removeClass('true');
            });

            $(document).on('click', function (e) {
                const $target = $('.qc-jobs-desc-pop');
                if (
                    $target.hasClass('true') &&
                    !$(e.target).closest('.qc-jobs-desc-pop').length &&
                    !$(e.target).closest('.jshndle-job-card').length
                ) {
                    $target.removeClass('true');
                }
            });

            // qch: filter options open/closing of mobile
            $(document).on('click', '.jshndle-filter-button', function () {
                $(this).toggleClass('true');
                $('.qc-filter-container').toggleClass('true');
            });

            // qch: job card component
            let jobOffset = 0;
            let currentFilters = [];
            function renderJobs(jobs, replace = false) {
                let html = '';
                jobs.forEach(job => {
                    let fields = [
                        { label: 'Position', value: job.position, icon: 'fa-solid fa-briefcase' },
                        { label: 'PQE', value: job.pqe, icon: 'fa-solid fa-user-graduate' },
                        { label: 'Pay Grade', value: job.pay_grade, icon: 'fa-solid fa-circle-sterling' },
                        { label: 'Description', value: job.desc_count, icon: 'fa-solid fa-align-left' },
                        { label: 'Sector', value: job.sector, icon: 'fa-solid fa-building' },
                        { label: 'QC Code', value: job.qc_code_identity, icon: 'fa-solid fa-barcode' },
                    ];

                    let shown = 0;
                    let pointsHtml = '';
                    for (let i = 0; i < fields.length && shown < 8; i++) {
                        if (fields[i].value) {
                            pointsHtml += `
                                <div class="point" title="${fields[i].label}: ${fields[i].value}">
                                    <div class="icon"><i class="${fields[i].icon}"></i></div>
                                    <div class="text"><p class="my-0 qc-text-capitalize">${fields[i].value}</p></div>
                                </div>`;
                            shown++;
                        }
                    }

                    html += `
                        <div class="qc-job-card jshndle-job-card job-common" data-job-id="${job.id}">
                            <div class="mobile-loading-icon">
                                <i class="fa-solid fa-loader fa-spin"></i>
                            </div>
                            <div class="qc-job-card-header">
                                <div class="d-flex">
                                    ${job.location ? (() => {
                                        let locArr = job.location.split(',').map(l => l.trim()).filter(l => l);
                                        let shownLocs = locArr.slice(0, 2).join(', ');
                                        let moreCount = locArr.length - 2;
                                        let locText = moreCount > 0 ? `${shownLocs}, +${moreCount} more` : shownLocs;
                                        return `<div class="qc-job-card-location badge" title="${job.location}"><i class="fa-solid fa-location-dot"></i> ${locText}</div>`;
                                    })() : ''}
                                    ${job.is_premium == 1 ? `<div class="qc-job-card-location badge qc-premium-badge" title="Premium Job"><i class="fa-solid fa-star"></i></div>` : ''}
                                </div>
                                ${job.title ? `<h3 class="qc-job-card-title">${job.title}</h3>` : ''}
                            </div>
                            <div class="qc-job-card-body">
                                ${job.short_desc ? `<div class="qc-job-short-desc"><p class="my-0 text-ellipsis-3">${job.short_desc}</p></div>` : ''}
                                <div class="qc-job-points">${pointsHtml}</div>
                            </div>
                        </div>`;
                });

                if (replace) {
                    $('.jshndle-append-job-cards').html(html);
                } else {
                    $('.jshndle-append-job-cards').append(html);
                }
            }

            // qch: apllying filter and fetching the records
            $(document).on('change', '.jshndle-job-filter', function () {
                $('.jshndle-loading.hide-status').removeClass('hide-true');
                $('.jshndle-notfound.hide-status').addClass('hide-true');
                $('.jshndle-jobs-grand-parent-container.hide-status').addClass('hide-true');

                let searchQuery = $('.jshndle-job-search-input').val();
                console.log("Search Query: ", searchQuery);

                currentFilters = [];

                $('.jshndle-job-filter').each(function () {
                    currentFilters.push($(this).val());
                });

                jobOffset = 0;

                $.ajax({
                    url: "{{ route('jobGetFiltered') }}",
                    type: 'POST',
                    data: {
                        allValues: currentFilters,
                        offset: jobOffset,
                        search: searchQuery,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (res) {
                        $('.jshndle-loading.hide-status').addClass('hide-true');

                        if (res.jobs.length === 0) {
                            $('.jshndle-notfound.hide-status').removeClass('hide-true');
                            $('.jshndle-jobs-grand-parent-container.hide-status').addClass('hide-true');
                            $('.jshndle-job-loadmore-button').addClass('qc-disabled');
                        } else {
                            $('.jshndle-jobs-grand-parent-container.hide-status').removeClass('hide-true');
                            $('.jshndle-notfound.hide-status').addClass('hide-true');
                            renderJobs(res.jobs, true);
                            qcCapitalizeText();
                            renderFirstJob();

                            if (res.isLast) {
                                $('.jshndle-job-loadmore-button').addClass('qc-disabled');
                            } else {
                                $('.jshndle-job-loadmore-button').removeClass('qc-disabled');
                            }
                        }
                    }
                });

                // updateURLWithCurrentFilters();
            });

            function updateJobWithKeyword(){
                $('.jshndle-loading.hide-status').removeClass('hide-true');
                $('.jshndle-notfound.hide-status').addClass('hide-true');
                $('.jshndle-jobs-grand-parent-container.hide-status').addClass('hide-true');

                let searchQuery = $('.jshndle-job-search-input').val();
                console.log("Search Query: ", searchQuery);

                const keyword = $('meta[name="keyword-slug"]').attr('content');

                currentFilters = [];

                $('.jshndle-job-filter').each(function () {
                    currentFilters.push($(this).val());
                });

                jobOffset = 0;

                let url = "{{ route('search_job_keywords_json', ':slug') }}";
                url = url.replace(':slug', keyword);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        allValues: currentFilters,
                        offset: jobOffset,
                        search: searchQuery,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (res) {
                        $('.jshndle-loading.hide-status').addClass('hide-true');

                        if (res.jobs.length === 0) {
                            $('.jshndle-notfound.hide-status').removeClass('hide-true');
                            $('.jshndle-jobs-grand-parent-container.hide-status').addClass('hide-true');
                            $('.jshndle-job-loadmore-button').addClass('qc-disabled');
                        } else {
                            $('.jshndle-jobs-grand-parent-container.hide-status').removeClass('hide-true');
                            $('.jshndle-notfound.hide-status').addClass('hide-true');
                            renderJobs(res.jobs, true);
                            qcCapitalizeText();
                            renderFirstJob();

                            if (res.isLast) {
                                $('.jshndle-job-loadmore-button').addClass('qc-disabled');
                            } else {
                                $('.jshndle-job-loadmore-button').removeClass('qc-disabled');
                            }
                        }
                    },
                    error: function (xhr) {
                        $('.jshndle-loading.hide-status').addClass('hide-true');
                        console.log("AJAX Error: ", xhr.responseText);
                    }
                });
            }

            // $('.jshndle-job-filter').trigger('change');
            updateJobWithKeyword();

            // qch: loading more jobs (load more button)
            $(document).on('click', '.jshndle-job-loadmore-button', function () {
                let searchQuery = $('.jshndle-job-search-input').val();
                console.log("Search Query: ", searchQuery);
                let $btn = $(this);
                $btn.html('<i class="fa-solid fa-loader fa-spin"></i>');

                jobOffset += 10;

                let url = "{{ route('search_job_keywords_json', ':slug') }}";
                const keyword = $('meta[name="keyword-slug"]').attr('content');
                url = url.replace(':slug', keyword);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        allValues: currentFilters,
                        offset: jobOffset,
                        search: searchQuery,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (res) {
                        renderJobs(res.jobs, false);
                        qcCapitalizeText();
                        $btn.html('Load More');

                        if (res.isLast) {
                            $btn.addClass('qc-disabled');
                        }

                        $('.jshndle-loading.hide-status').addClass('hide-true');
                        $('.jshndle-notfound.hide-status').addClass('hide-true');
                        $('.jshndle-jobs-grand-parent-container.hide-status').removeClass('hide-true');
                    },
                    error: function (xhr) {
                        $btn.html('Load More');
                        console.log("Load More Error: ", xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.qc-search-button', function () {
                $('.jshndle-job-filter').trigger('change');
            });

            // setTimeout(() => {
            //     getExactHeight();
            // }, 1000);

            // qch: submitting the job form
            $(document).on('click', '.jshndle-job-form-submit', function (event) {
                event.preventDefault();

                let $this = $(this);
                $this.html('<i class="fa-solid fa-loader fa-spin"></i>').addClass('qc-disabled');

                let isValid = true;

                let firstName = $('#first_name');
                let lastName = $('#last_name');
                let email = $('#email');
                let phone = $('#phone_number');
                let cover = $('#cover_letter');
                let cv = $('#cvfile')[0].files[0];
                let terms = $('#terms');

                $('.text-invalid, .file-invalid, .check-invalid').removeClass('text-invalid file-invalid check-invalid');

                if (!firstName.val()) {
                    firstName.addClass('text-invalid'); isValid = false;
                }
                if (!lastName.val()) {
                    lastName.addClass('text-invalid'); isValid = false;
                }
                if (!email.val() || !/^\S+@\S+\.\S+$/.test(email.val())) {
                    email.addClass('text-invalid'); isValid = false;
                }
                if (!phone.val()) {
                    phone.addClass('text-invalid'); isValid = false;
                }
                if (!cover.val()) {
                    cover.addClass('text-invalid'); isValid = false;
                }
                if (!cv || !/\.(pdf|docx|jpg|png)$/i.test(cv.name)) {
                    $('#cvfile').closest('label').addClass('file-invalid'); isValid = false;
                }
                if (!terms.is(':checked')) {
                    terms.closest('label').addClass('check-invalid'); isValid = false;
                }

                setTimeout(() => {
                    $('.text-invalid, .file-invalid, .check-invalid').removeClass('text-invalid file-invalid check-invalid');
                }, 5000);

                if (!isValid) {
                    $this.html('🔄 Retry!').removeClass('qc-disabled');
                    return;
                }

                let formData = new FormData();
                formData.append('job_id', $('#job_id').val());
                formData.append('first_name', firstName.val());
                formData.append('last_name', lastName.val());
                formData.append('email', email.val());
                formData.append('phone_number', phone.val());
                formData.append('cover_letter', cover.val());
                formData.append('cv', cv);
                formData.append('terms', terms.is(':checked') ? 1 : 0);
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                $.ajax({
                    type: "POST",
                    url: "{{ route('jobSubmit') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response['success']) {
                            $('.jshndle-job-form')[0].reset();
                            $this.html('👍 Applied!');

                            Swal.fire({
                                toast: true,
                                timer: 5000,
                                timerProgressBar: true,
                                icon: 'success',
                                html: `You've successfully applied for this job.`,
                                position: 'bottom-end',
                                showConfirmButton: false,
                                showCloseButton: true
                            });

                        } else {
                            $this.html('🔄 Retry!').removeClass('qc-disabled');

                            // setTimeout(() => {
                            //     $this.html('Apply');
                            // }, 2000);
                        }
                    }
                });
            });

            // qch: calling functions at the end
            qcCapitalizeText();
        });
    </script>
@endsection
