<header class="header-style1 menu_area-light">

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        <div class="top-search bg-primary">
            <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                <form class="search-form" action="https://lawyer.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="{{ url('/') }}" class="navbar-brand">

                                    <img  src="{{ asset('logo2.png') }}" alt="logo">
                                </a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- start menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li><a href="{{ url('/') }}">Home</a>
                                    {{-- <ul>
                                        <li><a href="{{asset("v1")}}/index-2.html">Home 01</a></li>
                                        <li><a href="{{asset("v1")}}/index-3.html">Home 02</a></li>
                                        <li><a href="{{asset("v1")}}/index-4.html">Home 03</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li><a href="{{asset("v1")}}/#!">Pages</a>
                                    <ul>
                                        <li><a href="{{asset("v1")}}/about.html">About Us</a></li>
                                        <li><a href="{{asset("v1")}}/our-history.html">Our History</a></li>
                                        <li><a href="{{asset("v1")}}/achievements.html">Achievements</a></li>
                                        <li>
                                            <a href="{{asset("v1")}}/#!">Our Attorneys</a>
                                            <ul>
                                                <li><a href="{{asset("v1")}}/our-attorneys.html">Our Attorneys</a></li>
                                                <li><a href="{{asset("v1")}}/attorney-details.html">Attorney Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{asset("v1")}}/#!">Additional Pages</a>
                                            <ul>
                                                <li><a href="{{asset("v1")}}/testimonial.html">Testimonial</a></li>
                                                <li><a href="{{asset("v1")}}/our-pricing.html">Our Pricing</a></li>
                                                <li><a href="{{asset("v1")}}/faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{asset("v1")}}/#!">Others</a>
                                            <ul>
                                                <li><a href="{{asset("v1")}}/coming-soon.html">Comingsoon</a></li>
                                                <li><a href="{{asset("v1")}}/404-page.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{asset("v1")}}/contact.html">Contact Us</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('service.details') }}">Services</a>
                                    {{-- <ul>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Business Law</a></li>
                                        <li><a href="#">Criminal Law</a></li>
                                        <li><a href="#">Divorce Law</a></li>
                                        <li><a href="#">Education Law</a></li>
                                        <li><a href="#">Family Law</a></li>
                                        <li><a href="#">Insurance Law</a></li>
                                    </ul> --}}
                                </li>




                                <li><a href="#blog">Blog</a>
                                    {{-- <ul>
                                        <li><a href="{{asset("v1")}}/case-study-3-col.html">Case Study 3 Col</a></li>
                                        <li><a href="{{asset("v1")}}/case-study-4-col.html">Case Study 4 Col</a></li>
                                        <li><a href="{{asset("v1")}}/case-study-details.html">Case Study Details</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="#about-us">About Us</a>
                                    {{-- <ul>
                                        <li><a href="{{asset("v1")}}/blog-grid.html">Blog Grid</a></li>
                                        <li><a href="{{asset("v1")}}/blog-list.html">Blog List</a></li>
                                        <li><a href="{{asset("v1")}}/blog-details.html">Blog Details</a></li>
                                    </ul> --}}
                                </li>

                                <li><a href="#oure-team">Our Team</a>
                                    {{-- <ul>
                                        <li><a href="{{asset("v1")}}/blog-grid.html">Blog Grid</a></li>
                                        <li><a href="{{asset("v1")}}/blog-list.html">Blog List</a></li>
                                        <li><a href="{{asset("v1")}}/blog-details.html">Blog Details</a></li>
                                    </ul> --}}
                                </li>

                                <li><a href="{{ route('contact') }}">Contact</a>
                                    {{-- <ul>
                                        <li><a href="{{asset("v1")}}/case-study-3-col.html">Case Study 3 Col</a></li>
                                        <li><a href="{{asset("v1")}}/case-study-4-col.html">Case Study 4 Col</a></li>
                                        <li><a href="{{asset("v1")}}/case-study-details.html">Case Study Details</a></li>
                                    </ul> --}}
                                </li>

                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                <ul>
                                    <li class="search"><a href="{{ route('contact') }}"><i class="fas fa-search"></i></a></li>
                                    <li class="d-none d-xl-inline-block"><a href="{{ route('contact') }}" class="butn md text-white">Free Consultation</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
