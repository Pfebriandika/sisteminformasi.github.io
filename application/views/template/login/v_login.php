<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="<?= base_url() ?>assets/images/komp.gif" alt="branding logo" style="width: 340px;">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Sistem Informasi Sederhana.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <!-- <?= $this->session->flashdata('msg'); ?> -->
                                                <form action="<?php echo base_url() . 'Login' ?>" method="post">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" style="background-color: #ffff; border:1%;"><i class="feather icon-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Your NIP" id="username" name="username">
                                                    </div>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" style="background-color: #ffff; border:1%;"><i class="feather icon-lock"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                                        <div class="input-group-append" id="toggle" onclick="showHide();">
                                                            <span class="input-group-text" style="background-color: #ffff; border:1%;">
                                                                <i class="feather icon-eye" aria-hidden="true"></i>

                                                            </span>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline" name="login" value="login">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('msg') == 'usernamepasswordsalah') { ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            Swal.fire({

                icon: 'error',
                title: 'Username atau Password Salah !!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('msg') == 'usernametidakaktif') { ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            Swal.fire({

                icon: 'warning',
                title: 'Username Anda Tidak Aktif !!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php } ?>

    <script>
        const password = document.getElementById('password');

        function showHide() {
            if (password.type === 'password') {
                password.setAttribute('type', 'text');

            } else {
                password.setAttribute('type', 'password');

            }
        }
    </script>