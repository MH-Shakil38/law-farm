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
                Request <span class="badge rounded-pill ms-2 badge-subtle-success">{{ entry_list(1)->count() + entry_list(0)->count() }}</span></span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::routeIs('clients.*') ? 'show' : '' }}" id="request">
        <li class="nav-item"><a class="nav-link" href="{{ route('clients.entry') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Request List<span class="badge rounded-pill ms-2 badge-subtle-success">{{ entry_list(1)->count() }}</span></span>
                </div>
            </a><!-- more inner pages--></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('clients.pending') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pending List<span class="badge rounded-pill ms-2 badge-subtle-success">{{ entry_list(0)->count() }}</span></span>
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



        @if (auth()->user()->hasRole('Super Admin'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.secrate') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Secrate List</span>
                    </div>
                </a>
            </li>
        @endif




    </ul>


    {{-- <a class="nav-link dropdown-indicator" href="#lawyer" role="button" data-bs-toggle="collapse" aria-expanded="true"
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


    </ul> --}}


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

    <a class="nav-link dropdown-indicator" href="#service" role="button" data-bs-toggle="collapse"
        aria-expanded="true" aria-controls="role">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
            class="fab fa-firefox"></span></span><span class="nav-link-text ps-1">Website</span>
        </div>
    </a>
    <ul class="nav collapse {{ Request::segment(1) === 'service' ? 'show' : '' }}" id="service">
        <li class="nav-item"><a class="nav-link" href="{{ route('service-categories.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Service</span>
                </div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('blogs.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Blog</span> </div>
            </a>
        </li>
    </ul>

    <a class="nav-link dropdown-indicator" href="#accounts" role="button" data-bs-toggle="collapse"
    aria-expanded="true" aria-controls="role">
    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                class="fas fa-dollar-sign"></span></span><span class="nav-link-text ps-1">Accounts</span>
    </div>
</a>
<ul class="nav collapse {{ Request::segment(1) === 'accounts' ? 'show' : '' }}" id="accounts">
    <li class="nav-item"><a class="nav-link" href="{{ route('incomes.index') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Income</span>
            </div>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('expenses.index') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Expense</span> </div>
        </a>
    </li>
</ul>
</li>


{{--
<li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('accounts.index') }}">
    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                class="fas fa-dollar-sign"></span></span><span class="nav-link-text ps-1">Accounts<span
                class="badge rounded-pill ms-2 badge-subtle-success"></span></span></div>
</a>
</li>

<li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('accounts.index') }}">
    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                class="fas fa-dollar-sign"></span></span><span class="nav-link-text ps-1">Expense<span
                class="badge rounded-pill ms-2 badge-subtle-success"></span></span></div>
</a>
</li> --}}

{{-- <li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('notify') }}">
    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                class="far fa-bell"></span></span><span class="nav-link-text ps-1">Expense<span
                class="badge rounded-pill ms-2 badge-subtle-success"></span></span></div>
</a>
</li> --}}

<li class="nav-item"><!-- parent pages--><a class="nav-link" href="{{ route('notify') }}">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="far fa-bell"></span></span><span class="nav-link-text ps-1">Notification<span
                    class="badge rounded-pill ms-2 badge-subtle-success">{{ notifications()->count() }}</span></span></div>
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
