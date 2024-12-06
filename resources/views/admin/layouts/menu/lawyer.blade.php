<div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
            <li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-chart-pie"></span></span><span
                            class="nav-link-text ps-1">Dashboard</span>(<span
                            style="font-size: 10px;">{{ auth()->user()->user_type == 1 ? 'Admin' : (auth()->user()->user_type == 2 ? 'Employee' : 'Lawyer') }}</span>)
                    </div>


                </a>

            </li>
            <li class="nav-item"><!-- label-->
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>





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
