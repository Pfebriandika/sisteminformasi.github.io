<div id="msg" data-msg="<?= $this->session->flashdata('msg'); ?>"></div>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Absensi Anggota</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=#>Menu</a>
                            </li>

                            <li class="breadcrumb-item active">Absensi Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-end bg-info" style="padding: 0.7rem 0.8rem;">
                                        <p class="card-title text-white text-center" style="align-self: center;">
                                            Informasi Group Piket
                                        </p>

                                        <div class="row pr-1" id="">
                                            <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;" data-toggle="tooltip" data-placement="top">
                                                <p class="font-medium-5 font-weight-bold">
                                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-content">
                                                        <div class="table-responsive">
                                                            <table class="table zero-configuration" id="tableAssesor">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Piket</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $n = 1;
                                                                    foreach ($dataloadmaster as $peg) { ?>
                                                                        <tr>
                                                                            <td><?= $n; ?></td>
                                                                            <td><?= $peg['piket']; ?></td>
                                                                            <td><?= date('j F Y', strtotime($peg['tanggal'])); ?></td>
                                                                            <td>
                                                                                <?php if ($peg['status'] == 1) { ?>
                                                                                    <button class="btn btn-outline-success btn-sm">Absen Sudah Input</button>
                                                                                <?php } else { ?>
                                                                                    <button class="btn btn-outline-danger btn-sm">Absen Belum Terinput</button>
                                                                                <?php } ?></button>
                                                                            </td>
                                                                            <td>
                                                                                <?php if ($peg['status'] == 1) { ?>
                                                                                <?php } else { ?>
                                                                                    <a id="detail" data-toggle="tooltip" data-id="<?= $peg['id']; ?>" data-piket="<?= $peg['piket']; ?>" data-tanggal="<?= $peg['tanggal']; ?>" data-url="<?= base_url('kelompok/Absensi/ModalFollowUp'); ?>" data-placement="bottom" title="Detail">
                                                                                        <button class="btn btn-icon btn-relief-primary waves-effect waves-light btn-sm">
                                                                                            +
                                                                                        </button>
                                                                                    </a>
                                                                                <?php } ?></button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php $n++;
                                                                    } ?>

                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama</th>
                                                                        <th>Jabatan</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
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
    </div>
</div>

<div class="modal fade" id="approvalmodal" tabindex="-1" role="document" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content" id="tampilapproval">

        </div>
    </div>
</div>

<?php $this->load->view('template/home/footer'); ?>

<script type="text/javascript">
    $('#tableAssesor').on('click', '#detail', function() {

        var id = $(this).data('id');
        var piket = $(this).data('piket');
        var tanggal = $(this).data('tanggal');
        var url = $(this).data('url');
        $.ajax({
            url: url,
            method: "POST",
            data: {
                'id': id,
                'piket': piket,
                'tanggal': tanggal
            },
            success: function(data) {
                $('#approvalmodal').modal('show');
                $('#tampilapproval').html(data);
            },
        })
    })

    $('#StatusRequest').on('click', function() {
        var id = $(this).data('id');
        var type = $(this).data('type');
        var nipg = $(this).data('nipg');
        $.ajax({
            url: $(this).data('url'),
            method: "POST",
            data: {
                'id': id,
                'type': type,
                'nipg': nipg
            },
        })
    });

    function sweetfunction() {
        const msg = $('#msg').data('msg');

        if (msg == 1) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,

                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }

            })

            Toast.fire({
                timer: 2500,
                icon: 'success',
                title: 'Data Successfully Added'

            })


        } else if (msg == 2) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,

                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }

            })

            Toast.fire({
                timer: 2500,
                icon: 'error',
                title: 'Data Sudah Ada'

            })
        } else if (msg == 'update') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,

                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }

            })

            Toast.fire({
                timer: 2500,
                icon: 'success',
                title: 'Data Successfully Updated'

            })

        }


    }
</script>