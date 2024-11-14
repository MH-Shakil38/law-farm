<nav class="navbar navbar-light navbar-vertical navbar-expand-xl navbar-vibrant" style="display: none;">

    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="assets/img/icons/spot-illustrations/falcon.png" alt=""
                    width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item"><!-- parent pages--><a class="nav-link"
                        href="{{ url('/') }}" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span></div>
                    </a>

                </li>
                <li class="nav-item"><!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link dropdown-indicator" href="#users"
                        role="button" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="users">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-users"></span></span><span
                                class="nav-link-text ps-1">Employee</span></div>
                    </a>
                    <ul class="nav collapse" id="users">
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">
                            <div class="d-flex align-items-center"><span
                                    class="nav-link-text ps-1">List</span></div>
                        </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.create') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Create</span></div>
                            </a><!-- more inner pages--></li>

                            
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    </nav>
