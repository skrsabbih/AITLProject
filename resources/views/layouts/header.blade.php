<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="description" content="rBilling" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{ asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/chosen.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="{{ asset('assets')}}/fonts/font.css" rel="stylesheet" type="text/css">
    <!--Beyond styles-->
    <link href="{{ asset('assets')}}/css/beyond.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/typicons.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets')}}/css/ra.css" rel="stylesheet" />
    <script src="{{ asset('assets')}}/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->

<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="{{ asset('assets')}}/img/logo_r.png" alt="">
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="{{ asset('assets/images/profile.png') }}">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>Eng Kazi Anwar Hossain</span></span></h2>
                                    </section>
                                </a>
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-money bg-purple white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title"><strong> My Profile </strong></span>
                                                    <span class="description">User Profile</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-usd purple"></i>
                                                    <span class="description">Profile</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-key bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title"><strong>Change password</strong></span>
                                                    <span class="description">User Password</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-key azure"></i>
                                                    <span class="description">password</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="setting">
                            <a title="Logout" href="{{ route('logout.link') }}">
                                <i class="icon glyphicon glyphicon-log-out"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li class="{{ request()->is('dashboard') ? 'active open' : '' }}">
                        <a href="{{ url('dashboard') }}">
                            <i class="menu-icon glyphicon glyphicon-home blue"></i>
                            <span class="menu-text uppercase fw-bold"> Dashboard </span>
                        </a>
                    </li>
                    <!--Configuration-->
                    <!-- Configuration -->
                    <li
                        class="{{ request()->is('organisation/locations*') || request()->is('organisation/departments*') || request()->is('organisation/designations*') || request()->is('organisation/activities*') || request()->is('organisation/accessRules*') ? 'active open' : '' }}">
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-cog blue"></i>
                            <span class="menu-text"> CONFIGURATION</span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">

                            {{-- Organization Profile (commented out as original) --}}
                            {{--
                            <li class="{{ request()->is('organization/organizations*') ? 'active' : '' }}">
                                <a href="{{ url('organization/organizations') }}">
                                    <span class="menu-text">
                                        <i class="fa fa-folder-open darkorange"></i> ORGANIZATIONS
                                    </span>
                                </a>
                            </li>
                            --}}

                            <li class="{{ request()->is('organisation/locations_list') ? 'active' : '' }}">
                                <a href="{{ url('organisation/locations_list') }}">
                                    <span class="menu-text">
                                        <i class="fa fa-map-marker darkorange"></i> Locations
                                    </span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('organisation.department_list') ? 'active' : '' }}">
                                <a href="{{ route('organisation.department_list') }}">
                                    <span class="menu-text">
                                        <i class="fa fa-folder-open darkorange"></i> Departments
                                    </span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('organisation.designation_list') ? 'active' : '' }}">
                                <a href="{{ route('organisation.designation_list') }}">
                                    <span class="menu-text">
                                        <i class="fa fa-folder-open darkorange"></i> Designations
                                    </span>
                                </a>
                            </li>
                            <li class="{{ request()->is('organisation/activities*') ? 'active' : '' }}">
                                <a href="{{ route('organisation.activities_list') }}">
                                    <span class="menu-text">
                                        <i class="fa fa-folder-open darkorange"></i> Activities
                                    </span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('organisation.access_list') ? 'active' : '' }}">
                                <a href="{{ route('organisation.access_list') }}">
                                    <span class="menu-text">
                                        <i class="fa fa-external-link red"></i> Access Rules
                                    </span>
                                </a>
                            </li>


                            {{-- Whitelist IPs (commented out as original) --}}
                            {{--
                            <li>
                                <a>
                                    <span class="menu-text">
                                        <i class="fa fa-external-link red"></i> Whitelist IPs
                                    </span>
                                </a>
                            </li>
                            --}}
                        </ul>
                    </li>
                    <!-- HRM Section -->
<li class="{{ request()->is('hrm*') ? 'active open' : '' }}">
    <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-venus blue"></i>
        <span class="menu-text"> HRM SECTION</span>
        <i class="menu-expand"></i>
    </a>
    <ul class="submenu">
        <li class="{{ request()->is('employee/management*') ? 'active' : '' }}">
            <a href="{{ url('employee/management') }}">
                <i class="fa fa-list blue"></i> Management Profiles
            </a>
        </li>
        <li class="{{ request()->is('employee/staffs*') ? 'active' : '' }}">
            <a href="{{ url('employee/staffs') }}">
                <i class="fa fa-list orange"></i> Off.Staffs Profiles
            </a>
        </li>

        <hr class="wide" style="margin-top: 0px; margin-bottom:2px">
        <li class="{{ request()->is('employee/profile*') ? 'active' : '' }}">
            <a href="{{ url('employee/profile') }}">
                <span class="menu-text"><i class="fa fa-user red"></i> My Profile</span>
            </a>
        </li>
    </ul>
</li>

<!-- Partner Relationship System -->
<li class="{{ request()->is('partners*') ? 'active open' : '' }}">
    <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-briefcase blue"></i>
        <span class="menu-text">PARTNERS PROFILE</span>
        <i class="menu-expand"></i>
    </a>
    <ul class="submenu">
        <li class="{{ request()->is('partners/factories*') ? 'active' : '' }}">
            <a href="{{ url('partners/factories') }}">
                <i class="fa fa-institution blue"></i> Factory Profiles
            </a>
        </li>
    </ul>
</li>

<!-- Merchandising Section -->
<li class="{{ request()->is('sales*') || request()->is('merchandising*') ? 'active open' : '' }}">
    <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-arrows red"></i>
        <span class="menu-text"> SALES & MARKETING</span>
        <i class="menu-expand"></i>
    </a>
    <ul class="submenu">
        <li class="{{ request()->is('sales/first-marketing*') ? 'active' : '' }}">
            <a href="{{ url('sales/first-marketing') }}">
                <span class="menu-text"><i class="fa fa-crosshairs blue"></i> First Marketing</span>
            </a>
        </li>
        <li class="{{ request()->is('sales/pre-sales*') ? 'active' : '' }}">
            <a href="{{ url('sales/pre-sales') }}">
                <span class="menu-text"><i class="fa fa-crosshairs red"></i> Pre-Sales</span>
            </a>
        </li>
        <li class="{{ request()->is('sales/confirm-sales*') ? 'active' : '' }}">
            <a href="{{ url('sales/confirm-sales') }}">
                <span class="menu-text"><i class="fa fa-crosshairs blue"></i> Confirm Sales</span>
            </a>
        </li>
        <li class="{{ request()->is('merchandising/completed-orders*') ? 'active' : '' }}">
            <a href="{{ url('merchandising/completed-orders') }}">
                <span class="menu-text"><i class="fa fa-check-circle blue"></i> Completed Sales</span>
            </a>
        </li>

        <hr class="wide" style="margin-top:0px; margin-bottom:0px">

        <li class="{{ request()->is('merchandising/cancel-orders*') ? 'active' : '' }}">
            <a href="{{ url('merchandising/cancel-orders') }}">
                <span class="menu-text"><i class="fa fa-times-circle red"></i> Canceled Sales</span>
            </a>
        </li>
        <li class="{{ request()->is('merchandising/on-hold*') ? 'active' : '' }}">
            <a href="{{ url('merchandising/on-hold') }}">
                <span class="menu-text"><i class="fa fa-times-circle red"></i> Sale on Hold</span>
            </a>
        </li>
    </ul>
</li>

                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->




</body>