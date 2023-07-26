<!-- BEGIN: Content-->
<?php
if ($this->session->userdata('role') == "admin") { ?>
    <div id="msg" data-msg="<?= $this->session->flashdata('msg'); ?>"></div>
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
                        <div class="col-xl-3 col-md-4 col-sm-6 mt-50">
                            <div class="card text-center bg-gradient-success p-25" style="height: 42%;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-white p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="fa fa-user-circle text-success font-large-1"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-bold-700 text-white ">
                                            <span class="count"><?= $activeemployee; ?></span> Person
                                        </h2>
                                        <p class="mb-0 font-weight-bold"><i class="fa fa-check"></i>
                                            Employee Active</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card text-center bg-gradient-danger p-25 mt-1" style="height: 42%;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-white p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="fa fa-user-circle text-danger font-large-1"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-bold-700 text-white"> <span class="count"><?= $inactive; ?> </span> Person
                                        </h2>
                                        <p class="mb-0 font-weight-bold"><i class="fa fa-close"></i>
                                            Employee Inactive</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-8 col-sm-6 mt-50">
                            <div class="card border border-primary" style="height: 92%;">
                                <div class="card-header d-flex justify-content-between align-items-end" style="padding: 0.7rem 0.8rem; border-bottom: 1px solid #796df1;">
                                    <p class="card-title text-center card-title" style="align-self: center; font-size: 1.1rem;">
                                        <i class="fa fa-clock-o text-primary"></i> Absent Today
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">

                                        <div id="goal-overview-chart" class="mb-0"></div>
                                        <div class="row text-center">
                                            <div class="col-3 border-top border-right d-flex  flex-column py-1">
                                                <p class="mb-50">Absent <i class="fa fa-check"></i> </p>
                                                <p class="font-large-1 text-bold-700 text-success"> <span class="count"><?= $allabsen; ?></span>
                                                </p>
                                            </div>
                                            <div class="col-3 border-top d-flex  border-right flex-column py-1">
                                                <p class="mb-50">Not Absen <i class="fa fa-times"></i></p>
                                                <p class="font-large-1 text-bold-700 text-info">
                                                    <span class="count">
                                                        <?= $activeemployee - $allabsen; ?></span>
                                                </p>
                                            </div>
                                            <div class="col-3 border-top  border-right d-flex  flex-column py-1">
                                                <p class="mb-50">Absent In <i class="fa fa-clock-o"></i> </p>
                                                <p class="font-large-1 text-bold-700 text-success"> <span class="count"><?= $absentoday; ?></span></p>
                                            </div>

                                            <div class="col-3 border-top d-flex  flex-column py-1">
                                                <p class="mb-50">Absent Out <i class="fa fa-clock-o"></i></p>
                                                <p class="font-large-1 text-bold-700 text-danger">
                                                    <span class="count"> <?= $outabsen; ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-lg-5 col-md-12 col-sm-12 mb-2">
                            <div class="card border border-primary" style="height: 94%;">

                                <div class="card-header d-flex justify-content-between align-items-end" style="padding: 0.7rem 0.8rem; border-bottom: 1px solid #796df1;">
                                    <p class="card-title text-center card-title" style="align-self: center; font-size: 1.1rem;">
                                        <i class="fa fa-venus-mars text-primary"></i> Total Employee Gender
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="gender" class="mb-1"></div>
                                    </div>
                                    <ul class="list-group list-group-flush customer-info mb-2">
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                                <span class="text-bold-600">Male</span>
                                            </div>
                                            <div class="product-result font-weight-bold">
                                                <span class="count"><?= $maleemp; ?></span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                                <span class="text-bold-600">Female</span>
                                            </div>
                                            <div class="product-result font-weight-bold">
                                                <span class="count"><?= $femaleemp; ?></span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 mb-2">
                            <div class="card border border-primary" style="height: 94%;">

                                <div class="card-header d-flex justify-content-between align-items-end" style="padding: 0.7rem 0.8rem; border-bottom: 1px solid #796df1;">
                                    <p class="card-title text-center card-title" style="align-self: center; font-size: 1.1rem;">
                                        <i class="fa fa-line-chart text-primary"></i> Band
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-1 align-bottom" style="padding-top: 70px;">
                                        <canvas id="myChart" style="width:100%;max-width:750px;"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0">

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

<?php } elseif ($this->session->userdata('role') == "pegawai") { ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
                    blur: 10,
                    left: 1,
                    top: 1,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            labels: ['Generasi Z ', 'Millenial', 'Generasi X', 'Baby Boomers'],
            series: [<?= $genz; ?>, <?= $geny; ?>, <?= $genx; ?>, <?= $genbaby; ?>],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            stroke: {
                width: 5
            },
            colors: [$primary, $warning, $danger, $success],
            fill: {
                type: 'gradient',
                gradient: {
                    gradientToColors: [$primary_light, $warning_light, $danger_light, $success]
                }
            }
        }

        var customerChart = new ApexCharts(
            document.querySelector("#gen"),
            customerChartoptions
        );

        customerChart.render();



        var gender = {
            chart: {
                type: 'pie',
                height: 330,
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
            labels: ['Male', 'Female'],
            series: [<?= $maleemp; ?>, <?= $femaleemp; ?>],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            stroke: {
                width: 5
            },
            colors: [$primary, $warning],
            fill: {
                type: 'gradient',
                gradient: {
                    gradientToColors: [$primary_light, $warning_light]
                }
            }
        }

        var gender = new ApexCharts(
            document.querySelector("#gender"),
            gender
        );

        gender.render();




        var goalChartoptions = {
            chart: {
                height: 250,
                type: 'radialBar',
                sparkline: {
                    enabled: true,
                },
                dropShadow: {
                    enabled: true,
                    blur: 3,
                    left: 1,
                    top: 1,
                    opacity: 0.1
                },
            },
            colors: [$primary],
            plotOptions: {
                radialBar: {
                    size: 110,
                    startAngle: -150,
                    endAngle: 150,
                    hollow: {
                        size: '75%',
                    },
                    track: {
                        background: $strok_color,
                        strokeWidth: '20%',
                    },
                    dataLabels: {
                        name: {
                            show: false
                        },
                        value: {
                            offsetY: 10,
                            color: '#99a2ac',
                            fontSize: '3rem'
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'horizontal',
                    shadeIntensity: 0.5,
                    gradientToColors: ['#00b5b5'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                },
            },
            series: [<?= round(($allabsen / $activeemployee) * 100, 1); ?>],
            stroke: {
                lineCap: 'round'
            },

        }

        var goalChart = new ApexCharts(
            document.querySelector("#goal-overview-chart"),
            goalChartoptions
        );

        goalChart.render();



        //bar

        var xValues = ["Non-Band", "A", "B", "C", "D", "E"];
        var yValues = [<?= $nonband; ?>, <?= $bandA; ?>, <?= $bandB; ?>, <?= $bandC; ?>, <?= $bandD; ?>, <?= $bandE; ?>];
        var barColors = [$primary, $success, "blue", "orange", "brown", "red", "green", "blue", "orange", "brown",
            "blue", "orange", "brown"
        ];

        new Chart("myChart", {
            type: "bar",

            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },

            options: {
                scales: {
                    yAxes: [{
                        display: true,
                        stacked: true,
                        ticks: {
                            min: 0, // minimum value
                            max: 50 // maximum value
                        }
                    }]
                },

                legend: {
                    display: false
                },

            }
        });
    });

    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 1000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    const msg = $('#msg').data('msg');

    if (msg == 'waitReq') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,

            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }

        })

        Toast.fire({
            timer: 5000,
            icon: 'info',
            title: 'Your data has been submitted to Admin'
        })
    }

    if (msg == 'success') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,

            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }

        })

        Toast.fire({
            timer: 5000,
            icon: 'success',
            title: 'Your Password was Successfully Changed'
        })
    }
</script>