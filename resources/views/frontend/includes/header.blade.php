<header class="main-header main-header-overlay qc-custom-header jshndle-mainpage-header jshndle-subpage-header sticky-active" data-sticky-header="true" data-sticky-values-measured="false" data-sticky-options='{"disableOnMobile":true,"dynamicColors":true}'>
    <section class="lqd-head-sec-wrap pos-rel md:hidden">
        <div class="lqd-head-sec container-fluid flex items-stretch p-0">
            <div class="col lqd-head-col">
                <div class="header-module module-logo no-rotate navbar-brand-plain py-10">
                <a class="navbar-brand" href="{{ route('home') }}" rel="home">
                    <span class="navbar-brand-inner navbar-brand-inner d-flex align-items-center justify-content-start">
                    {{-- <img class="logo-light" src="{{ url('frontend/assets/images/logo/logo-color.png') }}" style="width: 60%;" alt="Hub Creater Theme"> --}}
                        <img class="logo-default" src="{{ url('frontend/assets/images/logo/logo-white-golden-v2.png') }}" alt="Hub Creater Theme">
                    </span>
                </a>
                </div>
            </div>
            <div class="col lqd-head-col">
                <div class="header-module module-primary-nav static flex-col">
                <div class="navbar-collapse lqd-submenu-default-style h-auto" id="main-header-collapse" aria-expanded="false" role="navigation">
                    <ul id="primary-nav" class="main-nav lqd-menu-counter-right main-nav-hover-fade-inactive nav reset-ul flex items-stretch link-15 link-medium link-white-80" data-submenu-options='{"toggleType":"fade","handler":"mouse-in-out"}' data-localscroll="true" data-localscroll-options='{ "itemsSelector" : "> li > a"}'>
                        {{-- <li class="qc-subnav-parent">
                            <a href="{{ route('about') }}">About Us <i class="fa-solid fa-chevron-down icon-arrow"></i></a>

                            <ul class="qc-subnav">
                                <li>
                                    <a href="{{ route('about') }}#ourmission">Our Mission</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}#ourvalue">Our Values</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a class="check-page {{ request()->routeIs('about') ? 'page-active' : '' }}" href="{{ route('about') }}">About Us</a>
                        </li>
                        <div class="nav-seperator">
                            <div class="line"></div>
                        </div>
                        <li>
                            <a class="check-page {{ request()->routeIs('jobs') ? 'page-active' : '' }}" href="{{ route('jobs') }}">Latest Jobs</a>
                        </li>
                        <div class="nav-seperator">
                            <div class="line"></div>
                        </div>
                        @if(count($blog_categories_active) > 1)
                            <li class="qc-subnav-parent">
                                <a class="check-page {{ request()->routeIs('blogs') || request()->routeIs('categoryBlogs') ? 'page-active' : '' }}" href="javascript:void(0);">Knowledge Hub <i class="fa-solid fa-chevron-down icon-arrow"></i></a>

                                <ul class="qc-subnav">
                                    @foreach($blog_categories_active as $cat)
                                        <li>
                                            <a href="{{ route('categoryBlogs', ['category_slug' => $cat->slug]) }}">{{ $cat->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a class="check-page {{ request()->routeIs('blogs') || request()->routeIs('categoryBlogs') ? 'page-active' : '' }}" href="{{ route('blogs') }}">Knowledge Hub</a>
                            </li>
                        @endif
                        <div class="nav-seperator">
                            <div class="line"></div>
                        </div>
                        <li>
                            <a class="check-page {{ request()->routeIs('contact') ? 'page-active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            {{-- <div class="col lqd-head-col justify-end lg:hidden">
                <div class="header-module module-button flex-col items-end py-10">
                    <a href="{{ route('jobs') }}" class="btn btn-solid btn-md btn-default uppercase btn-hover-txt-liquid-y btn-bordered border-thick btn-has-label border-2 rounded-100 text-12 uppercase font-bold tracking-0/1em leading-1/5em el-btn header-action-btn">
                        <span class="btn-txt" data-text="Buy Hub" data-transition-delay="true" data-delay-options='{"elements": ".lqd-chars", "delayType": "animation", "startDelay": 0, "delayBetween": 32.5}' data-split-text="true" data-split-options='{"type": "chars, words"}'>Start Legal Jobs Search</span>
                    </a>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="lqd-mobile-sec">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch">
        <div class="lqd-mobile-modules-container"></div>
        <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end p-0" data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav" aria-expanded="false" data-bs-toggle-options='{ "changeClassnames": {"html": "mobile-nav-activated"} }'>
            <span class="sr-only">Toggle navigation</span>
            <span class="bars inline-block relative z-1">
            <span class="bars-inner flex flex-col w-full h-full">
                <span class="bar inline-block"></span>
                <span class="bar inline-block"></span>
                <span class="bar inline-block"></span>
            </span>
            </span>
        </button>
        <a class="navbar-brand flex justify-start" href="{{ route('home') }}">
            <span class="navbar-brand-inner">
            <img class="logo-default" src="{{ url('frontend/assets/images/logo/logo-white-golden-v2.png') }}" alt="Hub Creater Theme">
            </span>
        </a>
        </div>
        <div class="lqd-mobile-sec-nav">
            <div class="mobile-navbar-collapse navbar-collapse collapse w-full bg-white" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                <ul id="mobile-primary-nav" class="lqd-mobile-main-nav main-nav nav reset-ul text-black" data-localscroll="true" data-localscroll-options='{ "itemsSelector" : "> li > a"}'>
                    {{-- <div class="accordion accordion-md accordion-title-underlined w-full nav-accordian" id="lqd-about-items" role="tablist" aria-multiselectable="true">
                        <div class="accordion-item panel">
                            <div class="accordion-heading flex justify-between" role="tab" id="lqd-heading-1" data-id="lqd-about-item-1">
                                <a href="{{ route('about') }}" class="text-dark">About Us</a>
                                <a class="collapsed text-dark" data-bs-toggle="collapse" data-bs-parent="#lqd-about-items" href="#lqd-about-item-1" aria-expanded="false" aria-controls="lqd-about-item-1">
                                    <span class="accordion-expander">
                                        <i class="fa-solid fa-plus icon-ion-ios-remove"></i>
                                        <i class="fa-solid fa-minus icon-ion-ios-add"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    <li>
                        <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('jobs') }}">Latest Jobs</a>
                    </li>
                    {{-- @php
                        return $blog_categories_active;
                    @endphp --}}
                    @if(count($blog_categories_active) > 1)
                        <li>
                            <div class="accordion accordion-md accordion-title-underlined w-full nav-accordian" id="lqd-blog-items" role="tablist" aria-multiselectable="true">
                                <div class="accordion-item panel">
                                    <div class="accordion-heading flex justify-between" role="tab" id="lqd-heading-blogs" data-id="lqd-blog-item-1">
                                        <a href="{{ route('blogs') }}" class="text-dark">Knowledge Hub </a>
                                        <a class="collapsed text-dark" data-bs-toggle="collapse" data-bs-parent="#lqd-blog-items" href="#lqd-blog-item-1" aria-expanded="false" aria-controls="lqd-blog-item-1">
                                            <span class="accordion-expander">
                                                <i class="fa-solid fa-plus icon-ion-ios-remove"></i>
                                                <i class="fa-solid fa-minus icon-ion-ios-add"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="lqd-blog-item-1" class="accordion-collapse collapse" role="tabpanel" aria-labelledby="lqd-heading-blogs">
                                        <div class="accordion-content">
                                            <ul class="reset-ul">
                                                @foreach($blog_categories_active as $cat)
                                                    <li class="py-2">
                                                        <a href="{{ route('categoryBlogs', ['category_slug' => $cat->slug]) }}" class="text-dark">{{ $cat->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('blogs') }}">Knowledge Hub</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</header>
