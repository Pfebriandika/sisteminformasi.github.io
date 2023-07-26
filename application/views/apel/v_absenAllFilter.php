<div id="msg" data-msg="<?= $this->session->flashdata('msg'); ?>"></div>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Absen</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Menu</a>
                            </li>

                            <li class="breadcrumb-item active">Absen </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="basic-datatable">
                <section class="users-list-wrapper">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Filters</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                    <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="users-list-filter">
                                    <form role="form" action="<?= base_url('apel/Absen/filter') ?>" method="post">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $tanggalfilter ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6" style="align-self: center; width:max-content">
                                                <button type="submit" class="btn btn-icon btn-primary" name="filter_tgl">
                                                    <i class="feather icon-filter"></i> Filter
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-end bg-info" style="padding: 0.7rem 0.8rem;">
                            <p class="card-title text-white text-center" style="align-self: center;">
                                Informasi Total Piket
                            </p>

                            <div class="row pr-1" id="">
                                <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;" data-toggle="tooltip" data-placement="top">
                                    <p class="font-medium-5 font-weight-bold">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="card-content" id="tableAssesor">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <fieldset>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">Total Piket Hadir</label>
                                            </div>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">Total Cadangan Piket</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-1">
                                        <fieldset>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">:</label>
                                            </div>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">:</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <fieldset>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">
                                                    <a id="detail" data-toggle="tooltip" data-parent="<?= $tanggalfilter; ?>" data-tipe="<?= $statushadir; ?>" data-url="<?= base_url('apel/Absen/ModalDetail'); ?>" data-placement="bottom" title="Detail">
                                                        <button class="btn btn-icon btn-relief-primary waves-effect waves-light btn-sm">
                                                            <?= $datapikethadir ?>
                                                        </button>
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">
                                                    <a id="detail" data-toggle="tooltip" data-parent="<?= $tanggalfilter; ?>" data-tipe="<?= $statuscadangan; ?>" data-url="<?= base_url('apel/Absen/ModalDetail'); ?>" data-placement="bottom" title="Detail">
                                                        <button class="btn btn-icon btn-relief-primary waves-effect waves-light btn-sm">
                                                            <?= $datacadangan ?>
                                                        </button>
                                                    </a>
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <fieldset>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">Total Lepas Piket</label>
                                            </div>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">Total Izin/Sakit/Dll</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-1">
                                        <fieldset>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">:</label>
                                            </div>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">:</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <fieldset>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">
                                                    <a id="detail" data-toggle="tooltip" data-parent="<?= $tanggalfilter; ?>" data-tipe="<?= $statuslepas; ?>" data-url="<?= base_url('apel/Absen/ModalDetail'); ?>" data-placement="bottom" title="Detail">
                                                        <button class="btn btn-icon btn-relief-primary waves-effect waves-light btn-sm">
                                                            <?= $datalepaspiket ?>
                                                        </button>
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="mb-50">
                                                <label class="font-weight-bold ml-0">
                                                    <a id="detail" data-toggle="tooltip" data-parent="<?= $tanggalfilter; ?>" data-tipe="<?= $statustidakhadir; ?>" data-url="<?= base_url('apel/Absen/ModalDetail'); ?>" data-placement="bottom" title="Detail">
                                                        <button class="btn btn-icon btn-relief-primary waves-effect waves-light btn-sm">
                                                            <?= $datatidakhadir ?>
                                                        </button>
                                                    </a>
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>

    </div>

</div>

<div class="modal fade" id="approvalmodal" tabindex="-1" role="document" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content" id="tampilapproval">

        </div>
    </div>
</div>


<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/jquery-3.5.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/jquery.dataTables.min.js"></script>
<script>
    $('#tableAssesor').on('click', '#detail', function() {

        var parent = $(this).data('parent');
        var tipe = $(this).data('tipe');
        var url = $(this).data('url');
        $.ajax({
            url: url,
            method: "POST",
            data: {
                'parent': parent,
                'tipe': tipe
            },
            success: function(data) {
                $('#approvalmodal').modal('show');
                $('#tampilapproval').html(data);
            },
        })
    })

    $('#dataabsen').DataTable({
        "responsive": true,
        dom: 'Bflrtip',
        "bScrollCollapse": true,
        fixedHeader: true,
        buttons: [{
                extend: 'excel',
            },
            {
                extend: 'pdf',
                orientation: 'potrait',
                pageSize: 'A4',
                customize: function(win) {
                    $(win.document)
                        .css('font-size', '16pt')
                        .prepend(
                            '< style="position:absolute; top:0; left:0;" />'
                        );
                }
            },
            {
                extend: 'print',
                orientation: 'potrait',
                pageSize: 'A4',
            }
        ],
        orderCellsTop: true,
    });
</script>