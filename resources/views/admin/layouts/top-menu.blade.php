<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="{{ route('dashboard') }}">
        <div class="d-flex align-items-center"><img class="me-2" src="{{ asset('logo.png') }}" alt=""
                width="40" /><span class="font-sans-serif text-primary">PLB</span></div>
    </a>
    <ul class="navbar-nav align-items-center d-none d-lg-block">
        <li class="nav-item">
            <div class="search-box" data-list='{"valueNames":["title"]}'>
                {{-- <form class="position-relative search" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input" type="search" placeholder="Search..."
                        aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form> --}}
                <input type="text" id="clientSearch" class="form-control" placeholder="Search Clients...">
<div id="clientDropdown" class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100"></div>

                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                    data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                        aria-label="Close"></button></div>
                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                        @forelse (Clients() as $info)
                            <a class="dropdown-item fs-10 px-x1 py-1 hover-primary"
                                href="{{ route('clients.show', $info->id) }}">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                    <div class="fw-normal title">{{ $info->name }} <span
                                            class="fas fa-chevron-right mx-1 text-500 fs-11"
                                            data-fa-transform="shrink-2"></span> {{ $info->case_number }}
                                        <span class="fas fa-chevron-right mx-1 text-500 fs-11"
                                            data-fa-transform="shrink-2"></span> {{ $info->phone }}
                                    </div>

                                </div>

                            </a>
                        @empty
                        @endforelse

                        <hr class="text-200 dark__text-900" />

                    </div>
                    <div class="text-center mt-n3">
                        <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav navbar-nav-icons flex-row ">

        @forelse (activeuser() as $info)
            <li class="nav-item dropdown">
                <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl {{ check_activities($info) }}" title="{{ $info->name }}">
                        <img class="rounded-circle" src="{{ asset($info->image ?? '') }}"
                            onerror="this.src='{{ asset('thumbnail.png') }}';" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                    aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2 p-2" style="width: 250px">
                        <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                class="fas fa-crown me-1"></span><span>{{ $info->name }}</span> </a>
                                <table class="table table-borderless fs-10 fw-medium mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="p-1" style="width: 50%;">Last Online:</th>
                                            <td class="p-1 text-600" style="float: right;">{{ \Carbon\Carbon::parse($info->last_activity)->format('d M, h:m A') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%;">Login:</td>
                                            <td class="p-1 text-600" style="float: right;">{{ \Carbon\Carbon::parse($info->last_logedin)->format('d M, h:m A') }}</td>
                                        </tr>

                                        <tr>
                                            <td class="p-1" style="width: 35%;" >Mobile No:</td>
                                            <td class="p-1" style="float: right;"><a class="text-600 text-decoration-none"
                                                    href="tel:+01234567890 ">{{ $info->phone }} </a><span
                                                    class="badge rounded-pill badge-subtle-primary d-none d-md-inline-block ms-2">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </li>
        @empty
        @endforelse

    </ul>


    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        {{-- <li class="nav-item ps-2 pe-0">
            <div class="dropdown theme-control-dropdown"><a
                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                    href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7"
                        data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span
                        class="fas fa-moon fs-7" data-fa-transform="shrink-3"
                        data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                        data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                    aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                            class="dropdown-item d-flex align-items-center gap-2" type="button" value="light"
                            data-theme-control="theme"><span class="fas fa-sun"></span>Light<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                            class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark"
                            data-theme-control="theme"><span class="fas fa-moon"
                                data-fa-transform=""></span>Dark<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                            class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto"
                            data-theme-control="theme"><span class="fas fa-adjust"
                                data-fa-transform=""></span>Auto<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                    </div>
                </div>
            </div>
        </li> --}}



        {{-- <li class="nav-item d-none d-sm-block">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait "
                href="#settings-offcanvas" data-bs-toggle="offcanvas" href="#settings-offcanvas">
                <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
                    <div class="settings-popover"><span class="ripple"><span
                                class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                    class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                            fill="#2A7BE4"></path>
                                    </svg></span></span></span></div>
                </div>
            </a>
        </li> --}}
        <li class="nav-item dropdown">
            <a href="{{ route('notify') }}"
                class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification" role="button"><span class="fas fa-bell "
                    data-fa-transform="shrink-6" style="font-size: 33px;"></span> <span
                    class="notification-indicator-number  bg-danger rounded-circle">{{ notifications()->count() }}</span>
            </a>
            {{-- <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all
                                    as read</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs-10">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                            comment : "Hello world 😍"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">💬</span>Just
                                            now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                            <strong>Mia Khalifa's</strong> status
                                        </p>
                                        <span class="notification-time"><span
                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-title border-bottom">EARLIER</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                            in California. See today's weather.</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🌤️</span>1d</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/logos/oxford.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong>
                                            created an event : "Causal Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">✌️</span>1w</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                            join the group: United Nations International Children's Fund
                                        </p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🙋‍</span>2d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="app/social/notifications.html">View all</a></div>
                </div>
            </div> --}}
        </li>
        <li class="nav-item dropdown px-1">
            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                    viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                            <div class="row text-center gx-0 gy-0">
                                @forelse (activeuser() as $info)
                                    <div class="col-4">
                                        <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="pages/user/profile.html" target="_blank">
                                            <div class="avatar avatar-2xl {{ check_activities($info) }}">
                                                <img class="rounded-circle" src="{{ asset($info->image) }}"
                                                    onerror="this.src='{{ asset('thumbnail.png') }}';"
                                                    alt="">
                                            </div>
                                            <p class="mb-0 fw-medium text-800 text-truncate fs-11">{{ $info->name }}
                                            </p>
                                        </a>
                                    </div>
                                @empty
                                @endforelse


                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                        href="{{ route('active.user') }}">Show more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset(auth()->user()->image ?? '') }}"
                        onerror="this.src='{{ asset('thumbnail.png') }}';" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                            class="fas fa-crown me-1"></span><span>{{ auth()->user()->name }}</span> </a>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="#!">Set status</a> --}}
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile &amp;
                        account</a>
                    <a class="dropdown-item" href="{{ route('logs', ['user_id' => auth()->user()->id]) }}">Activity
                        log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item  notification-indicator-fill fa-icon-wait " href="#settings-offcanvas"
                        data-bs-toggle="offcanvas" href="#settings-offcanvas">Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                            class=" dropdown-item underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                    {{-- <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a> --}}
                </div>
            </div>
        </li>
    </ul>
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
    data-move-target="#navbarVerticalNav" data-navbar-top="combo">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="{{ route('dashboard') }}">
        <div class="d-flex align-items-center"><img class="me-2" src="{{ asset('website/logo.webp') }}"
                alt="" width="40" /><span class="font-sans-serif text-primary">PLB</span></div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="index.html">Default</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/lms.html">LMS<span
                                class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                            class="dropdown-item link-600 fw-medium"
                            href="dashboard/project-management.html">Management</a><a
                            class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a><a
                            class="dropdown-item link-600 fw-medium" href="dashboard/support-desk.html">Support
                            desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/calendar.html">Calendar</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/feed.html">Feed</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/activity-log.html">Activity log</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/notifications.html">Notifications</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/followers.html">Followers</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/table-view.html">Table view</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/card-view.html">Card view</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/contacts.html">Contacts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/contact-details.html">Contact
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/tickets-preview.html">Tickets
                                            preview</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/quick-links.html">Quick links</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/course-list.html">Course
                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/course-grid.html">Course
                                            grid</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/course-details.html">Course
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/create-a-course.html">Create a
                                            course</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/student-overview.html">Student
                                            overview</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/trainer-profile.html">Trainer
                                            profile</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/create-an-event.html">Create an
                                            event</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/event-detail.html">Event detail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/event-list.html">Event list</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/inbox.html">Inbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/email-detail.html">Email detail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/compose.html">Compose</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-list.html">Product
                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-grid.html">Product
                                            grid</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-details.html">Product
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/add-product.html">Add
                                            product</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/orders/order-list.html">Order
                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/orders/order-details.html">Order
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/customers.html">Customers</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/customer-details.html">Customer
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/shopping-cart.html">Shopping
                                            cart</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/checkout.html">Checkout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/billing.html">Billing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/invoice.html">Invoice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/confirm-mail.html">Confirm
                                            mail</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/reset-password.html">Reset
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/simple/lock-screen.html">Lock
                                            screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/confirm-mail.html">Confirm
                                            mail</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/reset-password.html">Reset
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/card/lock-screen.html">Lock
                                            screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/confirm-mail.html">Confirm
                                            mail</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/reset-password.html">Reset
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/split/lock-screen.html">Lock
                                            screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="demo/navbar-vertical.html">Navbar vertical</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="demo/navbar-top.html">Top
                                            nav</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="demo/navbar-double-top.html">Double top<span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium" href="demo/combo-nav.html">Combo
                                            nav</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/starter.html">Starter</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/landing.html">Landing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/user/profile.html">Profile</a>
                                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait "
                                            href="#settings-offcanvas" data-bs-toggle="offcanvas"
                                            href="#settings-offcanvas">Settings</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/pricing/pricing-default.html">Pricing
                                            default</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/errors/404.html">404</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/errors/500.html">500</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/miscellaneous/associations.html">Associations</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/miscellaneous/invite-people.html">Invite
                                            people</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/miscellaneous/privacy-policy.html">Privacy
                                            policy</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/faq/faq-basic.html">Faq basic</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq
                                            alt</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="pages/faq/faq-accordion.html">Faq accordion</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pages/authentication/wizard.html">Wizard</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="#authentication-modal"
                                            data-bs-toggle="modal">Modal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/accordion.html">Accordion</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/alerts.html">Alerts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/anchor.html">Anchor</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/animated-icons.html">Animated
                                            icons</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/background.html">Background</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/badges.html">Badges</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/bottom-bar.html">Bottom bar<span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/buttons.html">Buttons</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/calendar.html">Calendar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/cards.html">Cards</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/carousel/bootstrap.html">Bootstrap
                                            carousel</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-md-4 pt-md-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/carousel/swiper.html">Swiper</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/collapse.html">Collapse</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/cookie-notice.html">Cookie
                                            notice</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/countup.html">Countup</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/dropdowns.html">Dropdowns</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/jquery-components.html">Jquery<span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/list-group.html">List group</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/modals.html">Modals</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/navs.html">Navs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar
                                            vertical</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/top-navbar.html">Top
                                            nav</a></div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/double-top-navbar.html">Double
                                            top<span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/combo-navbar.html">Combo
                                            nav</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/offcanvas.html">Offcanvas</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/avatar.html">Avatar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/images.html">Images</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/figures.html">Figures</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/lightbox.html">Lightbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/progress-bar.html">Progress
                                            bar</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/placeholder.html">Placeholder</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pagination.html">Pagination</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/popovers.html">Popovers</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/scrollspy.html">Scrollspy</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/search.html">Search</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/sortable.html">Sortable</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/spinners.html">Spinners</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/timeline.html">Timeline</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/toasts.html">Toasts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/tooltips.html">Tooltips</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/treeview.html">Treeview</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/typed-text.html">Typed text</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/videos/embed.html">Embed</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/videos/plyr.html">Plyr</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/background.html">Background</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/borders.html">Borders</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/clearfix.html">Clearfix</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/colors.html">Colors</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/colored-links.html">Colored
                                            links</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/display.html">Display</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/flex.html">Flex</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/float.html">Float</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/focus-ring.html">Focus ring</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/grid.html">Grid</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/icon-link.html">Icon link</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/overlayscrollbar.html">Overlay
                                            scrollbar</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/position.html">Position</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/ratio.html">Ratio</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/spacing.html">Spacing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/sizing.html">Sizing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/stretched-link.html">Stretched
                                            link</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/text-truncation.html">Text
                                            truncation</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/typography.html">Typography</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/vertical-align.html">Vertical
                                            align</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/vertical-rule.html">Vertical
                                            rule</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/visibility.html">Visibility</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/basic-tables.html">Basic tables</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/advance-tables.html">Advance
                                            tables</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/bulk-select.html">Bulk select</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/chartjs.html">Chartjs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/d3js.html">D3js<span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                        <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/line-charts.html">Line
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/bar-charts.html">Bar
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/candlestick-charts.html">Candlestick
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/geo-map.html">Geo map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/scatter-charts.html">Scatter
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/pie-charts.html">Pie
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/gauge-charts.html">Gauge
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/radar-charts.html">Radar
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/heatmap-charts.html">Heatmap
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/how-to-use.html">How to
                                            use</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/form-control.html">Form
                                            control</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/input-group.html">Input
                                            group</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/select.html">Select</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/range.html">Range</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/advance-select.html">Advance
                                            select</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/date-picker.html">Date
                                            picker</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/editor.html">Editor</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/emoji-button.html">Emoji
                                            button</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/file-uploader.html">File
                                            uploader</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/input-mask.html">Input
                                            mask</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/range-slider.html">Range
                                            slider</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/floating-labels.html">Floating
                                            labels</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/validation.html">Validation</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column pt-xxl-1">
                                        <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/font-awesome.html">Font awesome</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/bootstrap-icons.html">Bootstrap
                                            icons</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/feather.html">Feather</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/material-icons.html">Material
                                            icons</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/maps/google-map.html">Google map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/maps/leaflet-map.html">Leaflet map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/configuration.html">Configuration</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/styling.html">Styling<span
                                class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/dark-mode.html">Dark mode</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design
                            file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        {{-- <li class="nav-item ps-2 pe-0">
            <div class="dropdown theme-control-dropdown"><a
                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                    href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7"
                        data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span
                        class="fas fa-moon fs-7" data-fa-transform="shrink-3"
                        data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                        data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                    aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                            class="dropdown-item d-flex align-items-center gap-2" type="button" value="light"
                            data-theme-control="theme"><span class="fas fa-sun"></span>Light<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                            class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark"
                            data-theme-control="theme"><span class="fas fa-moon"
                                data-fa-transform=""></span>Dark<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                            class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto"
                            data-theme-control="theme"><span class="fas fa-adjust"
                                data-fa-transform=""></span>Auto<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                    </div>
                </div>
            </div>
        </li> --}}
        <li class="nav-item d-none d-sm-block">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                    class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark
                                    all as read</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs-10">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                            comment : "Hello world 😍"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">💬</span>Just
                                            now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                            <strong>Mia Khalifa's</strong> status
                                        </p>
                                        <span class="notification-time"><span
                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-title border-bottom">EARLIER</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                            in California. See today's weather.</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🌤️</span>1d</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/logos/oxford.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong>
                                            created an event : "Causal Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">✌️</span>1w</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                            join the group: United Nations International Children's Fund
                                        </p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🙋‍</span>2d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="app/social/notifications.html">View all</a></div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown px-1">
            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                    viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                            <div class="row text-center gx-0 gy-0">
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="pages/user/profile.html" target="_blank">
                                        <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                src="assets/img/team/3.jpg" alt="" /></div>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="https://themewagon.com/" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/themewagon.png" alt=""
                                            width="40" height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Themewagon</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="https://mailbluster.com/" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/mailbluster.png" alt=""
                                            width="40" height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Mailbluster</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/google.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Google</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/spotify.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Spotify</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/steam.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Steam</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/github-light.png" alt=""
                                            width="40" height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Github</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/discord.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Discord</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/xbox.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            xbox</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/trello.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Kanban</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/hp.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp
                                        </p>
                                    </a></div>
                                <div class="col-12">
                                    <hr class="my-3 mx-n3 bg-200" />
                                </div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/linkedin.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Linkedin</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/twitter.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Twitter</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/facebook.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Facebook</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/instagram.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Instagram</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/pinterest.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Pinterest</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/slack.png" alt="" width="40"
                                            height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Slack</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                            src="assets/img/nav-icons/deviantart.png" alt=""
                                            width="40" height="40" />
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">
                                            Deviantart</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="app/events/event-detail.html" target="_blank">
                                        <div class="avatar avatar-2xl">
                                            <div class="avatar-name rounded-circle bg-primary-subtle text-primary">
                                                <span class="fs-7">E</span>
                                            </div>
                                        </div>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events
                                        </p>
                                    </a></div>
                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                        href="#!">Show more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset(auth()->user()->image) }}"
                        onerror="this.src='{{ asset('thumbnail.png') }}';" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="#!">Set status</a> --}}
                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp;
                        account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait "
                        href="#settings-offcanvas" data-bs-toggle="offcanvas"
                        href="#settings-offcanvas">Settings</a>
                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<script>
   $(document).ready(function () {
    let dropdown = $('#clientDropdown');
    let searchBox = $('#clientSearch');

    searchBox.on('keyup', function () {
        let query = $(this).val();

        if (query.length > 0) {
            $.ajax({
                url: "{{ route('clients.list') }}",
                type: "GET",
                data: { search: query },
                success: function (response) {
                    dropdown.empty();
                    if (response.length > 0) {
                        response.forEach(client => {
                            dropdown.append(`
                                <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="/clients/clients/${client.id}">
                                    <div class="d-flex align-items-center">
                                        <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                        <div class="fw-normal title">${client.name}
                                            <span class="fas fa-chevron-right mx-1 text-500 fs-11"></span> ${client.case_number}
                                            <span class="fas fa-chevron-right mx-1 text-500 fs-11"></span> ${client.phone}
                                        </div>
                                    </div>
                                </a>
                            `);
                        });
                        dropdown.show();
                    } else {
                        dropdown.append('<p class="fallback fw-bold fs-8 text-center">No Result Found.</p>');
                        dropdown.show();
                    }
                }
            });
        } else {
            dropdown.hide();
        }
    });

    // **Dropdown Hide when clicking outside**
    $(document).on('click', function (e) {
        if (!searchBox.is(e.target) && !dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
            dropdown.hide();
        }
    });

    // **Show Dropdown Again When Clicking Search Box**
    searchBox.on('focus', function () {
        if (dropdown.children().length > 0) {
            dropdown.show();
        }
    });

    // **Prevent dropdown from hiding when clicking inside it**
    dropdown.on('click', function (e) {
        e.stopPropagation();
    });
});

</script>
<style>
    #clientDropdown {
    display: none;
    position: absolute;
    z-index: 1000;
    width: 100%;
}

</style>
