<div id="msg" data-msg="<?= $this->session->flashdata('msg'); ?>"></div>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Absent</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Menu</a>
                            </li>

                            <li class="breadcrumb-item active">Absent </li>
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
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $start ?>">
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
                </section>
            </section>
        </div>

    </div>

</div>

<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/jquery-3.5.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>


<script>
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