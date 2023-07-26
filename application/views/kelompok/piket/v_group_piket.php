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
                <div class="col-lg-8 col-md-8 col-sm-8">
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
                                                <div class="col-12 col-sm-2">
                                                    <fieldset>
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">Piket Hadir</label>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">Cadangan Piket</label>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">Lepas Piket</label>
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
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">:</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-12 col-sm-9">
                                                    <fieldset>
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">A (<?= $dateabsen == "" ? "-" : date('j F Y', strtotime($dateabsen)); ?>)</label>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">B</label>
                                                        </div>
                                                        <div class="mb-50">
                                                            <label class="font-weight-bold ml-0">C</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <?php if ($dateabsen != '') { ?>
                                                    <div class="card-body ml-3 mr-3 mt-2" style="background-color: #cfffcd;">
                                                        <ul class="activity-timeline timeline-left list-unstyled">
                                                            <li>
                                                                <div class="timeline-icon bg-success">
                                                                    <i class="feather icon-alert-triangle font-medium-2"></i>
                                                                </div>
                                                                <div class="timeline-info">
                                                                    <p class="font-weight-bold">Data Absen Hari Ini Telah di Submit !!!</p>
                                                                    <span>Terima kasih sudah melakukan absen hari ini.</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="card-body ml-3 mr-3 mt-2" style="background-color: #ffcdcd;">
                                                        <ul class="activity-timeline timeline-left list-unstyled">
                                                            <li>
                                                                <div class="timeline-icon bg-danger">
                                                                    <i class="feather icon-alert-triangle font-medium-2"></i>
                                                                </div>
                                                                <div class="timeline-info">
                                                                    <p class="font-weight-bold">Data Absen Hari Ini Belum di Submit !!!</p>
                                                                    <span>Silahkan lakukan submit data absen hari ini.</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-end bg-primary" style="padding: 0.7rem 0.8rem;">
                                        <p class="card-title text-white text-center" style="align-self: center;">
                                            Input Absensi
                                        </p>

                                        <div class="row pr-1" id="">
                                            <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;" data-toggle="tooltip" data-placement="top">
                                                <p class="font-medium-5 font-weight-bold">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <?php if ($dateabsen == '') { ?>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="col-12 text-center">
                                                    <fieldset>
                                                        <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;" data-toggle="tooltip" data-placement="top" title="Add Cuti" id="addfamily">

                                                            <img src="<?= base_url() ?>assets/images/pengajuan.png" alt="element 02" width="110px">
                                                        </a>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="col-12 text-center">
                                                    <fieldset>
                                                        <a style="border: 1px solid white;background:white;padding: 2px;border-radius: 50px;width: 2rem;height: 2rem;text-align: center; margin-right: 0.3rem;" data-toggle="tooltip" data-placement="top" id="absensudah">
                                                            <img src="<?= base_url() ?>assets/images/pengajuan.png" alt="element 02" width="110px">
                                                        </a>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
    <!-- page users view end -->
</div>

<?php $this->load->view('template/home/footer'); ?>

<script type="text/javascript">
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

    $('#addfamily').on('click', function() {
        $('.AddFamily').modal('show');
    });
    $('#tabletra').on('click', '#hapus', function() {

        var nama = $(this).data("nama");
        const url = $(this).data("url");



        Swal.fire({
            html: '<b>Are You Sure Delete (' + nama + ') ?</b>',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e42728',
            cancelButtonColor: '#1d8c4f',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                })

                Swal.fire({

                    icon: 'success',
                    title: 'Data Successfully Deleted',
                    showConfirmButton: false,
                    timer: 2500
                })
                setTimeout(function() {
                    location.reload();
                }, 500);

            }
        })
    })




    $('#pending').on('click', function() {

        var url = $(this).data("url");
        var active = $(this).data("active");
        var id = $(this).data("id");

        Swal.fire({
            html: '<b>Your data is For Waiting Approval by Admin</b>',
            icon: 'warning',
            confirmButtonColor: '#e42728',
            cancelButtonColor: '#1d8c4f',
            cancelButtonText: 'Close'
        })
    })

    $('#absensudah').on('click', function() {

        var url = $(this).data("url");
        var active = $(this).data("active");
        var id = $(this).data("id");

        Swal.fire({
            html: '<b>Anda Sudah Melakukan Absensi</b>',
            icon: 'warning',
            confirmButtonColor: '#e42728',
            cancelButtonColor: '#1d8c4f',
            cancelButtonText: 'Close'
        })
    })

    $('#cuti_habis').on('click', function() {

        var url = $(this).data("url");
        var active = $(this).data("active");
        var id = $(this).data("id");

        Swal.fire({
            html: '<b>Your Period of Cuti Is Up</b>',
            icon: 'warning',
            confirmButtonColor: '#e42728',
            cancelButtonColor: '#1d8c4f',
            cancelButtonText: 'Close'
        })
    })
