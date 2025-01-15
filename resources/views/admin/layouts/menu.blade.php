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
                                class="nav-link-text ps-1">Dashboard</span>(<span
                                style="font-size: 10px;">{{ auth()->user()->user_type == 1 ? 'Super Admin' : (auth()->user()->user_type == 2 ? 'Admin' : 'Lawyer') }}</span>)
                        </div>


                    </a>

                </li>

                {{-- extra menu --}}
                @include('admin.layouts.menu.menu1')

                {{-- main menu --}}
                @if (auth()->user()->hasRole('Super Admin'))
                    @include('admin.layouts.menu.super-admin')
                @elseif (auth()->user()->hasRole('Executive'))
                    @include('admin.layouts.menu.admin')
                @elseif (auth()->user()->hasRole('Employee'))
                    @include('admin.layouts.menu.lawyer')
                @endif

                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
                    @include('admin.layouts.menu.menu2')
                </nav>

                </li>
            </ul>

        </div>
    </div>
</nav>
