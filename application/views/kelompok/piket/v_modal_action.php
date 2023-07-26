<section id="modal-sizes">

    <!-- Modal rejcet -->
    <div class="modal-content">

        <div class="modal-header" style="background-color: #b6e6f4;">
            <h6 class="modal-title" id="myModalLabel"><i class="fa fa-clipboard"></i> Piket <?= date('j F Y', strtotime($datatanggal)); ?></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="font-weight-bold">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="<?= base_url() ?>kelompok/Absensi/addPiket" method="POST" enctype="multipart/form-data">
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Status Piket</th>
                                                    <th>Ket.Ijin/ Sakit/ dll</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($dataup as $peg) { ?>
                                                    <tr>
                                                        <td>
                                                            <input type="hidden" class="form-control" name="urutan[]" value=" <?= $n; ?>">
                                                            <input type="hidden" class="form-control" name="tgl_absen[]" value=" <?= $datatanggal; ?>">
                                                            <input type="hidden" class="form-control" name="group_piket[]" value=" <?= $peg['group_piket']; ?>">
                                                            <input type="hidden" class="form-control" name="id_parem" value=" <?= $dataid; ?>">
                                                            <?= $peg['nama']; ?><input type="hidden" class="form-control" name="nama[]" value=" <?= $peg['nama']; ?>">
                                                        </td>
                                                        <td>
                                                            <?= $peg['jabatan']; ?><input type="hidden" class="form-control" name="jabatan[]" value=" <?= $peg['jabatan']; ?>">
                                                        </td>
                                                        <td>
                                                            <fieldset class="form-group">
                                                                <select class="form-control" name="status_piket[]" required>
                                                                    <option value="<?= $n <= "3" && $peg['group_piket'] == "A" ? "Piket Hadir" : ""; ?><?= $n <= "3" && $peg['group_piket'] == "B" ? "Piket Hadir" : ""; ?><?= $n <= "3" && $peg['group_piket'] == "C" ? "Piket Hadir" : ""; ?><?= $n >= "4" && $peg['group_piket'] == "B" ? "Cadangan Piket" : ""; ?><?= $n >= "4" && $peg['group_piket'] == "A" ? "Cadangan Piket" : ""; ?><?= $n >= "6" && $peg['group_piket'] == "C" ? "Lepas Piket" : ""; ?>">

                                                                        <?= $n <= "3" && $peg['group_piket'] == "A" ? "Piket Hadir" : ""; ?>
                                                                        <?= $n <= "3" && $peg['group_piket'] == "B" ? "Piket Hadir" : ""; ?>
                                                                        <?= $n <= "3" && $peg['group_piket'] == "C" ? "Piket Hadir" : ""; ?>
                                                                        <?= $n >= "4" && $peg['group_piket'] == "B" ? "Cadangan Piket" : ""; ?>
                                                                        <?= $n >= "4" && $peg['group_piket'] == "A" ? "Cadangan Piket" : ""; ?>
                                                                        <?= $n >= "6" && $peg['group_piket'] == "C" ? "Lepas Piket" : ""; ?>
                                                                    </option>
                                                                    <option value="Piket Hadir">Piket Hadir</option>
                                                                    <option value="Cadangan Piket">Cadangan Piket</option>
                                                                    <option value="Lepas Piket">Lepas Piket</option>
                                                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                                                </select>
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="keterangan[]">
                                                        </td>
                                                    </tr>
                                                <?php $n++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer p-1 pb-0">
                                <button type="submit" name="add" class="btn btn-primary"><i class="fa fa-save"></i>
                                    Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>