</script>

<div class="modal fade AddFamily" tabindex="-1" role="document" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="border-radius: 8px 8px 0 0;">
                <h6 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Tambah Absensi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="font-weight-bold">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-4">
                                    <label for="tanggal">Pilih Tanggal:</label>
                                </div>
                                <div class="col-4">
                                    <input type="date" class="form-control" id="tanggal">
                                </div>
                                <div class="col-4">
                                    <button onclick="tampilkanJadwal()" class="btn btn-info">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                        <form action="<?= base_url() ?>employee/Cuti/addCuti" method="POST" enctype="multipart/form-data">
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
                                                foreach ($dataloadmaster as $peg) { ?>
                                                    <tr>
                                                        <td>
                                                            <div id="hasilNama">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div id="hasilJabatan"></div>
                                                        </td>
                                                        <td>
                                                            <div id="hasilStatusPaket"></div>
                                                        </td>
                                                        <td>
                                                            <div id="hasilKeterangan"></div>
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
                <!-- <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="nipg_pegawai" value="<?= $datapegawai[0]['employee_number']; ?>">
                            <input type="hidden" name="periode" value="<?= (int)date('Y'); ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Total Cuti (Day)</label>
                                    <div class="form-group m-25">
                                        <input type="number" class="form-control" name="total_cuti" max="<?= $valueabsen[0]['cuti_besar']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Date Start</label>
                                    <div class="form-group m-25">
                                        <input type="date" class="form-control" name="date_start" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Date End</label>
                                    <div class="form-group m-25">
                                        <input type="date" class="form-control" name="date_end" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Notes</label>
                                    <div class="form-group m-25">
                                        <textarea type="number" class="form-control" name="notes" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Attachment</label>
                                    <div class="form-group m-25">
                                        <input type="file" class="form-control" name="berkas" id="berkas" Accept="Application/Pdf">
                                    </div>
                                    <small style="color: red;">*pdf only & maks 3Mb</small>
                                </div>
                            </div>
                            <div class="modal-footer p-1 pb-0">
                                <?php if ($sisacuti[0]['sisa_all_cuti'] <= ($ketcuti[0]['cuti_besar'])) { ?>
                                    <?php if ($sisacuti[0]['all_cuti'] == '') { ?>
                                    <?php } else { ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group m-25">
                                                    <small style="color: blue;">*Your Cuti Besar Is Up, You're Sure To Use Cuti Tahunan?</small>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                <?php } ?>
                                <button type="submit" name="add" class="btn btn-primary"><i class="fa fa-save"></i>
                                    Submit</button>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>

<script>
    // Table bantuan jadwal piket (Anda bisa mengganti data berikut sesuai kebutuhan)
    const jadwalPiket = {
        "2023-06-23": {
            "hadir": "piket A",
            "cadangan": "piket B",
            "lepas": "piket C",
            "nama": "Imam",
            "jabatan": "Anggota"
        },
        "2023-06-24": {
            "hadir": "piket B",
            "cadangan": "piket A",
            "lepas": "piket C",
            "nama": "Imam",
            "jabatan": "Anggota"
        },
    };

    async function getDataFromAPI() {
        try {
            const response = await fetch('<?= base_url(); ?>kelompok/Absensi/load'); // Ganti URL dengan endpoint REST API Anda
            const data = await response.json();
            console.log(data);
            return data;
        } catch (error) {
            console.error('Gagal memuat data:', error);
            return [];
        }
    }

    function tampilkanJadwal() {
        const tanggalInput = document.getElementById("tanggal").value;
        const jadwal = jadwalPiket[tanggalInput];
        const data = "<?= base_url(); ?>adminproyek/Activity/load";


        if (jadwal) {
            const hasilNama = document.getElementById("hasilNama");
            hasilNama.innerHTML = `
            ${jadwal.nama}<input type="hidden" class="form-control" name="nama" value="${jadwal.nama}">`;

            const hasilStatusPaket = document.getElementById("hasilStatusPaket");
            hasilStatusPaket.innerHTML = `
            <select class="select2 form-control" name="status_piket" required>
            <option value="Piket Hadir">Piket Hadir</option>
            <option disabled selected>-</option>
            </select>`;

            const hasilJabatan = document.getElementById("hasilJabatan");
            hasilJabatan.innerHTML = `
            ${jadwal.jabatan}<input type="hidden" class="form-control" name="jabatan" value="${jadwal.jabatan}">`;

            const hasilKeterangan = document.getElementById("hasilKeterangan");
            hasilKeterangan.innerHTML = `
            <input type="text" class="form-control" name="keterangan" value="">`;
        } else {
            alert("Jadwal untuk tanggal tersebut belum tersedia.");
        }
    }
</script>