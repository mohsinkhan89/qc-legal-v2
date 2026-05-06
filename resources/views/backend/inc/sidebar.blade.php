@php
$page  = explode("/", $_SERVER['REQUEST_URI'])[2];
@endphp
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <span class="brand-logo">
                        <img width="100%" src="{{ url('frontend/assets/images/logo/logo-color.png') }}">
                    </span>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item @if($page == "home") active @endif">
                <a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i class="fa-solid fa-home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
            </li>
            <li class=" nav-item @if($page == "jobs") active @endif">
                <a class="d-flex ali gn-items-center" href="{{ route('backendJobs') }}"><i class="fa-solid fa-certificate"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Jobs</span></a>
            </li>
            <li class=" nav-item @if($page == "job-filters") active @endif">
                <a class="d-flex align-items-center" href="{{ route('backendJobFilters') }}"><i class="fa-solid fa-filter"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Job Filters</span></a>
            </li>
            <li class=" nav-item @if($page == "keywords") active @endif">
                <a class="d-flex align-items-center" href="{{ route('backendJobKeywords') }}"><i class="fa-solid fa-tags"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Job Metas Pages</span></a>
            </li>
            <li class=" nav-item @if($page == "candidates") active @endif">
                <a class="d-flex ali gn-items-center" href="{{ route('backendCandidates') }}"><i class="fa-solid fa-user-tie"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Candidates</span></a>
            </li>
            <li class=" nav-item @if($page == "candidates-status") active @endif">
                <a class="d-flex ali gn-items-center" href="{{ route('backendCandidateStatus') }}"><i class="fa-solid fa-clipboard-user"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Candidate Status</span></a>
            </li>
            <li class=" nav-item @if($page == "contacts") active @endif">
                <a class="d-flex ali gn-items-center" href="{{ route('backendContacts') }}"><i class="fa-solid fa-envelope"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Enquiries</span></a>
            </li>
            <li class=" nav-item @if($page == "blogs") active @endif">
                <a class="d-flex align-items-center" href="{{ route('backendBlogs') }}"><i class="fa-solid fa-pen"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Blogs</span></a>
            </li>
            <li class=" nav-item @if($page == "blog-categories") active @endif">
                <a class="d-flex align-items-center" href="{{ route('backendBlogCategories') }}"><i class="fa-solid fa-layer-group"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Blog Categories</span></a>
            </li>
            {{-- <li class=" nav-item @if($page == "infographics") active @endif">
                <a class="d-flex ali gn-items-center" href="{{ route('backendInfographics') }}"><i class="fa-solid fa-pen-paintbrush"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Infographics</span></a>
            </li> --}}
            <li class=" nav-item @if($page == "partners") active @endif">
                <a class="d-flex align-items-center" href="{{ route('backendPartners') }}"><i class="fa-solid fa-users"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Partners</span></a>
            </li>
            <li class=" nav-item @if($page == "reviews") active @endif">
                <a class="d-flex ali gn-items-center" href="{{ route('backendReviews') }}"><i class="fa-solid fa-star"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Reviews</span></a>
            </li>
        </ul>
    </div>
</div>
