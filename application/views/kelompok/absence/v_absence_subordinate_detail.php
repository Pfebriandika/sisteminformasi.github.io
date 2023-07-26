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
                                    <div class="table-responsive">
                                        <table class="table zero-configuration table-hover">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Mulai</th>
                                                    <th>Selesai</th>
                                                    <th>Durasi (Jam,Menit)</th>
                                                    <th>Project</th>
                                                    <th>Activity</th>
                                                    <th>Keterangan</th>
                                                    <th>Status</th>
                                                    <th>Documentation</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($datatime as $jt) {
                                                    if($jt['status']==0) $status='Waiting for Approval';
                                                    else if($jt['status']==1) $status='Approved';
                                                    else if($jt['status']==2) $status='Rejected';

                                                    $date_a = new DateTime($jt['tanggal']." ".$jt['selesai']);
                                                    $date_b = new DateTime($jt['tanggal']." ".$jt['mulai']);
                                                    $interval = date_diff($date_a,$date_b);

                                                ?>
                                                    <tr>
                                                        <td><?= $n; ?></td>
                                                        <td><?= $jt['tanggal']; ?></td>
                                                        <td><?= $jt['mulai']; ?></td>
                                                        <td><?= $jt['selesai']; ?></td>
                                                        <td><?php echo $interval->format('%h:%i'); ?></td>
                                                        <td><?= $jt['project_name']; ?></td>
                                                        <td><?= $jt['activity']; ?></td>
                                                        <td><?= $jt['keterangan']; ?></td>
                                                        <td><?= $status; ?></td>
                                                        <td><?php 
                                                                if($jt['attachment']!=NULL){ ?>
                                                                    <a href="<?= base_url(); ?>file/timesheet/<?= $jt['attachment']; ?>">
                                                                        <span class="btn btn-icon bg-gradient-danger waves-effect waves-light">
                                                                            <i class="fa fa-file-pdf-o" ></i> Download
                                                                        </span>
                                                                    </a>
                                                            <?php }
                                                            ?>
                                                        </td>

                                                        <td>
                                                            <?php 
                                                                if($jt['status']!=0) echo "-";
                                                                else if($jt['status']==0){
                                                                    $params_approve =  base64_encode($jt['id'].'#'.$jt['employee_number'].'#'.$jt['project'].'#1');
                                                                    $params_reject =  base64_encode($jt['id'].'#'.$jt['employee_number'].'#'.$jt['project'].'#2');


                                                            ?>
                                                                <div style="width: max-content;">
                                                                    <a href="<?= base_url(); ?>employee/timesheet/subordinate_action/<?= $params_approve; ?>">
                                                                        <span class="btn btn-icon bg-gradient-success waves-effect waves-light">
                                                                           Approve
                                                                        </span>
                                                                    </a>
                                                                    <a href="<?= base_url(); ?>employee/timesheet/subordinate_action/<?= $params_reject; ?>">
                                                                        <span class="btn btn-icon bg-gradient-danger waves-effect waves-light">
                                                                           Reject
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            <?php }
                                                            ?>
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