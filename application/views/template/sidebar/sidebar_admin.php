<!-- <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" onload="sweetfunction()"> -->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>

                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">Pemimpin Apel</span>
                                </div>
                                <span>
                                    <img class="round" src="<?= base_url() ?>template/template_admin8/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-lock"></i> Edit Password</a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="<?= base_url('login/logout'); ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url() . 'admin/Dashboard' ?>">
                        <img src="<?php echo base_url() . 'template/template_admin8/app-assets/images/logo/logo-dashboard.png' ?>" alt="Logo Home" style="width: 102px;">
                        <!-- <div class="brand-logo"></div> -->
                        <!-- <h2 class="brand-text mb-0">HRIS</h2> -->
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= $navon == "dashboard" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'apel/Dashboard' ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Menu</span>
                </li>
                <li class="<?= $navon == "absen" ? "active" : ""; ?> nav-item"><a href="<?php echo base_url() . 'apel/Absen' ?>"><i class="feather icon-clipboard"></i><span class="menu-title" data-i18n="Absen">Absensi</span></a>
                </li>
                <!-- <li class=" nav-item"><a href="#"><i class="feather icon-cpu"></i><span class="menu-title" data-i18n="User">Master Data</span></a>
                    <ul class="menu-content">
                        <li class="<?= $navon == "masterban" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'admin/MasterData/Bank' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Bank</span></a></li>
                        <li class="<?= $navon == "mastercon" ? "active" : ""; ?>">
                            <a href="<?php echo base_url() . 'admin/MasterData/Consentration' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Consentration</span></a>
                        </li>
                        <li class="<?= $navon == "masterdir" ? "active" : ""; ?>">
                            <a href="<?php echo base_url() . 'admin/MasterData/Direktorat' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Directorate</span></a>
                        </li>
                        <li class="<?= $navon == "mastergra" ? "active" : ""; ?>">
                            <a href="<?php echo base_url() . 'admin/MasterData/Grade' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Grade</span></a>
                        </li>
                        <li class="<?= $navon == "masterjob" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'admin/MasterData/JobFamily' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Job
                                    Family</span></a></li>
                        <li class="<?= $navon == "masterlea" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'admin/MasterData/Leave' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Leave of Work
                                </span></a></li>
                        <li class="<?= $navon == "mastercom" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'admin/MasterData/payroll_component' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Payroll
                                    Component</span></a></li>
                        <li class="<?= $navon == "masterpos" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'admin/MasterData' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Position</span></a>
                        </li>
                        <li class="<?= $navon == "masterfor" ? "active" : ""; ?>"><a href="<?php echo base_url() . 'admin/MasterData/TaskForce' ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Task Force
                                </span></a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->