@extends('frontend/layouts/master')
@section('title')
	<title>Legal Recruitment in London - Solicitor & Partner Jobs - QC Legal</title>
@endsection

@section('style')
<style>
    @media only screen and (max-width: 510px) {
        .qc-sublanding {
            background: linear-gradient(93deg, #01091278, #0b223e73), url('{{ url('frontend/assets/images/bg/top-banner-mobile-about-us-v1.webp') }}') no-repeat center/cover !important;
        }
    }

    .london-feature-list {
        display: flex;
        flex-direction: column;
        gap: 30px;
        margin-top: 30px;
    }

    .london-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    .london-icon-circle {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background-color: #0b223e; /* primary navy blue */
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 4px 15px rgba(11, 34, 62, 0.15);
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid rgba(152, 132, 96, 0.2);
    }

    .london-icon-circle i {
        color: #ffffff !important; /* always white */
        font-size: 20px;
    }

    .london-feature-item:hover .london-icon-circle {
        background-color: #988460; /* golden accent color */
        transform: translateY(-3px) rotate(360deg);
        box-shadow: 0 8px 20px rgba(152, 132, 96, 0.3);
    }

    .london-feature-content h4 {
        font-size: 19px;
        font-weight: 700;
        margin-bottom: 6px;
        color: #0b223e;
    }

    .london-feature-content p {
        font-size: 16px;
        line-height: 1.6;
        color: #4b5563;
        margin-bottom: 0;
    }

    /* Custom buttons in theme */
    .qc-btn-secondary-custom {
        background: #988460;
        color: #ffffff !important;
        padding: 10px 10px 10px 30px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(152, 132, 96, 0.15);
        display: inline-flex;
        align-items: center;
        gap: 15px;
    }

    .qc-btn-secondary-custom:hover {
        background: #0b223e;
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(11, 34, 62, 0.2);
    }

    .qc-btn-secondary-custom .icon-circle {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .qc-btn-secondary-custom:hover .icon-circle {
        background: #ffffff;
        color: #0b223e;
        transform: translateX(5px);
    }

    /* Override and remove any red/pink highlights with golden/primary */
    .qc-faq-item[open] {
        border-color: rgba(152, 132, 96, 0.3) !important;
    }

    .qc-faq-item[open] .qc-faq-summary {
        color: #988460 !important;
    }

    .qc-faq-item[open] .faq-icon-wrap {
        background: #988460 !important;
        color: #ffffff !important;
    }

    .qc-btn-primary:hover {
        box-shadow: 0 15px 25px rgba(152, 132, 96, 0.2) !important;
    }
</style>
@endsection

@section('metas')
<meta name="author" content="{{ ucwords(config('app.name')) }}">
<meta name="description" content="Looking for top solicitor or partner jobs in London? QC Legal is a premier legal recruitment agency partnering with leading law firms and corporate legal departments.">
<meta property="og:title" content="Legal Recruitment in London - Solicitor & Partner Jobs - QC Legal">
<meta property="og:description" content="Looking for top solicitor or partner jobs in London? QC Legal is a premier legal recruitment agency partnering with leading law firms and corporate legal departments.">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ ucwords(config('app.name')) }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Legal Recruitment in London - Solicitor & Partner Jobs - QC Legal">
<meta name="twitter:description" content="Looking for top solicitor or partner jobs in London? QC Legal is a premier legal recruitment agency partnering with leading law firms and corporate legal departments.">
<meta name="twitter:site" content="{{ setting('site.twiiterlink') }}">
@endsection

@section('content')
    <!-- Top Banner -->
    <section class="lqd-section banner flex items-center bg-cover bg-center border-10 border-white qc-sublanding" id="landing" style="background: linear-gradient(93deg, #01091278, #0b223e73), url('{{ url('frontend/assets/images/bg/top-banner-desktop-about-us-v1.webp') }}') no-repeat center/cover;">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-xl-10 offset-xl-1 relative flex flex-col justify-center items-center text-center" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
                    <h1 class="ld-fh-element lqd-highlight-custom-underline lqd-highlight-grow-left text-decoration-default lqd-split-chars relative mb-0 text-84 text-white" data-inview="true" data-transition-delay="true" data-delay-options='{"elements":".lqd-highlight-inner","delayType":"transition"}' data-split-text="true" data-split-options='{"type":"chars, words"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-chars > .split-inner","duration":1800,"delay":"50","ease":"power4.out","direction":"forward","initValues":{"transformOriginX":100,"transformOriginY":100,"transformOriginZ":"100px","opacity":0},"animations":{"transformOriginZ":"-100px","opacity":1}}'>
                        Legal Recruitment in
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">London</span>
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

    <!-- Section 1: Introduction (Private Practice & In-House) -->
    <section class="lqd-section qc-x-section qc-home-intro flex items-center justify-center py-90 px-10vw lg:px-0" id="london-overview" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row items-center">
                <div class="col col-12 col-lg-12">
                    <div class="sub-title-column">
                        <span class="qc-section-kicker">The Capital's Legal Hub</span>
                        <h2 class="ld-fh-element relative mb-0/5em text-50 leading-1/1em">
                            Connecting Prestigious Firms with
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">Outstanding Lawyers.</span>
                                <span class="lqd-highlight-inner h-0/25em bottom-5 left-0 qc-bg-secondary-light"></span>
                            </mark>
                        </h2>
                    </div>
                </div>
                <div class="col col-12 col-lg-12 mt-30">
                    <div class="qc-editorial-copy">
                        <p class="text-18 leading-1/6em text-gray-600 mb-20">London remains the undisputed epicentre of the global legal market. Navigating this highly competitive landscape requires a recruitment partner with deep local roots and an extensive, trusted network. QC Legal works closely with leading US firms, Magic Circle, Silver Circle, boutique practices, and prestigious in-house legal departments in London.</p>
                        <p class="text-18 leading-1/6em text-gray-600">Our consultative approach ensures we map legal talent not just by skill, but by strategic alignment and cultural fit. From managing senior lateral partner acquisitions to executing complete practice group transitions, our process is defined by precision, absolute confidentiality, and unmatched market intelligence.</p>
                    </div>

                    <div class="qc-btn-group flex flex-wrap gap-20 mt-40">
                        <a href="{{ route('contact') }}" class="qc-btn-primary group inline-flex items-center gap-15">
                            <span>Contact Us</span>
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Private Practice Recruitment (Full Width / 1 per row) -->
    <section class="lqd-section qc-x-section py-90 px-10vw lg:px-0 qc-bg-light" id="private-practice" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="sub-title-column">
                        <span class="qc-section-kicker">Private Practice</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">Law Firm Recruitment Solutions</h2>
                    </div>
                    <p class="qc-section-lead mt-20 mb-40 text-18 leading-1/6em text-gray-600">Representing exceptional fee-earners, senior associates, and partners across the city.</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="qc-editorial-copy mb-30">
                        <p>Our work in London's private practice sector is defined by our direct access to Managing Partners and Practice Group Heads. We represent candidates looking to join elite legal environments, guiding them through every stage of the lateral move process.</p>
                    </div>
                    <div class="london-feature-list">
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Partner Placements & Team Mergers</h4>
                                <p>We facilitate senior-level partner transitions and group lateral moves. Our deep understanding of business cases, client portability requirements, and firm compatibility ensures long-term success.</p>
                            </div>
                        </div>
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Associate and Senior Associate Search</h4>
                                <p>We place high-performing associates in key practice areas, including Corporate M&A, Banking & Finance, Commercial Litigation, Real Estate, and Intellectual Property.</p>
                            </div>
                        </div>
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Boutique & Specialist Firms</h4>
                                <p>For specialized practices, we source niche legal talent capable of hitting the ground running and making a visible impact from day one.</p>
                            </div>
                        </div>
                    </div>

                    <div class="qc-btn-group flex flex-wrap gap-20 mt-50">
                        <a href="{{ route('jobs') }}" class="qc-btn-secondary-custom group inline-flex items-center gap-15">
                            <span>Explore Jobs</span>
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: In-House Legal Search (Full Width / 1 per row) -->
    <section class="lqd-section qc-x-section py-90 px-10vw lg:px-0" id="in-house" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="sub-title-column">
                        <span class="qc-section-kicker">Corporate & Financial</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">In-House Legal Search & General Counsel</h2>
                    </div>
                    <p class="qc-section-lead mt-20 mb-40 text-18 leading-1/6em text-gray-600">Building robust, strategic corporate legal departments for multi-nationals and high-growth businesses.</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="qc-editorial-copy mb-30">
                        <p>The role of in-house legal counsel has evolved into a key commercial driver. We recruit legal professionals who possess both exceptional legal acumen and the commercial mindset required to protect and scale businesses.</p>
                    </div>
                    <div class="london-feature-list">
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-building-user"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>General Counsel Appointments</h4>
                                <p>Sourcing senior legal leaders who serve as trusted advisors to executive boards, managing compliance, corporate governance, and complex transaction structures.</p>
                            </div>
                        </div>
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Legal Counsel & Commercial Managers</h4>
                                <p>Placing mid-to-senior level legal professionals across sectors such as Technology, Fintech, Media, Energy, and Infrastructure to manage everyday operations and contracts.</p>
                            </div>
                        </div>
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Regulatory & Compliance Specialists</h4>
                                <p>Strengthening corporate legal divisions with regulatory experts skilled at navigating the evolving UK and international compliance landscape.</p>
                            </div>
                        </div>
                    </div>

                    <div class="qc-btn-group flex flex-wrap gap-20 mt-50">
                        <a href="{{ route('contact') }}" class="qc-btn-primary group inline-flex items-center gap-15">
                            <span>Contact Us</span>
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Newly Qualified (NQ) Solicitor Development -->
    <section class="lqd-section qc-x-section py-90 px-10vw lg:px-0 qc-bg-light" id="nq-solicitors" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="sub-title-column">
                        <span class="qc-section-kicker">Early Career Excellence</span>
                        <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">NQ & Associate Solicitor Career Transitions</h2>
                    </div>
                    <p class="qc-section-lead mt-20 mb-40 text-18 leading-1/6em text-gray-600">Assisting newly qualified solicitors in mapping out their career trajectories in London's premier law firms.</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="qc-editorial-copy mb-30">
                        <p>Transitioning from a training contract to a qualified associate role is a critical career milestone. We provide NQ solicitors with realistic market insights, interview coaching, and access to exclusive roles that align with their long-term professional development goals.</p>
                    </div>
                    <div class="london-feature-list">
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Specialism Mapping</h4>
                                <p>Helping candidates evaluate market demand and potential career growth trajectories across key practice areas before finalizing their qualification choice.</p>
                            </div>
                        </div>
                        <div class="london-feature-item">
                            <div class="london-icon-circle">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div class="london-feature-content">
                                <h4>Market Positioning & CV Optimization</h4>
                                <p>Crafting professional portfolios that clearly showcase training seats, deal experience, and commercial capabilities to hiring partners.</p>
                            </div>
                        </div>
                    </div>

                    <div class="qc-btn-group flex flex-wrap gap-20 mt-50">
                        <a href="{{ route('jobs') }}" class="qc-btn-secondary-custom group inline-flex items-center gap-15">
                            <span>Explore Jobs</span>
                            <span class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section (Exactly matching home page style) -->
    <section class="lqd-section qc-x-section qc-home-faq flex items-center justify-center py-90 px-10vw lg:px-0" id="faqs" data-tooltip="FAQs" data-section-luminosity="light">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-5">
                    <div class="qc-faq-header pr-30 lg:pr-0 mb-40 lg:mb-0">
                        <div class="sub-title-column">
                            <span class="qc-section-kicker">FAQs</span>
                            <h2 class="ld-fh-element relative mb-0/35em text-50 leading-1/1em">London Legal Recruitment FAQs</h2>
                        </div>
                        <p class="qc-section-lead mt-20 text-18 leading-1/6em text-gray-600">Find answers to common questions about finding solicitor jobs, partner placements, and hiring legal talent in London.</p>
                    </div>
                </div>
                <div class="col col-12 col-lg-7">
                    <div class="qc-faq-list custom-faqs">
                        <details class="qc-faq-item" name="faq" open>
                            <summary class="qc-faq-summary">
                                <span>What sectors of the London legal market do you specialize in?</span>
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>We cover all major practice areas in London, including Corporate, Banking & Finance, Commercial litigation, Real Estate, Intellectual Property, and Technology. Our clients range from US firms and Magic/Silver Circle firms to prominent mid-tier firms and multi-national corporations seeking General Counsel.</p>
                            </div>
                        </details>
                        <details class="qc-faq-item" name="faq">
                            <summary class="qc-faq-summary">
                                <span>How do you handle confidentiality during a search?</span>
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>Confidentiality is our absolute priority. We operate discreetly, conducting initial discussions on an anonymous basis. We never submit a candidate's CV or profile to any firm or corporate employer without obtaining their explicit prior consent.</p>
                            </div>
                        </details>
                        <details class="qc-faq-item" name="faq">
                            <summary class="qc-faq-summary">
                                <span>Do you work with Newly Qualified (NQ) solicitors in London?</span>
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>Yes. We assist trainees throughout their qualification process, helping them secure associate solicitor jobs in London. We offer guidance on CV preparation, seat selection strategies, and mock interviews to ensure a smooth transition into practice.</p>
                            </div>
                        </details>
                        <details class="qc-faq-item" name="faq">
                            <summary class="qc-faq-summary">
                                <span>What is the process for executing a lateral partner move?</span>
                                <div class="faq-icon-wrap"><i class="fa-solid fa-chevron-down"></i></div>
                            </summary>
                            <div class="qc-faq-content">
                                <p>A partner lateral move is a detailed process that begins with mapping candidate goals against current market opportunities. We assist in preparing the business case, drafting the Business Plan, managing financial disclosures, and coordinating meetings to ensure structural and cultural alignment.</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.sections.get-in-touch')
@endsection

@section('script')
@endsection
