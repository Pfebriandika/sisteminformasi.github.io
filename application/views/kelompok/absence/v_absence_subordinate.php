<div id="msg" data-msg="<?= $this->session->flashdata('msg'); ?>"></div>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Timesheet Subordinate</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Menu</a>
                            </li>

                            <li class="breadcrumb-item active">Timesheet </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <a data-target=".tambahproject" data-toggle="modal">
                                        <button class="btn btn-info mr-1 mb-1 waves-effect waves-light">
                                            <i class="fa fa-plus-circle"></i> Tambah Timesheet</button>
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table zero-configuration table-hover">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Employee Number</th>
                                                    <th>Name</th>
                                                    <th>Project</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($datatime as $jt) {
                                                    $url = base64_encode($jt['employee_number'] . "#" . $jt['id_project']);
                                                ?>
                                                    <tr>
                                                        <td><?= $n; ?></td>
                                                        <td><?= $jt['employee_number']; ?></td>
                                                        <td><?= $jt['full_name']; ?></td>
                                                        <td><?= $jt['project_name']; ?></td>
                                                        <td><?= $jt['jabatan']; ?></td>

                                                        <td>
                                                            <?php
                                                            $tmp = $controller->Pegawai_model->getTimesheetPending($jt['employee_number'], $jt['id_project']);
                                                            if (isset($tmp->jumlah)) {
                                                                if ($tmp->jumlah == 0) {
                                                                    echo "<button class='btn btn-outline-success btn-sm'>All Data Approved </button>";
                                                                } else {
                                                                    echo "<button class='btn btn-outline-success btn-sm'>Waiting for Approval = " . $tmp->jumlah . "</button>";
                                                                }
                                                            } ?>

                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url() . 'employee/timesheet/subordinate_detail/' . $url ?>">
                                                                <span class="btn btn-icon bg-gradient-primary waves-effect
                                                                    waves-light"><i class="fa fa-search-plus" title="Lihat Timesheet"></i>
                                                                </span>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                <?php $n++;
                                                } ?>
                                            </tbody>

                                        </table>

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

<?php $this->load->view('modal/employee/v_modal_timesheet'); ?>