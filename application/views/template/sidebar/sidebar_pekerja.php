<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <?php
    $this->CI = &get_instance();
    ?>

    <!-- BEGIN: Header-->
    <nav class=" header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">

                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">

                            <li class="nav-item d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Now At">
                                    <span id="qwe" class="font-weight-bold ">-</span></a></li>
                        </ul>



                    </div>

                    <ul class="nav navbar-nav float-right">

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">Pemimpin Kelompok</span>
                                </div>
                                <span>
                                    <img class="round" src="<?= base_url() ?>template/template_admin8/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url('login/logout'); ?>"><i class="feather icon-power   "></i> Logout</a>
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
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="<?php echo base_url() . 'kelompok/Dashboard' ?>">
                        <img src="<?php echo base_url() . 'template/template_admin8/app-assets/images/logo/logo-dashboard.png' ?>" alt="Logo Home" style="width: 102px;">
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= $navon == "dashboard" ? "active" : ""; ?>">
                    <a href="<?php echo base_url() . 'kelompok/Dashboard' ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class="navigation-header"><span>Menu</span>
                </li>
                <!-- <li class="<?= $navon == "absence" ? "active" : ""; ?>">
                    <a href="<?php echo base_url() . 'kelompok/absence' ?>">
                        <i class="feather icon-clipboard"></i><span class="menu-title"> Absence</span></a>
                </li> -->
                <li class="<?= $navon == "absence" ? "active" : ""; ?>">
                    <a href="<?php echo base_url() . 'kelompok/Absensi' ?>">
                        <i class="fa fa-calendar"></i><span class="menu-title"> Absensi Anggota</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->