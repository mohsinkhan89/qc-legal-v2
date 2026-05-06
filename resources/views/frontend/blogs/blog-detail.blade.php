@extends('frontend/layouts/master')
@section('title')
	<title>{{ ucwords($blog->title) }}</title>
@endsection

@section('metas')
<meta name="author" content="{{ ucwords(config('app.name')) }}">
<meta name="description" content="{{ $blog->meta_description }}">
<meta property="og:title" content="{{ $blog->title }}">
<meta property="og:description" content="{{ $blog->meta_description }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.example.com/path-to-your-social-image.jpg">
<meta property="og:site_name" content="{{ ucwords(config('app.name')) }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $blog->title }}">
<meta name="twitter:description" content="{{ $blog->meta_description }}">
<meta name="twitter:image" content="https://www.example.com/path-to-your-social-image.jpg">
<meta name="twitter:site" content="{{ setting('site.twiiterlink') }}">
@endsection

@section('content')
    <section class="lqd-sectoin set-content blog-detail">
        @if ($blog->is_infographic == 1)
            <div class="container">
                <div class="qc-infographic-image-container qc-w-100 py-50">
                    <div class="qc-infographic-title">
                        <h3 class="text-24 text-black text-center mb-10">{{ $blog->title }}</h3>
                    </div>
                    <div class="qc-infographic-content">
                        <div class="text-black text-center mb-20">{!! $blog->description !!}</div>
                    </div>
                    <div class="qc-infographic-image">
                        <img src="{{ url('storage') }}/{{ $blog->image }}" alt="{{ $blog->title }}" class="img-fluid">
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="w-full flex flex-col py-50 pl-10 pr-50 module-last lg:w-full lg:order-first set-blog-img-pad">
                        <div class="w-full relative">
                            <div class="lqd-fb pos-rel lqd-fb-style-1 lqd-fb-style-1-3 lqd-fb-content-overlay lqd-fb-zoom-img-onhover border-radius-4 overflow-hidden h-pt-60 mb-65 set-blog-detail" data-inview="true">
                                <div class="lqd-fb-inner lqd-overlay">
                                    <div class="lqd-fb-img lqd-overlay overflow-hidden">
                                        <figure class="w-full h-full"><img class="w-full h-full objfit-cover objpos-center" src="{{ url('storage') }}/{{ $blog->image }}" alt="portfolio detail" /></figure>
                                    </div>
                                    <div class="lqd-fb-content lqd-overlay d-flex items-end">
                                        <div class="lqd-fb-bg lqd-overlay bg-transparent" style="background-image: linear-gradient(180deg, #181b3100 0%, #181b31 100%);"></div>
                                        <div class="lqd-fb-hover-overlay lqd-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! $blog->description !!}
                    </div>
                </div>
            </div>
        @endif
    </section>
    @section('script')
    @endsection
@endsection
