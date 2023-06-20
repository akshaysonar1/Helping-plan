<style>
     .main-sidebar #sidebarToggleTop{
        display: none;
     }
    @media(max-width:567px) {
        .main-sidebar {
            position: fixed !important;
            z-index: 1;
        }

        .main-sidebar #sidebarToggleTop{
            display: block;
            padding-left: 1.75rem;
            padding-top: 0.875rem;
        }
    }
</style>
<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion main-sidebar" id="accordionSidebar">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars" style="color:#ffffff;"></i>
    </button>
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
        <a class="nav-link" href="{{ route('home') }}">
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

        <a class="nav-link" href="{{ route('genratepin') }}">
            <i class="fas fa-key" style="color: #ffffff;"></i>
            <span>Pin Generate</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer_details.CustomerDetails') }}">
            <i class="fas fa-user" style="color: #ffffff;"></i>
            <span>Customer Details</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pinhistory') }}">
            <i class="fas fa-fw fa-table" style="color: #ffffff;"></i>
            <span>Pin History</span></a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-hands-helping" style="color: #ffffff;"></i>
            <span>Help History</span></a>
    </li> -->

    {{-- <li class="nav-item">

        <a class="nav-link" href="{{ route('helpswitch') }}">

            <i class="fas fa-fw fa-cog" style="color: #ffffff;"></i>
            <span>Help Switch ON/OFF</span></a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('forgotpassword.forgotpassword') }}">
            <i class="fas fa-unlock-alt" style="color: #ffffff;"></i>
            <span>Forgot Password List</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer_details.contactdetails') }}">
            <i class="fas fa-info-circle" style="color: #ffffff;"></i>
            <span>Contact Details</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('UsersDetails') }}">
            <i class="fas fa-user" style="color: #ffffff;"></i>
            <span>Users Details</span></a>
    </li>





</ul>
<!-- End of Sidebar -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>