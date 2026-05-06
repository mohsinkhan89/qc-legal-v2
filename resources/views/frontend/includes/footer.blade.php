<footer class="main-footer pt-90 pb-30 bg-black text-white-50" id="footer">
    <section class="lqd-section footer-menu">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12 col-lg-4 mb-30">
                <figure class="mb-30 mw-300px relative">
                    <img src="{{ url('frontend/assets/images/logo/logo-white-golden-v2.png') }}"  style="width: 75%;" alt="QC Legal">
                    <div class="est-badge">Est. 2004</div>
                </figure>
                <p class="ld-fh-element relative mb-2em text-14 leading-1/8em">QC Legal is a market leader in legal recruitment. <br class="d-none d-lg-block"> We bring decades of market insight and experience working with Managing Partners, Board Members, Senior Leadership Teams and Heads of Department.</p>
                <div class="ld-sf ld-sf--input-solid mdset-newsletter-input ld-sf--button-bordered ld-sf--button-eql ld-sf--size-sm ld-sf--circle ld-sf--button-show ld-sf--button-inline relative mb-2em">
                    <label class="qc-fw-600 mb-1em mb-0-important">Subscribe to our newsletter</label>
                    <form class="ld_subscribe_form ld_sf_form" method="post" action="#">
                        <p class="ld_sf_paragraph mt-10">
                            <input type="email" class="ld_sf_text ld_sf_email w-full border-none qc-bg-dark text-gray-400" name="email" placeholder="Enter your email">
                        </p>
                        <button type="submit" class="ld_sf_submit flex items-center justify-center qc-bg-secondary-important border-white-20 text-white mt-10">
                            <span class="submit-text hidden sm:block">Subscribe</span>
                            <span class="submit-icon">
                                <i class="fa-solid fa-paper-plane icon-md-arrow-forward"></i>
                            </span>
                            <span class="ld-sf-spinner absolute">
                                <span>Sending</span>
                            </span>
                        </button>
                    </form>
                    <div class="ld_sf_response"></div>
                </div>
                </div>
                <div class="col col-12 col-md-7 col-lg-4 col-xl-3 offset-xl-1 mb-30">
                <div class="relative flex flex-wrap -mx-15 qc-footer-links">
                    <div class="w-50percent flex flex-col px-15">
                    <h3 class="ld-fh-element relative mb-15 text-14 text-white">Quick Links</h3>
                    <div class="lqd-fancy-menu lqd-custom-menu lqd-menu-td-none">
                        <ul class="reset-ul link-14 leading-1/5em link-white-50">
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ url('home') }}" rel="home">Home</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('about')}}">About Us</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('blogs') }}">Knowledge Hub</a>
                            </li>
                            <li class="inline-flex w-full relative items-center">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="w-50percent flex flex-col px-15">
                    <h3 class="ld-fh-element relative mb-15 text-14 text-white">Job Search</h3>
                    <div class="lqd-fancy-menu lqd-custom-menu lqd-menu-td-none">
                        <ul class="reset-ul link-14 leading-1/5em link-white-50">
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/birmingham">Birmingham</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/edinburgh">Edinburgh</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/glasgow">Glasgow</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/london">London</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/liverpool">Liverpool</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/manchester">Manchester</a>
                            </li>
                            <li class="inline-flex w-full relative items-center mb-10">
                                <a href="{{ route('jobs') }}/all/leeds">Leeds</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col col-12 col-md-5 col-lg-4 col-xl-3 offset-xl-1 flex flex-col mb-30">
                    <h3 class="ld-fh-element relative mb-15 text-14 text-white">Get In Touch</h3>
                    @if (setting('site.primary-phone'))
                        <p class="ld-fh-element relative mb-0/15em text-14">Call</p>
                        {{-- <a href="tel:{{ setting('site.primary-phone') }}" class="ld-fh-element relative mb-0/5em text-18 text-white">{{ setting('site.primary-phone') }}</a> --}}
                        {{-- <a href="tel:{{ setting('site.primary-phone') }}" class="ld-fh-element relative mb-0/5em text-16 text-white">{{ setting('site.primary-phone') }}</a> --}}
                        <li class="inline-flex w-full relative items-center mb-10">
                            <a href="tel:{{ setting('site.primary-phone') }}" class="qc-text-secondary text-14"> {{ setting('site.primary-phone') }}</a>
                        </li>
                    @endif
                    <div class="ld-empty-space w-full relative h-10"></div>
                    @if (setting('site.primary-email'))
                        <p class="ld-fh-element relative mb-0/15em text-14" >Email</p>
                        {{-- <p class="ld-fh-element relative mb-0/5em text-16 text-white">
                            <a href="mailto:{{ setting('site.primary-email') }}" class="__cf_email__ text-white">{{ setting('site.primary-email') }}</a>
                        </p> --}}
                        <li class="inline-flex w-full relative items-center mb-10">
                            <a href="tel:{{ setting('site.primary-email') }}" class="qc-text-secondary text-14">{{ setting('site.primary-email') }}</a>
                        </li>
                    @endif
                    <div class="ld-empty-space w-full relative h-10"></div>
                    <p class="ld-fh-element relative mb-0/15em text-14">Stay Connected</p>
                    <div class="qc-social-container">
                        @if (setting('site.facebook'))
                            <a href="{{ setting('site.facebook') }}">
                                <div class="icon">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </div>
                            </a>
                        @endif
                        @if (setting('site.instagram'))
                            <a href="{{ setting('site.instagram') }}">
                                <div class="icon">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </a>
                        @endif
                        @if (setting('site.linkedin'))
                            <a href="{{ setting('site.linkedin') }}">
                                <div class="icon">
                                    <i class="fa-brands fa-linkedin"></i>
                                </div>
                            </a>
                        @endif
                        {{-- @if (setting('site.x-twitter'))
                            <a href="{{ setting('site.x-twitter') }}">
                                <div class="icon">
                                    <i class="fa-brands fa-square-x-twitter"></i>
                                </div>
                            </a>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section footer-info mt-30">
        <div class="container md-set">
            <div class="row">
                <div class="col col-12">
                    <div class="w-full relative border-top border-white-20 mb-40"></div>
                </div>
                <div class="col col-12 col-md-12 col-lg-6 mb-20 md:text-center mlarge-text-center">
                    <p class="ld-fh-element relative mb-2em text-14 leading-1/8em mlarge-mb-0">&copy; {{ date('Y') }} QC Legal - All rights reserved</p>
                </div>
                <div class="col col-12 col-md-12 col-lg-6 mb-20">
                    <div class="lqd-fancy-menu lqd-menu-td-none">
                        <div class="qc-w-100 d-flex justify-end md:justify-center md:text-center mlarge-justify-center mlarge-text-center">
                            <p class="ld-fh-element relative mb-2em text-14 leading-1/8em">Designed by <a href="https://www.ssftech.co.uk/" target="_blank" class="qc-fw-600 text-white">SSF Tech</a> - Under the Provision of <a href="https://ssfgroup.co.uk/" target="_blank" class="qc-fw-600 text-white">SSF Group</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
