<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">HELPING PLAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">

        <a class="nav-link" href="{{route('genratepin')}}">

            <i class="fas fa-fw fa-cog"></i>
            <span>Pin Genrate</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer_details.CustomerDetails') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Customer Details</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Pin History</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Help History</span></a>
    </li>

    <li class="nav-item">
 
        <a class="nav-link" href="{{route('helpswitch')}}">
 
            <i class="fas fa-fw fa-cog"></i>
            <span>Help Switch ON/OFF</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('forgotpassword.forgotpassword') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Forgot Password List</span></a>
    </li>





</ul>
<!-- End of Sidebar -->