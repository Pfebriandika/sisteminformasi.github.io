<!-- BEGIN: Content-->
<?php
if ($this->session->userdata('role') == "admin") { ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-2">
                            <div class="card h-100 border-primary mb-0">
                                <div class="card-header d-flex justify-content-between align-items-end" style="padding: 0.7rem 0.8rem; border-bottom: 1px solid #796df1;">
                                    <p class="card-title text-center card-title" style="align-self: center; font-size: 1.1rem;">
                                        <i class="fa fa-user text-primary"></i> Employee
                                    </p>




                                    <!-- <div class="row pr-1" id="butediteother">
                                    <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;"
                                        data-toggle="tooltip" data-placement="top" title="Edit Emergency"
                                        id="editeother">
                                        <p class="font-medium-2">
                                            <i class="fa fa-pencil text-primary cursor-pointer"></i>
                                        </p>
                                    </a>
                                </div> -->

                                </div>

                                <div class="card-content p-2">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card text-center bg-gradient-info m-0 mb-2 p-0">
                                                <div class="card-content">
                                                    <div class="card-body p-50">
                                                        <p class="mb-0 font-weight-bold">
                                                            <i class="fa fa-male"></i>
                                                            Male : 124
                                                        </p>
                                                        <p class="mb-0 font-weight-bold">
                                                            <i class="fa fa-female"></i> Female : 111
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-4 col-sm-6">
                                            <div class="card text-center bg-gradient-success m-0">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="avatar bg-white p-50 m-0 mb-1">
                                                            <div class="avatar-content">
                                                                <i class="fa fa-user-circle text-success font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <h2 class="text-bold-700 text-white">1232 </h2>
                                                        <p class="mb-0 font-weight-bold"><i class="fa fa-check"></i>
                                                            Employee Active</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-4 col-sm-6">
                                            <div class="card text-center bg-gradient-danger m-0">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="avatar bg-white p-50 m-0 mb-1">
                                                            <div class="avatar-content">
                                                                <i class="fa fa-user-times text-danger font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <h2 class="text-bold-700 text-white">1232 </h2>
                                                        <p class="mb-0 font-weight-bold"><i class="fa fa-times"></i>
                                                            Employee Disabled</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 mb-2">
                            <div class="card h-100 border-primary mb-0">
                                <div class="card-header d-flex justify-content-between align-items-end" style="padding: 0.7rem 0.8rem; border-bottom: 1px solid #796df1;">
                                    <p class="card-title text-center card-title" style="align-self: center; font-size: 1.1rem;">
                                        <i class="fa fa-handshake-o text-primary"></i> Client
                                    </p>




                                    <!-- <div class="row pr-1" id="butediteother">
                                    <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;"
                                        data-toggle="tooltip" data-placement="top" title="Edit Emergency"
                                        id="editeother">
                                        <p class="font-medium-2">
                                            <i class="fa fa-pencil text-primary cursor-pointer"></i>
                                        </p>
                                    </a>
                                </div> -->

                                </div>

                                <div class="card-content p-2">
                                    <div class="row">


                                        <div class="col-xl-12 col-md-4 col-sm-6">
                                            <div class="card text-center bg-gradient-success m-0">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="avatar bg-white p-50 m-0 mb-1">
                                                            <div class="avatar-content">
                                                                <i class="fa fa-user-circle text-success font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <h2 class="text-bold-700 text-white">45 </h2>
                                                        <p class="mb-0 font-weight-bold"><i class="fa fa-check"></i>
                                                            Total Client</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row ">
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-2">
                            <div class="card border-1 border-primary">
                                <div class="card-header d-flex justify-content-between align-items-end" style="padding: 0.7rem 0.8rem; border-bottom: 1px solid #796df1;">
                                    <p class="card-title text-center card-title" style="align-self: center; font-size: 1.1rem;">
                                        <i class="fa fa-graduation-cap text-primary"></i> Education Level
                                    </p>




                                    <!-- <div class="row pr-1" id="butediteother">
                                    <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;"
                                        data-toggle="tooltip" data-placement="top" title="Edit Emergency"
                                        id="editeother">
                                        <p class="font-medium-2">
                                            <i class="fa fa-pencil text-primary cursor-pointer"></i>
                                        </p>
                                    </a>
                                </div> -->

                                </div>
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div id="customer-chart"></div>
                                    </div>
                                    <div class="row m-0 ml-1">
                                        <ul class="list-group mb-1 col-4">
                                            <li class="list-group-item d-flex justify-content-between">
                                                <div class="series-info">
                                                    <i class="fa fa-circle font-small-3 text-primary"></i>
                                                    <span class="text-bold-600">S2</span>
                                                </div>
                                                <div class="product-result ml-0">
                                                    <span>12</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between ">
                                                <div class="series-info">
                                                    <i class="fa fa-circle font-small-3 text-warning"></i>
                                                    <span class="text-bold-600">S1</span>
                                                </div>
                                                <div class="product-result">
                                                    <span>258</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-group mb-1 col-4">
                                            <li class="list-group-item d-flex justify-content-between ">
                                                <div class="series-info">
                                                    <i class="fa fa-circle font-small-3 text-danger"></i>
                                                    <span class="text-bold-600">D4</span>
                                                </div>
                                                <div class="product-result">
                                                    <span>149</span>
                                                </div>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between ">
                                                <div class="series-info">
                                                    <i class="fa fa-circle font-small-3 text-success"></i>
                                                    <span class="text-bold-600">D3</span>
                                                </div>
                                                <div class="product-result">
                                                    <span>149</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-group  mb-1 col-4">
                                            <li class="list-group-item d-flex justify-content-between ">
                                                <div class="series-info">
                                                    <i class="fa fa-circle font-small-3 text-info"></i>
                                                    <span class="text-bold-600">SMA</span>
                                                </div>
                                                <div class="product-result">
                                                    <span>149</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between ">
                                                <div class="series-info">
                                                    <i class="fa fa-circle font-small-3 text-light"></i>
                                                    <span class="text-bold-600">SMK</span>
                                                </div>
                                                <div class="product-result">
                                                    <span>149</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php } elseif ($this->session->userdata('role') == "atasan") { ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="<?= base_url() ?>template/template_admin8/app-assets/images/elements/decore-left.png" class="img-left" alt="
                                            card-img-left">
                                        <img src="<?= base_url() ?>template/template_admin8/app-assets/images/elements/decore-right.png" class="img-right" alt="
                                            card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">Welcome</h1>
                                            <p class="m-auto w-75">Application <strong>Human Resources Information
                                                    System.</strong></p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                                    <p class="mb-0">Subscribers Gained</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                                    <p class="mb-0">Orders Received</p>
                                </div>
                                <div class="card-content">
                                    <div id="orders-received-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php } elseif ($this->session->userdata('role') == "employee") { ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="card bg-analytics" style="background-color: #99ddf3;">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="<?= base_url() ?>template/template_admin8/app-assets/images/elements/decore-left.png" class="img-left" alt="card-img-left">
                                        <img src="<?= base_url() ?>template/template_admin8/app-assets/images/elements/decore-right.png" class="img-right" alt="card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-tablet white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-1 text-white">Welcome</h1>
                                            <p class="m-auto w-75 text-white">Application <strong>Human Resources Information
                                                    System.</strong></p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="card bg-analytics" style="background-color: #0079a2;">
                                <div class="card-content" style="height: 18rem;">
                                    <div class="card-body text-center">
                                        <div class="media-left mt-2"><i class="feather icon-alert-triangle font-large-5 warning"></i></div>
                                        <div class="text-center mt-3">
                                            <p class="m-auto w-75 text-white"><strong>Today You Have Not Been Absent</strong></p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="card bg-analytics" style="background-color: #0079a2;">
                                <div class="card-content" style="height: 18rem;">
                                    <div class="card-body text-center">
                                        <p class="m-auto w-75 text-white"><strong>Today You Have Not Been Absent</strong></p><br>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
<?php }  ?>

