<!-- <div id="msg" data-msg="<?= $this->session->flashdata('msg'); ?>"></div> -->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Absence</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Menu</a>
                            </li>

                            <li class="breadcrumb-item active">Absence </li>
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
                                    <!-- <a data-target=".tambahproject" data-toggle="modal">
                                        <button class="btn btn-info mr-1 mb-1 waves-effect waves-light">
                                            <i class="fa fa-plus-circle"></i> Tambah Timesheet</button>
                                    </a> -->

                                    <!-- <div class="col-md-11">
                                        <?php if ($data_absen == null) { ?>
                                        <a class="btn btn-success btn-sm" href="#" id="submit" class="nav-link">
                                            <i class="fas fa-clock"></i> Clock In
                                        </a>
                                        <a class="btn btn-danger btn-sm disabled" href="#" id="submit" class="nav-link">
                                            <i class="fas fa-clock"></i> Clock Out
                                        </a>
                                        <?php } else { ?>
                                        <a class="btn btn-success btn-sm disabled" href="#" id="submit"
                                            class="nav-link">
                                            <i class="fas fa-clock"></i> Clock In
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#" id="submits" class="nav-link">
                                            <i class="fas fa-clock"></i> Clock Out
                                        </a>
                                        <?php } ?>
                                        <span id="demo"></span>
                                    </div> -->

                                    <!-- <div id="gmap" class=" border border-primary">
                                        <iframe
                                            src="http://maps.google.com/maps?q=-6.2187755,106.8468995&z=18&output=embed"
                                            height="450" width="100%"></iframe>
                                    </div> -->

                                    <div class="table-responsive">
                                        <table class="table zero-configuration table-hover" id="absen">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Clock In (Location)</th>
                                                    <th>Clock Out (Location)</th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($data_absen as $d) {
                                                ?>
                                                    <tr>
                                                        <td><?= $n++; ?></td>
                                                        <td><?= $d['date'] ?></td>
                                                        <td><?= $d['time_in'] ?>
                                                            <button class="badge badge-primary loc location ml-1 border-0 p-50" data-latitude="<?= $d['latitude_in'] ?>" data-longitude="<?= $d['longitude_in'] ?>">
                                                                <i class="fa fa-globe fa-lg"></i>
                                                            </button>
                                                        </td>
                                                        <?php if ($d['time_out'] == null) { ?>
                                                            <td>-</td>
                                                        <?php } else { ?>
                                                            <td><?= $d['time_out'] ?>
                                                                <button class="badge badge-primary loc location ml-1 border-0 p-50" data-latitude="<?= $d['latitude_out'] ?>" data-longitude="<?= $d['longitude_out'] ?>">
                                                                    <i class="fa fa-globe fa-lg"></i>
                                                                </button>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Clock In</th>
                                                    <th>Clock Out</th>
                                                </tr>
                                            </tfoot>

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


<div class="modal fade modalViewMaps" tabindex="-1" role="document" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-primary" style="border-radius: 8px 8px 0 0;">
                <h6 class="modal-title" id="myModalLabel"><i class="fa fa-search"></i> Detail Absence In
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="font-weight-bold">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr></tr>
                </table>

                <iframe id="showInHere" height="400px" width="100%" class="border-0"></iframe>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('template/home/footer'); ?>


<script type="text/javascript">
    //--------------------------------
    //start it right away


    $("#absen").on('click', '.location', function() {
        var la = $(this).data('latitude');
        var long = $(this).data('longitude');
        $('#showInHere').attr("src", "http://maps.google.com/maps?q=" + la + "," + long + "&z=17&output=embed");
        $('.modalViewMaps').modal('show');
    });

    $('.loc').popover({

        title: '<i class="fa fa-map-marker"></i> Location',
        html: true,
        trigger: 'hover',
        placement: 'right',
        content: function() {
            return 'Location In Google Maps';
        }
    });
</script>