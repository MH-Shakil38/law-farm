<li class="nav-item"><!-- label-->
    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
        <div class="col-auto navbar-vertical-label">App</div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider" />
        </div>
    </div>
    {{-- user  --}}





    <a class="nav-link dropdown-indicator" href="#request" role="button" data-bs-toggle="collapse" aria-expanded="true"
        aria-controls="lawyer">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-graduate"></span></span><span class="nav-link-text ps-1">Client
                Request({{ entry_list()->count() }})</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::routeIs('clients.*') ? 'show' : '' }}" id="request">
        <li class="nav-item"><a class="nav-link" href="{{ route('clients.entry') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Request List</span>
                </div>
            </a><!-- more inner pages--></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('clients.pending') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pending List</span>
                </div>
            </a><!-- more inner pages--></li>


    </ul>

    {{-- <a class="nav-link dropdown-indicator" href="#lawyer" role="button" data-bs-toggle="collapse" aria-expanded="true"
        aria-controls="lawyer">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-graduate"></span></span><span class="nav-link-text ps-1">Lawyer</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::routeIs('lawyers.*') ? 'show' : '' }}" id="lawyer">
        <li class="nav-item"><a class="nav-link" href="{{ route('lawyers.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lawyer List</span>
                </div>
            </a><!-- more inner pages--></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('lawyers.create') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lawyer Create</span>
                </div>
            </a><!-- more inner pages--></li>


    </ul> --}}


    <a class="nav-link dropdown-indicator" href="#client" role="button" data-bs-toggle="collapse" aria-expanded="true"
        aria-controls="client">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-users"></span></span><span class="nav-link-text ps-1">Client</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::routeIs('clients.*') ? 'show' : '' }}" id="client">

        <li class="nav-item"><a class="nav-link" href="{{ route('clients.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Client List</span>
                </div>
            </a></li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.create') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Client Create</span>
                </div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.pending') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pending List</span>
                </div>
            </a>
        </li>
    </ul>

    <a class="nav-link dropdown-indicator" href="#config" role="button" data-bs-toggle="collapse" aria-expanded="true"
        aria-controls="config">
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


<style>
    li.nav-item {
        font-size: 16px;
    }
</style>
