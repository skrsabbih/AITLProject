<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.6.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<!-- Mirrored from beyondadmin-v1.6.0.s3-website-us-east-1.amazonaws.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2017 04:35:06 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.png" type="image/x-icon">

    
    <!--Basic Styles-->
    <link href="{{ asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!--Beyond styles-->
    <link id="beyond-link" href="{{ asset('assets')}}/css/beyond.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets')}}/css/demo.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/typicons.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
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
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="{{ asset('assets')}}/img/logo.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Notifications" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Skype meeting with Patty</span>
                                                    <span class="description">01:00 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">office</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Uncharted break</span>
                                                    <span class="description">03:30 pm - 05:15 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Kate birthday party</span>
                                                    <span class="description">08:30 pm</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">at home</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">Dinner with friends</span>
                                                    <span class="description">10:30 pm</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                        <span>
                                            Today, March 28
                                        </span>
                                        <span class="pull-right">
                                            10°c
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                    <i class="icon fa fa-envelope"></i>
                                    <span class="badge">3</span>
                                </a>
                                <!--Messages Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets')}}/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Divyia Austin
                                                </span>
                                                <span class="message-time">
                                                    2 minutes ago
                                                </span>
                                                <span class="message-subject">
                                                    Here's the recipe for apple pie
                                                </span>
                                                <span class="message-body">
                                                    to identify the sending application when the senders image is shown for the main icon
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets')}}/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                                <span class="message-time">
                                                    Yesterday
                                                </span>
                                                <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                                <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets')}}/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Nicolas
                                                </span>
                                                <span class="message-time">
                                                    Friday, September 22
                                                </span>
                                                <span class="message-subject">
                                                    New 4K Cameras
                                                </span>
                                                <span class="message-body">
                                                    The 4K revolution has come over the horizon and is reaching the general populous
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!--/Messages Dropdown-->
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                    <i class="icon fa fa-tasks"></i>
                                    <span class="badge">4</span>
                                </a>
                                <!--Tasks Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                    <li class="dropdown-header bordered-darkorange">
                                        <i class="fa fa-tasks"></i>
                                        4 Tasks In Progress
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Account Creation</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Profile Data</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Updating Resume</span>
                                                <span class="pull-right">75%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Adding Contacts</span>
                                                <span class="pull-right">10%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">
                                            See All Tasks
                                        </a>
                                        <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i class="fa fa-check"></i></button>
                                    </li>
                                </ul>
                                <!--/Tasks Dropdown-->
                            </li>
                            <li>
                                <a class="wave in" id="chat-link" title="Chat" href="#">
                                    <i class="icon glyphicon glyphicon-comment"></i>
                                </a>
                            </li>
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="{{ asset('assets')}}/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="email"><a>David.Stevenson@live.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="{{ asset('assets')}}/img/avatars/adam-jansen.jpg" class="avatar">
                                            <span class="caption">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">Profile</a>
                                        <a href="#" class="pull-right">Setting</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="{{ asset('assets')}}/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="{{ asset('assets')}}/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="{{ asset('assets')}}/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="{{ asset('assets')}}/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="{{ asset('assets')}}/css/skins/orange.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="{{ asset('assets')}}/css/skins/pink.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="{{ asset('assets')}}/css/skins/darkred.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="{{ asset('assets')}}/css/skins/purple.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="{{ asset('assets')}}/css/skins/darkblue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="{{ asset('assets')}}/css/skins/gray.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="{{ asset('assets')}}/css/skins/black.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="{{ asset('assets')}}/css/skins/deepblue.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="login.html">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul><div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">Fixed Navbar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">Fixed SideBar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">Fixed BreadCrumbs</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">Fixed Header</span>
                            </label>
                        </div>
                        <!-- Settings -->
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
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li class="active">
                        <a href="index-2.html">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                    <li>
                        <a href="databoxes.html">
                            <i class="menu-icon glyphicon glyphicon-tasks"></i>
                            <span class="menu-text"> Data Boxes </span>
                        </a>
                    </li>
                    <!--Widgets-->
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-th"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>
                    <!--UI Elements-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> Elements </span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">Basic Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">Glyph Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typicon.html">
                                            <i class="menu-icon typcn typcn-location-outline"></i>
                                            <span class="menu-text"> Typicons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="weather-icons.html">
                                            <i class="menu-icon wi wi-hot"></i>
                                            <span class="menu-text">Weather Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabs.html">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </li>
                            <li>
                                <a href="alerts.html">
                                    <span class="menu-text">Alerts & Tooltips</span>
                                </a>
                            </li>
                            <li>
                                <a href="modals.html">
                                    <span class="menu-text">Modals & Wells</span>
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="nestable-list.html">
                                    <span class="menu-text"> Nestable List</span>
                                </a>
                            </li>
                            <li>
                                <a href="treeview.html">
                                    <span class="menu-text">Treeview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> Tables </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="tables-simple.html">
                                    <span class="menu-text">Simple & Responsive</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-data.html">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Forms </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-layouts.html">
                                    <span class="menu-text">Form Layouts</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-inputs.html">
                                    <span class="menu-text">Form Inputs</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-pickers.html">
                                    <span class="menu-text">Data Pickers</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-wizard.html">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-validation.html">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-editors.html">
                                    <span class="menu-text">Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-inputmask.html">
                                    <span class="menu-text">Input Mask</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> Charts </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="flot.html">
                                    <span class="menu-text">Flot Charts</span>
                                </a>
                            </li>

                            <li>
                                <a href="morris.html">
                                    <span class="menu-text"> Morris Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparkline.html">
                                    <span class="menu-text">Sparkline Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="easypiecharts.html">
                                    <span class="menu-text">Easy Pie Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="chartjs.html">
                                    <span class="menu-text"> ChartJS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Profile-->
                    <li>
                        <a href="profile.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> Mail </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="inbox.html">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </li>

                            <li>
                                <a href="message-view.html">
                                    <span class="menu-text">View Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="message-compose.html">
                                    <span class="menu-text">Compose Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Calendar-->
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                Calendar
                            </span>
                        </a>
                    </li>
                    <!--Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                            <span class="menu-text"> Pages </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="timeline.html">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <span class="menu-text">Pricing Tables</span>
                                </a>
                            </li>

                            <li>
                                <a href="invoice.html">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>

                            <li>
                                <a href="login.html">
                                    <span class="menu-text">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="lock.html">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <span class="menu-text"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--More Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-link"></i>

                            <span class="menu-text">
                                More Pages
                            </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="error-404.html">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>

                            <li>
                                <a href="error-500.html">
                                    <span class="menu-text"> Error 500</span>
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <span class="menu-text">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <span class="menu-text"> Grid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Multi Level Menu
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-camera"></i>
                                            <span class="menu-text">Level 3</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="menu-dropdown">
                                            <i class="menu-icon fa fa-asterisk"></i>

                                            <span class="menu-text">
                                                Level 4
                                            </span>
                                            <i class="menu-expand"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text">Some Item</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bug"></i>
                                                    <span class="menu-text">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <!--Right to Left-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-align-right"></i>
                            <span class="menu-text"> Right to Left </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a>
                                    <span class="menu-text">RTL</span>
                                    <label class="pull-right margin-top-10">
                                        <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                        <span class="text"></span>
                                    </label>
                                </a>
                            </li>
                            <li>
                                <a href="index-rtl-ar.html">
                                    <span class="menu-text">Arabic Layout</span>
                                </a>
                            </li>

                            <li>
                                <a href="index-rtl-fa.html">
                                    <span class="menu-text">Persian Layout</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="versions.html">
                            <i class="menu-icon glyphicon glyphicon-fire themesecondary"></i>
                            <span class="menu-text">
                                BeyondAdmin Versions
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Chat Bar -->
            <div id="chatbar" class="page-chatbar">
                <div class="chatbar-contacts">
                    <div class="contacts-search">
                        <input type="text" class="searchinput" placeholder="Search Contacts" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Your Contacts and Chat History</div>
                    </div>
                    <ul class="contacts-list">
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/Nicolai-Larson.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Adam Johnson</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">left 4 mins ago</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/John-Smith.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">John Smith</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    1:57 am
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/Osvaldus-Valutis.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Osvaldus Valutis</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/Javi-Jimenez.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Javi Jimenez</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/Stephanie-Walter.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Stephanie Walter</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    yesterday
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/Sergey-Azovskiy.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Sergey Azovskiy</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">offline since oct 24</div>
                                </div>
                                <div class="last-chat-time">
                                    22 oct
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/Lee-Munroe.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Lee Munroe</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="{{ asset('assets')}}/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chatbar-messages" style="display: none;">
                    <div class="messages-contact">
                        <div class="contact-avatar">
                            <img src="{{ asset('assets')}}/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                a moment ago
                            </div>
                            <div class="back">
                                <i class="fa fa-arrow-circle-left"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="messages-list">
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                    </ul>
                    <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Dashboard
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="#">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox bg-white radius-bordered">
                                        <div class="databox-left bg-themesecondary">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">50%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themesecondary">28</span>
                                            <div class="databox-text darkgray">NEW TASKS</div>
                                            <div class="databox-stat themesecondary radius-bordered">
                                                <i class="stat-icon icon-lg fa fa-tasks"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox bg-white radius-bordered">
                                        <div class="databox-left bg-themethirdcolor">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themethirdcolor">5</span>
                                            <div class="databox-text darkgray">NEW MESSAGE</div>
                                            <div class="databox-stat themethirdcolor radius-bordered">
                                                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox bg-white radius-bordered">
                                        <div class="databox-left bg-themeprimary">
                                            <div class="databox-piechart">
                                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themeprimary">92</span>
                                            <div class="databox-text darkgray">NEW USERS</div>
                                            <div class="databox-state bg-themeprimary">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox bg-white radius-bordered">
                                        <div class="databox-left no-padding">
                                            <img src="{{ asset('assets')}}/img/avatars/John-Smith.jpg" style="width:65px; height:65px;">
                                        </div>
                                        <div class="databox-right padding-top-20">
                                            <div class="databox-stat palegreen">
                                                <i class="stat-icon icon-xlg fa fa-phone"></i>
                                            </div>
                                            <div class="databox-text darkgray">JOHN SMITH</div>
                                            <div class="databox-text darkgray">TOP RESELLER</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="dashboard-box">
                                        <div class="box-header">
                                            <div class="deadline">
                                                Remaining Days: 109
                                            </div>
                                        </div>
                                        <div class="box-progress">
                                            <div class="progress-handle">day 20</div>
                                            <div class="progress progress-xs progress-no-radius bg-whitesmoke">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-tabbs">
                                            <div class="tabbable">
                                                <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#realtime">
                                                            Real-Time
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#visits">
                                                            Visits
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tab" id="contacttab" href="#bandwidth">
                                                            Bandwidth
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#sales">
                                                            Sales
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content tabs-flat no-padding">
                                                    <div id="realtime" class="tab-pane active padding-5 animated fadeInUp">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="dashboard-chart-realtime" class="chart chart-lg no-margin"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="visits" class="tab-pane  animated fadeInUp">
                                                        <div class="row">
                                                            <div class="col-lg-12 chart-container">
                                                                <div id="dashboard-chart-visits" class="chart chart-lg no-margin" style="width:100%"></div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div id="bandwidth" class="tab-pane padding-10 animated fadeInUp">
                                                        <div class="databox-sparkline bg-themeprimary">
                                                            <span id="dashboard-bandwidth-chart" data-sparkline="compositeline" data-height="250px" data-width="100%" data-linecolor="#fff" data-secondlinecolor="#eee"
                                                                  data-fillcolor="rgba(255,255,255,.1)" data-secondfillcolor="rgba(255,255,255,.25)"
                                                                  data-spotradius="0"
                                                                  data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                                  data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                                  data-linewidth="2" data-secondlinewidth="2"
                                                                  data-composite="500, 400, 100, 450, 300, 200, 100, 200">
                                                                300,300,400,300,200,300,300,200
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="sales" class="tab-pane animated fadeInUp no-padding-bottom" style="padding:20px 20px 0 20px;">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                <div class="databox databox-xlg databox-vertical databox-inverted databox-shadowed">
                                                                    <div class="databox-top">
                                                                        <div class="databox-sparkline">
                                                                            <span data-sparkline="line" data-height="125px" data-width="100%" data-fillcolor="false" data-linecolor="themesecondary"
                                                                                  data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                                                  data-highlightspotcolor="#ffce55" data-highlightlinecolor="#ffce55"
                                                                                  data-linewidth="1.5" data-spotradius="2">
                                                                                1,2,4,3,5,6,8,7,11,14,11,12
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="databox-bottom no-padding text-align-center">
                                                                        <span class="databox-number lightcarbon no-margin">224</span>
                                                                        <span class="databox-text lightcarbon no-margin">Sale Unit / Hour</span>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                <div class="databox databox-xlg databox-vertical databox-inverted databox-shadowed">
                                                                    <div class="databox-top">
                                                                        <div class="databox-sparkline">
                                                                            <span data-sparkline="line" data-height="125px" data-width="100%" data-fillcolor="false" data-linecolor="themefourthcolor"
                                                                                  data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#8cc474"
                                                                                  data-highlightspotcolor="#8cc474" data-highlightlinecolor="#8cc474"
                                                                                  data-linewidth="1.5" data-spotradius="2">
                                                                                100,208,450,298,450,776,234,680,1100,1400,1000,1200
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="databox-bottom no-padding text-align-center">
                                                                        <span class="databox-number lightcarbon no-margin">7063$</span>
                                                                        <span class="databox-text lightcarbon no-margin">Income / Hour</span>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                <div class="databox databox-xlg databox-vertical databox-inverted databox-shadowed">
                                                                    <div class="databox-top">
                                                                        <div class="databox-piechart">
                                                                            <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                                                 data-barcolor="themeprimary" data-linecap="butt" data-percent="80" data-animate="500"
                                                                                 data-linewidth="8" data-size="125" data-trackcolor="#eee">
                                                                                <span class="font-200"><i class="fa fa-gift themeprimary"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="databox-bottom no-padding text-align-center">
                                                                        <span class="databox-number lightcarbon no-margin">9</span>
                                                                        <span class="databox-text lightcarbon no-margin">NEW ORDERS</span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                <div class="databox databox-xlg databox-vertical databox-inverted  databox-shadowed">
                                                                    <div class="databox-top">
                                                                        <div class="databox-piechart">
                                                                            <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                                                 data-barcolor="themethirdcolor" data-linecap="butt" data-percent="40" data-animate="500"
                                                                                 data-linewidth="8" data-size="125" data-trackcolor="#eee">
                                                                                <span class="white font-200"><i class="fa fa-tags themethirdcolor"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="databox-bottom no-padding text-align-center">
                                                                        <span class="databox-number lightcarbon no-margin">11</span>
                                                                        <span class="databox-text lightcarbon no-margin">NEW TICKETS</span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-visits">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                                    <div class="notification">
                                                        <div class="clearfix">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-gift palegreen bordered-1 bordered-palegreen"></i>
                                                            </div>
                                                            <div class="notification-body">
                                                                <span class="title">Kate birthday party</span>
                                                                <span class="description">08:30 pm</span>
                                                            </div>
                                                            <div class="notification-extra">
                                                                <i class="fa fa-calendar palegreen"></i>
                                                                <i class="fa fa-clock-o palegreen"></i>
                                                                <span class="description">at home</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                                    <div class="notification">
                                                        <div class="clearfix">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-check azure bordered-1 bordered-azure"></i>
                                                            </div>
                                                            <div class="notification-body">
                                                                <span class="title">Hanging out with kids</span>
                                                                <span class="description">03:30 pm - 05:15 pm</span>
                                                            </div>
                                                            <div class="notification-extra">
                                                                <i class="fa fa-clock-o azure"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                                    <div class="notification">
                                                        <div class="clearfix">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-phone bordered-1 bordered-orange orange"></i>
                                                            </div>
                                                            <div class="notification-body">
                                                                <span class="title">Meeting with Patty</span>
                                                                <span class="description">01:00 pm</span>
                                                            </div>
                                                            <div class="notification-extra">
                                                                <i class="fa fa-clock-o orange"></i>
                                                                <span class="description">office</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="orders-container">
                                <div class="orders-header">
                                    <h6>Latest Orders</h6>
                                </div>
                                <ul class="orders-list">
                                    <li class="order-item">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                                <div class="item-booker">Ned Stards</div>
                                                <div class="item-time">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>10 minutes ago</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                                <div class="item-price">
                                                    <span class="currency">$</span>
                                                    <span class="price">400</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="item-more" href="#">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li class="order-item top">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                                <div class="item-booker">Steve Lewis</div>
                                                <div class="item-time">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>2 hours ago</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                                <div class="item-price">
                                                    <span class="currency">$</span>
                                                    <span class="price">620</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="item-more" href="#">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li class="order-item">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                                <div class="item-booker">John Ford</div>
                                                <div class="item-time">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>Today 8th July</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                                <div class="item-price">
                                                    <span class="currency">$</span>
                                                    <span class="price">220</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="item-more" href="#">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li class="order-item">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                                <div class="item-booker">Kim Basinger</div>
                                                <div class="item-time">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>Yesterday 7th July</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                                <div class="item-price">
                                                    <span class="currency">$</span>
                                                    <span class="price">400</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="item-more" href="#">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li class="order-item">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                                <div class="item-booker">Steve Lewis</div>
                                                <div class="item-time">
                                                    <i class="fa fa-calendar"></i>
                                                    <span>5th July</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                                <div class="item-price">
                                                    <span class="currency">$</span>
                                                    <span class="price">340</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="item-more" href="#">
                                            <i></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="orders-footer">
                                    <a class="show-all" href="#"><i class="fa fa-angle-down"></i> Show All</a>
                                    <div class="help">
                                        <a href="#"><i class="fa fa-question"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-themeprimary">
                                    <i class="widget-icon fa fa-tasks themeprimary"></i>
                                    <span class="widget-caption themeprimary">Task Board</span>
                                </div><!--Widget Header-->
                                <div class="widget-body no-padding">
                                    <div class="task-container">
                                        <div class="task-search">
                                            <span class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search Tasks">
                                                <i class="fa fa-search gray"></i>
                                            </span>
                                        </div>
                                        <ul class="tasks-list">
                                            <li class="task-item">
                                                <div class="task-check">
                                                    <label>
                                                        <input type="checkbox">
                                                        <span class="text"></span>
                                                    </label>
                                                </div>
                                                <div class="task-state">
                                                    <span class="label label-yellow">
                                                        In Progress
                                                    </span>
                                                </div>
                                                <div class="task-time">1 hour ago</div>
                                                <div class="task-body">Ask to the sysadmins to install Python 3 on the server and run it</div>
                                                <div class="task-creator"><a href="#">Cameron Hetfield</a></div>
                                                <div class="task-assignedto">assigned to you</div>
                                            </li>
                                            <li class="task-item">
                                                <div class="task-check">
                                                    <label>
                                                        <input type="checkbox">
                                                        <span class="text"></span>
                                                    </label>
                                                </div>
                                                <div class="task-state">
                                                    <span class="label label-orange">
                                                        Active
                                                    </span>
                                                </div>
                                                <div class="task-time">2 hours ago</div>
                                                <div class="task-body">Write documentation for the new API with test and deploy specifications</div>
                                                <div class="task-creator"><a href="#">Behrang Nitsche</a></div>
                                                <div class="task-assignedto">assigned to you</div>
                                            </li>
                                            <li class="task-item">
                                                <div class="task-check">
                                                    <label>
                                                        <input type="checkbox">
                                                        <span class="text"></span>
                                                    </label>
                                                </div>
                                                <div class="task-state">
                                                    <span class="label label-palegreen">
                                                        Approved
                                                    </span>
                                                </div>
                                                <div class="task-time">yesterday</div>
                                                <div class="task-body">Code refactoring and rewriting silly codes and test it</div>
                                                <div class="task-creator"><a href="#">David Fincher</a></div>
                                                <div class="task-assignedto">assigned to Kim</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--Widget Body-->
                            </div>

                        </div>
                        <div class="col-lg-8 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-palegreen no-padding">
                                            <div class="databox-stat white bg-palegreen font-120">
                                                <i class="stat-icon fa fa-caret-down icon-xlg"></i>
                                            </div>
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                                      data-barcolor="#b0dc81"
                                                      data-barwidth="10px" data-barspacing="5px"
                                                      data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-composite="7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8">
                                                    8,4,1,2,4,6,2,4,4,8,10,7,10
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-left">
                                                    <span class="databox-text">Sales Total</span>
                                                    <span class="databox-number">$23,657</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-right">
                                                    <span class="databox-text">September</span>
                                                    <span class="databox-number font-70">$1,257</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-orange no-padding">
                                            <div class="databox-stat white bg-orange font-120">
                                                <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                            </div>
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                                      data-barcolor="#fb7d64"
                                                      data-barwidth="10px" data-barspacing="5px"
                                                      data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-composite="7, 6, 5, 7, 9, 10, 8, 6,2,4,1,2,7">
                                                    10,7,10,8,4,6, 6, 4, 7, 8 ,4,4,8
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-left">
                                                    <span class="databox-text">Users Total</span>
                                                    <span class="databox-number">76,109</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-right">
                                                    <span class="databox-text">New</span>
                                                    <span class="databox-number font-70">7,540</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-azure no-padding">
                                            <div class="databox-stat white bg-azure font-120">
                                                <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                            </div>
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                                      data-barcolor="#3bcbef"
                                                      data-barwidth="10px" data-barspacing="5px"
                                                      data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-composite="8,4,1,2,4,6,2,4,4,8,10,7,7">
                                                    7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8
                                                </span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-align-left">
                                                    <span class="databox-text">Visits Total</span>
                                                    <span class="databox-number">990,541</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-align-right">
                                                    <span class="databox-text">September</span>
                                                    <span class="databox-number font-70">292,123</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-themesecondary">
                                            <i class="widget-icon fa fa-tags themesecondary"></i>
                                            <span class="widget-caption themesecondary">Ticket Board</span>
                                        </div><!--Widget Header-->
                                        <div class="widget-body  no-padding">
                                            <div class="tickets-container">
                                                <ul class="tickets-list">
                                                    <li class="ticket-item">
                                                        <div class="row">
                                                            <div class="ticket-user col-lg-6 col-sm-12">
                                                                <img src="{{ asset('assets')}}/img/avatars/adam-jansen.jpg" class="user-avatar">
                                                                <span class="user-name">Adam Johnson</span>
                                                                <span class="user-at">at</span>
                                                                <span class="user-company">Microsoft</span>
                                                            </div>
                                                            <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                <i class="fa fa-clock-o"></i>
                                                                <span class="time">1 Hours Ago</span>
                                                            </div>
                                                            <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                <span class="divider hidden-xs"></span>
                                                                <span class="type">Issue</span>
                                                            </div>
                                                            <div class="ticket-state bg-palegreen">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ticket-item">
                                                        <div class="row">
                                                            <div class="ticket-user col-lg-6 col-sm-12">
                                                                <img src="{{ asset('assets')}}/img/avatars/divyia.jpg" class="user-avatar">
                                                                <span class="user-name">Divyia Phillips</span>
                                                                <span class="user-at">at</span>
                                                                <span class="user-company">Dribbble</span>
                                                            </div>
                                                            <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                <i class="fa fa-clock-o"></i>
                                                                <span class="time">3 Hours Ago</span>
                                                            </div>
                                                            <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                <span class="divider hidden-xs"></span>
                                                                <span class="type">Payment</span>
                                                            </div>
                                                            <div class="ticket-state bg-palegreen">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ticket-item">
                                                        <div class="row">
                                                            <div class="ticket-user col-lg-6 col-sm-12">
                                                                <img src="{{ asset('assets')}}/img/avatars/Matt-Cheuvront.jpg" class="user-avatar">
                                                                <span class="user-name">Nicolai Larson</span>
                                                                <span class="user-at">at</span>
                                                                <span class="user-company">Google</span>
                                                            </div>
                                                            <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                <i class="fa fa-clock-o"></i>
                                                                <span class="time">18 Hours Ago</span>
                                                            </div>
                                                            <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                <span class="divider hidden-xs"></span>
                                                                <span class="type">Issue</span>
                                                            </div>
                                                            <div class="ticket-state bg-darkorange">
                                                                <i class="fa fa-times"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ticket-item">
                                                        <div class="row">
                                                            <div class="ticket-user col-lg-6 col-sm-12">
                                                                <img src="{{ asset('assets')}}/img/avatars/Sergey-Azovskiy.jpg" class="user-avatar">
                                                                <span class="user-name">Bill Jackson</span>
                                                                <span class="user-at">at</span>
                                                                <span class="user-company">Mabna</span>
                                                            </div>
                                                            <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                <i class="fa fa-clock-o"></i>
                                                                <span class="time">2 days Ago</span>
                                                            </div>
                                                            <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                <span class="divider hidden-xs"></span>
                                                                <span class="type">Payment</span>
                                                            </div>
                                                            <div class="ticket-state bg-palegreen">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ticket-item">
                                                        <div class="row">
                                                            <div class="ticket-user col-lg-6 col-sm-12">
                                                                <img src="{{ asset('assets')}}/img/avatars/John-Smith.jpg" class="user-avatar">
                                                                <span class="user-name">Eric Clapton</span>
                                                                <span class="user-at">at</span>
                                                                <span class="user-company">Musicker</span>
                                                            </div>
                                                            <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                <i class="fa fa-clock-o"></i>
                                                                <span class="time">2 days Ago</span>
                                                            </div>
                                                            <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                <span class="divider hidden-xs"></span>
                                                                <span class="type">Info</span>
                                                            </div>
                                                            <div class="ticket-state bg-yellow">
                                                                <i class="fa fa-info"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="databox databox-xxlg databox-vertical databox-inverted">
                                <div class="databox-top bg-whitesmoke no-padding">
                                    <div class="databox-row row-2 bg-orange no-padding">
                                        <div class="databox-cell cell-1 text-align-center no-padding padding-top-5">
                                            <span class="databox-number white"><i class="fa fa-bar-chart-o no-margin"></i></span>
                                        </div>
                                        <div class="databox-cell cell-8 no-padding padding-top-5 text-align-left">
                                            <span class="databox-number white">PAGE VIEWS</span>
                                        </div>
                                        <div class="databox-cell cell-3 text-align-right padding-10">
                                            <span class="databox-text white">13 DECEMBER</span>
                                        </div>
                                    </div>
                                    <div class="databox-row row-4">
                                        <div class="databox-cell cell-6 no-padding padding-10 padding-left-20 text-align-left">
                                            <span class="databox-number orange no-margin">534,908</span>
                                            <span class="databox-text sky no-margin">OVERAL VIEWS</span>
                                        </div>
                                        <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                            <span class="databox-number orange no-margin">4,129</span>
                                            <span class="databox-text darkgray no-margin">THIS WEEK</span>
                                        </div>
                                        <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                            <span class="databox-number orange no-margin">329</span>
                                            <span class="databox-text darkgray no-margin">YESTERDAY</span>
                                        </div>
                                        <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                            <span class="databox-number orange no-margin">104</span>
                                            <span class="databox-text darkgray no-margin">TODAY</span>
                                        </div>
                                    </div>
                                    <div class="databox-row row-6 no-padding">
                                        <div class="databox-sparkline">
                                            <span data-sparkline="line" data-height="126px" data-width="100%" data-fillcolor="#37c2e2" data-linecolor="#37c2e2"
                                                  data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                  data-highlightspotcolor="#f5f5f5 " data-highlightlinecolor="#f5f5f5"
                                                  data-linewidth="2" data-spotradius="0">
                                                5,7,6,5,9,4,3,7,2
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="databox-bottom bg-sky no-padding">
                                    <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                        <span class="databox-header white">Mon</span>
                                    </div>
                                    <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                        <span class="databox-header white">Tues</span>
                                    </div>
                                    <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                        <span class="databox-header white">Wed</span>
                                    </div>
                                    <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                        <span class="databox-header white">Thu</span>
                                    </div>
                                    <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                        <span class="databox-header white">Fri</span>
                                    </div>
                                    <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                                        <span class="databox-header white">Sat</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="databox databox-xxlg databox-vertical databox-shadowed bg-white radius-bordered padding-5">
                                <div class="databox-top">
                                    <div class="databox-row row-12">
                                        <div class="databox-cell cell-3 text-center">
                                            <div class="databox-number number-xxlg sonic-silver">164</div>
                                            <div class="databox-text storm-cloud">online</div>
                                        </div>
                                        <div class="databox-cell cell-9 text-align-center">
                                            <div class="databox-row row-6 text-left">
                                                <span class="badge badge-palegreen badge-empty margin-left-5"></span>
                                                <span class="databox-inlinetext uppercase darkgray margin-left-5">NEW</span>
                                                <span class="badge badge-yellow badge-empty margin-left-5"></span>
                                                <span class="databox-inlinetext uppercase darkgray margin-left-5">RETURNING</span>
                                            </div>
                                            <div class="databox-row row-6">
                                                <div class="progress bg-yellow progress-no-radius">
                                                    <div class="progress-bar progress-bar-palegreen" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="databox-bottom">
                                    <div class="databox-row row-12">
                                        <div class="databox-cell cell-7 text-center  padding-5">
                                            <div id="dashboard-pie-chart-sources" class="chart"></div>
                                        </div>
                                        <div class="databox-cell cell-5 text-center no-padding-left padding-bottom-30">
                                            <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                                <span class="databox-text sonic-silver pull-left no-margin">Type</span>
                                                <span class="databox-text sonic-silver pull-right no-margin uppercase">PCT</span>
                                            </div>
                                            <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                                <span class="badge badge-blue badge-empty pull-left margin-5"></span>
                                                <span class="databox-text darkgray pull-left no-margin hidden-xs">FEED</span>
                                                <span class="databox-text darkgray pull-right no-margin uppercase">46%</span>
                                            </div>
                                            <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                                <span class="badge badge-orange badge-empty pull-left margin-5"></span>
                                                <span class="databox-text darkgray pull-left no-margin hidden-xs">PREFERRAL</span>
                                                <span class="databox-text darkgray pull-right no-margin uppercase">21%</span>
                                            </div>
                                            <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                                <span class="badge badge-pink badge-empty pull-left margin-5"></span>
                                                <span class="databox-text darkgray pull-left no-margin hidden-xs">DIRECT</span>
                                                <span class="databox-text darkgray pull-right no-margin uppercase">12%</span>
                                            </div>
                                            <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                                <span class="badge badge-palegreen badge-empty pull-left margin-5"></span>
                                                <span class="databox-text darkgray pull-left no-margin hidden-xs">EMAIL</span>
                                                <span class="databox-text darkgray pull-right no-margin uppercase">11%</span>
                                            </div>
                                            <div class="databox-row row-2 padding-10">
                                                <span class="badge badge-yellow badge-empty pull-left margin-5"></span>
                                                <span class="databox-text darkgray pull-left no-margin hidden-xs">ORGANIC</span>
                                                <span class="databox-text darkgray pull-right no-margin uppercase">10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="{{ asset('assets')}}/js/jquery.min.js"></script>
    <script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="{{ asset('assets')}}/js/beyond.js"></script>


    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    <script src="{{ asset('assets')}}/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="{{ asset('assets')}}/js/charts/sparkline/sparkline-init.js"></script>

    <!--Easy Pie Charts Needed Scripts-->
    <script src="{{ asset('assets')}}/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="{{ asset('assets')}}/js/charts/easypiechart/easypiechart-init.js"></script>

    <!--Flot Charts Needed Scripts-->
    <script src="{{ asset('assets')}}/js/charts/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets')}}/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('assets')}}/js/charts/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('assets')}}/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="{{ asset('assets')}}/js/charts/flot/jquery.flot.orderBars.js"></script>

    <script>
        // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

            //Sets The Hidden Chart Width
            $('#dashboard-bandwidth-chart')
                .data('width', $('.box-tabbs')
                    .width() - 20);

            //-------------------------Visitor Sources Pie Chart----------------------------------------//
            var data = [
                {
                    data: [[1, 21]],
                    color: '#fb6e52'
                },
                {
                    data: [[1, 12]],
                    color: '#e75b8d'
                },
                {
                    data: [[1, 11]],
                    color: '#a0d468'
                },
                {
                    data: [[1, 10]],
                    color: '#ffce55'
                },
                {
                    data: [[1, 46]],
                    color: '#5db2ff'
                }
            ];
            var placeholder = $("#dashboard-pie-chart-sources");
            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        innerRadius: 0.45,
                        show: true,
                        stroke: {
                            width: 4
                        }
                    }
                }
            });

            //------------------------------Visit Chart------------------------------------------------//
            var data2 = [{
                color: themesecondary,
                label: "Direct Visits",
                data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
                [14, 10], [15, 14], [16, 15], [17, 9]],

                lines: {
                    show: true,
                    fill: true,
                    lineWidth: .1,
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                points: {
                    show: false
                },
                shadowSize: 0
            },
                {
                    color: themeprimary,
                    label: "Referral Visits",
                    data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]],
                    bars: {
                        order: 1,
                        show: true,
                        borderWidth: 0,
                        barWidth: 0.4,
                        lineWidth: .5,
                        fillColor: {
                            colors: [{
                                opacity: 0.4
                            }, {
                                opacity: 1
                            }]
                        }
                    }
                },
                {
                    color: themethirdcolor,
                    label: "Search Engines",
                    data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                    [14, 3], [15, 4], [16, 6], [17, 4]],
                    lines: {
                        show: true,
                        fill: false,
                        fillColor: {
                            colors: [{
                                opacity: 0.3
                            }, {
                                opacity: 0
                            }]
                        }
                    },
                    points: {
                        show: true
                    }
                }
            ];
            var options = {
                legend: {
                    show: false
                },
                xaxis: {
                    tickDecimals: 0,
                    color: '#f3f3f3'
                },
                yaxis: {
                    min: 0,
                    color: '#f3f3f3',
                    tickFormatter: function (val, axis) {
                        return "";
                    },
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false,
                    color: '#fbfbfb'

                },
                tooltip: true,
                tooltipOpts: {
                    defaultTheme: false,
                    content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
                }
            };
            var placeholder = $("#dashboard-chart-visits");
            var plot = $.plot(placeholder, data2, options);

            //------------------------------Real-Time Chart-------------------------------------------//
            var realTimedata = [],
                realTimedata2 = [],
                totalPoints = 300;

            var getSeriesObj = function () {
                return [
                {
                    data: getRandomData(),
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: 0
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }, {
                    data: getRandomData2(),
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: .5
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }
                ];
            };
            function getRandomData() {
                if (realTimedata.length > 0)
                    realTimedata = realTimedata.slice(1);

                // Do a random walk

                while (realTimedata.length < totalPoints) {

                    var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < realTimedata.length; ++i) {
                    res.push([i, realTimedata[i]]);
                }

                return res;
            }
            function getRandomData2() {
                if (realTimedata2.length > 0)
                    realTimedata2 = realTimedata2.slice(1);

                // Do a random walk

                while (realTimedata2.length < totalPoints) {

                    var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                        y = prev - 25;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata2.push(y);
                }


                var res = [];
                for (var i = 0; i < realTimedata2.length; ++i) {
                    res.push([i, realTimedata2[i]]);
                }

                return res;
            }
            // Set up the control widget
            var updateInterval = 500;
            var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
                yaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                xaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false
                },
                colors: ['#eee', themeprimary],
            });

            function update() {

                plot.setData(getSeriesObj());

                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();


            //-------------------------Initiates Easy Pie Chart instances in page--------------------//
            InitiateEasyPieChart.init();

            //-------------------------Initiates Sparkline Chart instances in page------------------//
            InitiateSparklineCharts.init();
        });

    </script>
    


</body>
<!--  /Body -->

<!-- Mirrored from beyondadmin-v1.6.0.s3-website-us-east-1.amazonaws.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2017 04:37:26 GMT -->
</html>