<?php $this->load->view('template/home/footer'); ?>
<script>
    $(window).on("load", function() {
        var $primary = '#7367F0';
        var $danger = '#EA5455';
        var $warning = '#FF9F43';
        var $info = '#00cfe8';
        var $success = '#00db89';
        var $primary_light = '#9c8cfc';
        var $warning_light = '#FFC085';
        var $danger_light = '#f29292';
        var $info_light = '#1edec5';
        var $strok_color = '#b9c3cd';
        var $label_color = '#e7eef7';
        var $purple = '#df87f2';
        var $white = '#fff';
        var customerChartoptions = {
            chart: {
                type: 'donut',
                height: 300,
                dropShadow: {
                    enabled: false,
                    blur: 5,
                    left: 1,
                    top: 1,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            labels: ['New', 'Returning', 'Referrals', 'aaa'],
            series: [800, 258, 149, 88],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            stroke: {
                width: 5
            },
            colors: [$primary, $warning, $danger, $info],
            fill: {
                type: 'gradient',
                gradient: {
                    gradientToColors: [$primary_light, $warning_light, $danger_light, $info_light]
                }
            }
        }

        var customerChart = new ApexCharts(
            document.querySelector("#customer-chart"),
            customerChartoptions
        );

        customerChart.render();
    });
</script>