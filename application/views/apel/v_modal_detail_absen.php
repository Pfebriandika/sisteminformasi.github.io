<section id="modal-sizes">

    <!-- Modal rejcet -->
    <div class="modal-content">

        <div class="modal-header" style="background-color: #b6e6f4;">
            <h6 class="modal-title" id="myModalLabel"><i class="fa fa-clipboard"></i> Detail <?= $datatipe; ?></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="font-weight-bold">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th class="text-center">Group Piket</th>
                                        <th>Ket. Ijin/Sakit/dll</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1;
                                    foreach ($datadetail as $peg) { ?>
                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td><?= $peg['nama']; ?></td>
                                            <td><?= $peg['jabatan']; ?></td>
                                            <td class="text-center"><?= $peg['group_piket']; ?></td>
                                            <td><?= $peg['keterangan']; ?></td>
                                        </tr>
                                    <?php $n++;
                                    } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th class="text-center">Group Piket</th>
                                        <th>Ket. Ijin/Sakit/dll</th>
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