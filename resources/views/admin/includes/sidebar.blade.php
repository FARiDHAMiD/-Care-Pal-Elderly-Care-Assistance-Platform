<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.home')}}">
        <div class="sidebar-brand-icon">
            <img width="30px" src="{{ url('/elder') }}/images/fav-icon.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Care Pal</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ isset($page_name) && $page_name == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Admins -->
    <li class="nav-item {{ isset($page_name) && $page_name == 'admins' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admins.index')}}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Website Admins</span></a>
    </li>

    <!-- Nav Item - Clients -->
    <li class="nav-item {{ isset($page_name) && $page_name == 'clients' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.clients')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Clients</span></a>
    </li>

    <!-- Nav Item - Caregivers -->
    <li class="nav-item {{ isset($page_name) && $page_name == 'caregivers' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('caregivers.index')}}">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Caregivers</span></a>
    </li>

    <!-- Nav Item - Caregivers -->
    <li class="nav-item {{ isset($page_name) && $page_name == 'services' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('services.index')}}">
            <i class="fas fa-fw fa-check"></i>
            <span>Services</span></a>
    </li>

    <!-- Nav Item - Caregivers -->
    <li class="nav-item {{ isset($page_name) && $page_name == 'jobs' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('jobs.index')}}">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Job Requests</span></a>
    </li>



    <li class="nav-item {{ isset($page_name) && $page_name == 'About_Company_social' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('AboutUs.index')}}">
            <i class="fas fa-fw fa-phone"></i>
            <span>About Us & Social</span></a>
    </li>

    <li class="nav-item {{ isset($page_name) && $page_name == 'FAQs' ? 'active' : '' }}">
        <a class="nav-link" href="{{route('faqs.index')}}">
            <i class="fas fa-fw fa-question-circle"></i>
            <span>FAQs</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>