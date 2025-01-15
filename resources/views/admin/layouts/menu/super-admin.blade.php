<li class="nav-item"><!-- label-->
    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
        <div class="col-auto navbar-vertical-label">App</div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider" />
        </div>
    </div>
    {{-- user  --}}

    <a class="nav-link dropdown-indicator" href="#users" role="button" data-bs-toggle="collapse" aria-expanded="true"
        aria-controls="users">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-tie"></span></span><span class="nav-link-text ps-1">Manage User</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::routeIs('users.*') ? 'show' : '' }}" id="users">
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Employe List</span>
                </div>
            </a><!-- more inner pages--></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('users.create') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Employe Create</span>
                </div>
            </a><!-- more inner pages--></li>

        <li class="nav-item"><a class="nav-link" href="{{ route('roles.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manage Role</span>
                </div>
            </a>
        </li>


    </ul>

    <a class="nav-link" href="{{ route('clients.entry') }}" role="button">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-tie"></span></span><span class="nav-link-text ps-1">Entry Client
                List({{ entry_list()->count() }})</span>
        </div>
    </a>

    <a class="nav-link dropdown-indicator" href="#lawyer" role="button" data-bs-toggle="collapse" aria-expanded="true"
        aria-controls="lawyer">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-graduate"></span></span><span class="nav-link-text ps-1">Lawyer</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::routeIs('lawyers.*') ? 'show' : '' }}" id="lawyer">
        <li class="nav-item"><a class="nav-link" href="{{ route('lawyers.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List</span>
                </div>
            </a><!-- more inner pages--></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('lawyers.create') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create</span>
                </div>
            </a><!-- more inner pages--></li>


    </ul>


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


        @if (auth()->user()->hasRole('Super Admin'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.secrate') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Secrate List</span>
                    </div>
                </a>
            </li>
        @endif




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

    {{-- <a class="nav-link dropdown-indicator" href="#role" role="button" data-bs-toggle="collapse"
        aria-expanded="true" aria-controls="role">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="far fa-check-square"></span></span><span class="nav-link-text ps-1">User Role</span>
        </div>
    </a> --}}
    {{-- <ul class="nav collapse {{ Request::segment(1) === 'roles' ? 'show' : '' }}" id="role">


        <li class="nav-item">
            <a class="nav-link" href="{{ route('caseType.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Role Permission</span> </div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('caseType.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">User Permission</span> </div>
            </a>
        </li>
    </ul> --}}


    <a class="nav-link dropdown-indicator" href="#report" role="button" data-bs-toggle="collapse"
        aria-expanded="true" aria-controls="role">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="far fa-clipboard"></span></span><span class="nav-link-text ps-1">Report</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::segment(1) === 'report' ? 'show' : '' }}" id="report">
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('caseType.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manage Role</span>
                </div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('caseType.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Role Permission</span> </div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('caseType.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">User Permission</span> </div>
            </a>
        </li> --}}



    </ul>
</li>

<li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('notify') }}">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="far fa-bell"></span></span><span class="nav-link-text ps-1">Notification(<span
                    class="   ">{{ notifications()->count() }}</span>)</span></div>
    </a>
</li>
<li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('email-setup.index') }}">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-mail-bulk"></span></span><span class="nav-link-text ps-1">Email Setup</span></div>
    </a>
</li>
{{-- <li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('sms-setup.index') }}">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-sms"></span></span><span class="nav-link-text ps-1">SMS Setup</span></div>
    </a>
</li>

<li class="nav-item"><!-- parent pages--><a class="nav-link" href="#">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-phone-volume"></span></span><span class="nav-link-text ps-1">IP Phone Setup</span>
        </div>
    </a>
</li> --}}


<li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('logs') }}">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Activities</span></div>
    </a>

</li>


<style>
    li.nav-item {
        font-size: 16px;
    }
</style>
