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

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                        <li><a class="dropdown-item" href="{{ route('service.details') }}">Our Services</a></li>
                                        @forelse (service_menu() as $service)
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('service.details',$service->id) }}">{{ $service->name }}</a>
                                            @if ($service->child->count() > 0)
                                            <ul class="dropdown-menu">
                                                {{-- <li><a class="dropdown-item" href="{{ route('service.details',$service->id) }}">{{ $service->name }}</a></li> --}}

                                                @forelse ($service->child as $info)

                                                <li><a class="dropdown-item" href="{{ route('service.details',$info->id) }}">{{ $info->name }}</a></li>
                                                @empty
                                                @endforelse
                                            </ul>
                                            @endif

                                        </li>
                                        @empty

                                        @endforelse

                                    </ul>
                                </li>






                                <li><a href="#about-us">About Us</a> </li>

                                <li><a href="#oure-team">Our Team</a>

                                </li>

                                <li><a href="{{ route('contact') }}">Contact</a>

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
