<nav class="navbar navbar-light navbar-vertical navbar-expand-xl navbar-vibrant" style="display: none;">

    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('dashboard') }}">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('website/logo.webp') }}"
                    alt="" width="40" /><span class="font-sans-serif text-primary">PLB</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('dashboard') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>(<span style="font-size: 10px;">{{auth()->user()->user_type == 1 ? 'Admin' :( auth()->user()->user_type == 2 ? 'Employee' : 'Lawyer') }}</span>)</div>


                    </a>

                </li>
                <li class="nav-item"><!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    {{-- user  --}}
                    <a class="nav-link dropdown-indicator" href="#users" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="users">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-tie"></span></span><span class="nav-link-text ps-1">Employee</span>
                        </div>
                    </a>
                    <ul class="nav collapse {{ Request::routeIs('users.*') ? 'show' : '' }}" id="users">
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List</span>
                                </div>
                            </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.create') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create</span>
                                </div>
                            </a><!-- more inner pages--></li>


                    </ul>

                    <a class="nav-link dropdown-indicator" href="#lawyer" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="lawyer">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-graduate"></span></span><span class="nav-link-text ps-1">Lawyer</span>
                        </div>
                    </a>
                    <ul class="nav collapse {{ Request::routeIs('lawyer.*') ? 'show' : '' }}" id="lawyer">
                        <li class="nav-item"><a class="nav-link" href="{{ route('lawyer.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List</span>
                                </div>
                            </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('lawyer.create') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create</span>
                                </div>
                            </a><!-- more inner pages--></li>


                    </ul>


                    <a class="nav-link dropdown-indicator" href="#client" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="client">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-users"></span></span><span class="nav-link-text ps-1">Client</span>
                        </div>
                    </a>
                    <ul class="nav collapse {{ Request::routeIs('clients.*') ? 'show' : '' }}" id="client">
                        <li class="nav-item"><a class="nav-link" href="{{ route('clients.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List</span>
                                </div>
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('clients.create') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create</span>
                                </div>
                            </a></li>



                    </ul>

                    <a class="nav-link dropdown-indicator" href="#config" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="config">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-tools"></span></span><span class="nav-link-text ps-1">Config</span>
                        </div>
                    </a>
                    <ul class="nav collapse {{ Request::segment(1) === 'config' ? 'show' : '' }}" id="config">
                        <li class="nav-item"><a class="nav-link" href="{{ route('caseType.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Law
                                        Type</span>
                                </div>
                            </a><!-- more inner pages--></li>



                    </ul>
                </li>
                <li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('logs') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-code-branch"></span></span><span
                            class="nav-link-text ps-1">Activities</span></div>
                </a>

            </li>
            </ul>

        </div>
    </div>
</nav>
