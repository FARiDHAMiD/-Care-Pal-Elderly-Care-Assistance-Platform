<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider"></div>
        <li class="nav-item dropdown no-arrow">
            <a href="{{route('care.index')}}" class="nav-link">Client Website</a>
        </li>
        <div class="topbar-divider"></div>
        @php
        $pending_job_requests = \App\Models\Job::where('status', 'open')->get();
        @endphp
        <a href="{{route('jobs.index')}}" class="text-nowrap">
            <li class="nav-item mt-4">
                Opened Job Requests <span class="badge
                    {{$pending_job_requests->count() > 0 ? 'badge-danger' : 'badge-secondary'}}
                      badge-counter">{{$pending_job_requests->count()}}</span>
            </li>
        </a>

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <div class="topbar-divider"></div>

        @if(Auth::check() && auth()->user()->hasRole('admin'))
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->first_name . ' ' .
                    auth()->user()->last_name }}</span>
                <img class="img-profile rounded-circle"
                    src="{{ empty(auth()->user()->getFirstMedia('profile_img')) ? asset('/website/img/avatar.png') : auth()->user()->getFirstMedia('profile_img')->getUrl('thumb-cropped') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('admin.logout')}}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
        @endif

    </ul>

</nav>