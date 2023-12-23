<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from shreyu.coderthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 15:39:51 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Green Chuya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="public/dashboard/assets/images/favicon.ico">

        <!-- plugins -->
        <link href="public/dashboard/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="public/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="public/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="public/dashboard/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
		<link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

		<!-- icons -->
		<link href="public/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box dropdown">
                        
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="uil uil-search"></i>
                                        </button>
                                    </div>

                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 05 results</h5>
                                        </div>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="uil uil-sliders-v-alt me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="uil uil-home-alt me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="uil uil-life-ring me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex text-align-start">
                                                    <img class="me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="flex-grow-1">
                                                        <h5 class="m-0 fs-14">Shirley Miller</h5>
                                                        <span class="fs-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex text-align-start">
                                                    <img class="me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="flex-grow-1">
                                                        <h5 class="m-0 fs-14">Timothy Moreno</h5>
                                                        <span class="fs-12 mb-0">Frontend Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
                                    </div>  
                                </div>
                            </form>
                        </li>
    
                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="search here">
                                </form>
                            </div>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="fullscreen" href="#">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
    
                                <div class="p-1">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i data-feather="globe"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> 
                                    <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> 
                                    <span class="align-middle">German</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> 
                                    <span class="align-middle">Italian</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> 
                                    <span class="align-middle">Spanish</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> 
                                    <span class="align-middle">Russian</span>
                                </a>
    
                            </div>
                        </li>
            
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle position-relative" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">6</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="#" class="text-dark"><small>Clear All</small></a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="noti-scroll" data-simplebar>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon bg-primary"><i class="uil uil-user-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom active">
                                        <div class="notify-icon bg-success"><i class="uil uil-comment-message"></i> </div>
                                        <p class="notify-details">
                                            Jaclyn Brunswick commented on Dashboard<small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon bg-danger"><i class="uil uil-comment-message"></i></div>
                                        <p class="notify-details">
                                            Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="uil uil-heart"></i>
                                        </div>
                                        <p class="notify-details">
                                            Carlos Crouch liked <b>Admin</b> <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fe-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="public/dashboard/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    Administrador <i class="uil uil-angle-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0"> Bienvenido !</h6>
                                </div>
    
                                <!--<a href="pages-profile.html" class="dropdown-item notify-item">
                                    <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                                </a>

                                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                    <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                                </a>-->

                                <div class="dropdown-divider"></div>

                                <a href="pages-logout.html" class="dropdown-item notify-item">
                                    <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Salir</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                                <i data-feather="settings"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">Shreyu</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">S</span> -->
                            </span>
                        </a>
    
                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="24">
                            </span>
                        </a>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile">
                                <i data-feather="menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
            
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Create New
                                <i class="uil uil-angle-down"></i> 
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="uil uil-bag me-1"></i><span>New Projects</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="uil uil-user-plus me-1"></i><span>Create Users</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="uil uil-chart-pie me-1"></i><span>Revenue Report</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="uil uil-cog me-1"></i><span>Settings</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="uil uil-question-circle me-1"></i><span>Help & Support</span>
                                </a>
    
                            </div>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Nik Patel</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <a href="pages-profile.html" class="dropdown-item notify-item">
                                    <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="help-circle" class="icon-dual icon-xs me-1"></i><span>Support</span>
                                </a>
                                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                    <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <!-- <li class="menu-title">Navigation</li> -->

                            <li class="menu-title mt-2">Apps</li>

                            <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="calendar"></i>
                                    <span> Inicio </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarEmail" data-bs-toggle="collapse">
                                    <i data-feather="mail"></i>
                                    <span> Pagina web </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEmail">
                                    <ul class="nav-second-level">
                                        <li><a href="email-inbox.html">Inicio</a></li>
                                        <li><a href="email-read.html">Sobre Nosotros</a></li>
                                        <li><a href="email-compose.html">Servicios</a></li>
                                        <li><a href="email-compose.html">Contacto</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarProjects" data-bs-toggle="collapse">
                                    <i data-feather="briefcase"></i>
                                    <span> Seguridad </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProjects">
                                    <ul class="nav-second-level">
                                        <li><a href="project-list.html">Usuarios</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <div class="page-title-right">
                                        <form class="float-sm-end mt-3 mt-sm-0">
                                            <div class="row g-2">
                                                <div class="col-md-auto">
                                                    <div class="mb-1 mb-sm-0">
                                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 210px;" />
                                                    </div>
                                                </div>
                                                <div class="col-md-auto">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class='uil uil-file-alt me-1'></i>Download
                                                        <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#" class="dropdown-item notify-item">
                                                                <i data-feather="mail" class="icon-dual icon-xs me-2"></i>
                                                                <span>Email</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item notify-item">
                                                                <i data-feather="printer" class="icon-dual icon-xs me-2"></i>
                                                                <span>Print</span>
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item notify-item">
                                                                <i data-feather="file" class="icon-dual icon-xs me-2"></i>
                                                                <span>Re-Generate</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->  

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">Today Revenue</span>
                                                <h3 class="mb-0">$2100</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <div id="today-revenue-chart" class="apex-charts"></div>
                                                <span class="text-success fw-bold fs-13">
                                                    <i class='uil uil-arrow-up'></i> 10.21%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">Product Sold</span>
                                                <h3 class="mb-0">558</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <div id="today-product-sold-chart" class="apex-charts"></div>
                                                <span class="text-danger fw-bold fs-13">
                                                    <i class='uil uil-arrow-down'></i> 5.05%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">New Customers</span>
                                                <h3 class="mb-0">65</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <div id="today-new-customer-chart" class="apex-charts"></div>
                                                <span class="text-success fw-bold fs-13">
                                                    <i class='uil uil-arrow-up'></i> 25.16%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">NewVisitors</span>
                                                <h3 class="mb-0">958</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <div id="today-new-visitors-chart" class="apex-charts"></div>
                                                <span class="text-danger fw-bold fs-13">
                                                    <i class='uil uil-arrow-down'></i> 5.05%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- stats + charts -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <div class="dropdown float-end">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-refresh me-2"></i>Refresh
                                                    </a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-user-plus me-2"></i>Add New
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-exit me-2"></i>Exit
                                                    </a>
                                                </div>
                                            </div>
        
                                            <h5 class="card-title header-title mb-0">Overview</h5>
                                        </div>
                                        
                                        <!-- stat 1 -->
                                        <div class="d-flex p-3 border-bottom">
                                            <div class="flex-grow-1">
                                                <h4 class="mt-0 mb-1 fs-22">121,000</h4>
                                                <span class="text-muted">Total Visitors</span>
                                            </div>
                                            <i data-feather="users" class="align-self-center icon-dual icon-md"></i>
                                        </div>
    
                                        <!-- stat 2 -->
                                        <div class="d-flex p-3 border-bottom">
                                            <div class="flex-grow-1">
                                                <h4 class="mt-0 mb-1 fs-22">21,000</h4>
                                                <span class="text-muted">Total Product Views</span>
                                            </div>
                                            <i data-feather="image" class="align-self-center icon-dual icon-md"></i>
                                        </div>
    
                                        <!-- stat 3 -->
                                        <div class="d-flex p-3 border-bottom">
                                            <div class="flex-grow-1">
                                                <h4 class="mt-0 mb-1 fs-22">$21.5</h4>
                                                <span class="text-muted">Revenue Per Visitor</span>
                                            </div>
                                            <i data-feather="shopping-bag" class="align-self-center icon-dual icon-md"></i>
                                        </div>

                                        <a href="#" class="p-2 d-block text-end">View All <i class="uil-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    Today
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    7 Days
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    15 Days
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    1 Months
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    6 Months
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    1 Year
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0 header-title">Revenue</h5>

                                        <div id="revenue-chart" class="apex-charts mt-3"  dir="ltr"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-refresh me-2"></i>Refresh
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-user-plus me-2"></i>Add New
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                    <i class="uil uil-exit me-2"></i>Exit
                                                </a>
                                            </div>
                                        </div>

                                        <h5 class="card-title header-title">Targets</h5>
                                        <div id="targets-chart" class="apex-charts mt-3" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                
                        <!-- products -->
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-refresh me-2"></i>Refresh
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-user-plus me-2"></i>Add New
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                    <i class="uil uil-exit me-2"></i>Exit
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="card-title mt-0 mb-0 header-title">Sales By Category</h5>
                                        <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="#" class="btn btn-primary btn-sm float-end">
                                            <i class='uil uil-export me-1'></i> Export
                                        </a>
                                        <h5 class="card-title mt-0 mb-0 header-title">Recent Orders</h5>

                                        <div class="table-responsive mt-4">
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Customer</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#98754</td>
                                                        <td>ASOS Ridley High</td>
                                                        <td>Otto B</td>
                                                        <td>$79.49</td>
                                                        <td><span class="badge badge-soft-warning py-1">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98753</td>
                                                        <td>Marco Lightweight Shirt</td>
                                                        <td>Mark P</td>
                                                        <td>$125.49</td>
                                                        <td><span class="badge badge-soft-success py-1">Delivered</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98752</td>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>Dave B</td>
                                                        <td>$35.49</td>
                                                        <td><span class="badge badge-soft-danger py-1">Declined</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98751</td>
                                                        <td>Lightweight Jacket</td>
                                                        <td>Shreyu N</td>
                                                        <td>$49.49</td>
                                                        <td><span class="badge badge-soft-success py-1">Delivered</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98750</td>
                                                        <td>Marco Shoes</td>
                                                        <td>Rik N</td>
                                                        <td>$69.49</td>
                                                        <td><span class="badge badge-soft-danger py-1">Declined</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <!-- widgets -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="header-title mb-3">Top Performers</h6>
                                        <div class="d-flex border-top pt-2">
                                            <img src="assets/images/users/avatar-7.jpg" class="avatar rounded me-3" alt="shreyu">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-1 mb-0 fs-15">Shreyu N</h5>
                                                <h6 class="text-muted fw-normal mt-1 mb-2">Senior Sales Guy</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-end">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-edit-alt me-2"></i>Edit
                                                    </a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-exit me-2"></i>Remove from Team
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-trash me-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 border-top pt-2">
                                            <img src="assets/images/users/avatar-9.jpg" class="avatar rounded me-3" alt="shreyu">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-1 mb-0 fs-15">Greeva Y</h5>
                                                <h6 class="text-muted fw-normal mt-1 mb-2">Social Media Campaign</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-end">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-edit-alt me-2"></i>Edit
                                                    </a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-exit me-2"></i>Remove from Team
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-trash me-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 border-top pt-2">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar rounded me-3" alt="shreyu">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-1 mb-0 fs-15">Nik G</h5>
                                                <h6 class="text-muted fw-normal mt-1 mb-2">Inventory Manager</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-end">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-edit-alt me-2"></i>Edit
                                                    </a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-exit me-2"></i>Remove from Team
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-trash me-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 border-top pt-2">
                                            <img src="assets/images/users/avatar-1.jpg" class="avatar rounded me-3" alt="shreyu">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-1 mb-0 fs-15">Hardik G</h5>
                                                <h6 class="text-muted fw-normal mt-1 mb-2">Sales Person</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-end">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-edit-alt me-2"></i>Edit
                                                    </a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-exit me-2"></i>Remove from Team
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-trash me-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="d-flex mt-1 border-top pt-2">
                                            <img src="assets/images/users/avatar-8.jpg" class="avatar rounded me-3" alt="shreyu">
                                            <div class="flex-grow-1">
                                                <h5 class="mt-1 mb-0 fs-15">GB Patel G</h5>
                                                <h6 class="text-muted fw-normal mt-1 mb-2">Sales Person</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-end">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-edit-alt me-2"></i>Edit
                                                    </a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-exit me-2"></i>Remove from Team
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-trash me-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="task-list.html" class="btn btn-primary btn-sm float-end">
                                            View All
                                        </a>
                                        <h5 class="mb-4 header-title">Tasks</h5>
                                        <div data-simplebar class="px-1" style="max-height: 352px;">
                                            <div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task1">
                                                    <label class="form-check-label" for="task1">
                                                        Draft the new contract document for sales team
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 24 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>
    
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task2">
                                                    <label class="form-check-label" for="task2">
                                                        iOS App home page
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 23 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>
    
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task3">
                                                    <label class="form-check-label" for="task3">
                                                        Write a release note for Shreyu
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 22 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>

                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task4">
                                                    <label class="form-check-label" for="task4">
                                                        Invite Greeva to a project shreyu admin
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 21 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>
    
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task5">
                                                    <label class="form-check-label" for="task5">
                                                        Enable analytics tracking for main website
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 20 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>

                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task6">
                                                    <label class="form-check-label" for="task6">
                                                        Invite user to a project
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 18 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>
    
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="task7">
                                                    <label class="form-check-label" for="task7">
                                                        Write a release note
                                                    </label>
                                                    <p class="fs-13 text-muted">Due on 14 Aug, 2019</p>
                                                </div> <!-- end checkbox -->
                                            </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-refresh me-2"></i>Refresh
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-user-plus me-2"></i>Add New
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                    <i class="uil uil-exit me-2"></i>Exit
                                                </a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-4">Recent Conversation</h4>

                                        <div class="chat-conversation">
                                            <div data-simplebar style="height: 314px;">
                                                <ul class="conversation-list">
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                            <i>10:00</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Geneva</i>
                                                                <p>Hello!</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Dominic</i>
                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Geneva</i>
                                                                <p>Yeah everything is fine</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-1.jpg" alt="male">
                                                            <i>10:02</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Dominic</i>
                                                                <p>Wow that's great</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-danger chat-send w-100 waves-effect waves-light">Send</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div> <!-- end .chat-conversation-->
                                    </div>
                                </div> <!-- end card-->
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Shreyu theme by <a href="#">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <h6 class="fw-medium px-3 m-0 py-2 text-uppercase bg-light">
                    <span class="d-block py-1">Theme Settings</span>
                </h6>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <h6 class="fw-medium mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="fw-medium mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="fw-medium mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check" checked />
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable" id="scrollable-check" />
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h6 class="fw-medium mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" checked />
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" />
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <!-- size -->
                    <h6 class="fw-medium mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default" id="default-size-check" checked />
                        <label class="form-check-label" for="default-size-check">Default</label>
                    </div>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed" id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                    </div>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact" id="compact-check" />
                        <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                    </div>

                    <!-- User info -->
                    <h6 class="fw-medium mt-4 mb-2 pb-1">Sidebar User Info</h6>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftsidebar-user" value="fixed" id="sidebaruser-check" />
                        <label class="form-check-label" for="sidebaruser-check">Enable</label>
                    </div>


                    <!-- Topbar -->
                    <h6 class="fw-medium mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                        <label class="form-check-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">Light</label>
                    </div>


                    <button class="btn btn-primary w-100 mt-4" id="resetBtn">Reset to Default</button>

                    <a href="https://1.envato.market/shreyu_admin" class="btn btn-danger d-block mt-3" target="_blank">
                        <i class="mdi mdi-basket me-1"></i> Purchase Now
                    </a>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="public/dashboard/assets/js/vendor.min.js"></script>

        <!-- optional plugins -->
        <script src="public/dashboard/assets/libs/moment/min/moment.min.js"></script>
        <script src="public/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="public/dashboard/assets/libs/flatpickr/flatpickr.min.js"></script>

        <!-- page js -->
        <script src="public/dashboard/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="public/dashboard/assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from shreyu.coderthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 15:40:27 GMT -->
</html>