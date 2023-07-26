<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT
            &copy; 2023<a class="text-bold-800 grey darken-2">Prayoga Febriandika</a></span>
    </p>
</footer>
<!-- END: Footer-->
<?php $this->load->view('template/home/js'); ?>
<!-- END: Page Vendor JS-->


<script>
    var now = new Date(<?php echo time() * 1000 ?>);

    function updateTime() {
        var nowMS = now.getTime();
        nowMS += 1000;
        now.setTime(nowMS);
        var clock = document.getElementById('qwe');
        time = "";
        if (clock) {
            clock.innerHTML = time.concat(now.getHours(), ":", now.getMinutes(), ":", now.getSeconds());
        }
    }

    function startInterval() {
        setInterval('updateTime();', 1000);
    }
    startInterval();


    var x = document.getElementById("demo");
    var longitude;
    var latitude;
    getLocation();

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;
        // x.innerHTML = "Latitude: " + position.coords.latitude + "& Longitude: " + position.coords.longitude;
    }



    $("#absenIN").click(function() {
        if (!latitude || !longitude) {
            Swal.fire(
                'Gagal!',
                'Data Koordinat tidak dapat ditemukan, Harap aktifkan Permission Location',
                'error'
            )
        } else {
            Swal.fire({
                title: 'Notifikasi',
                text: "Apakah anda yakin untuk Absen?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<i class="fa fa-check"></i> Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>employee/absence/submit_absence",
                        data: {
                            'latitude': latitude,
                            'longitude': longitude
                        },
                        cache: false,
                        success: function(response) {
                            res = JSON.parse(response);
                            if (res['status'] == 'false') {
                                Swal.fire(
                                    'Gagal!',
                                    'Anda Hanya Bisa Absen Datang/Pulang 1x',
                                    'error'
                                ).then((result) => {
                                    // window.location = "<?php echo base_url(); ?>employee/absence";
                                });
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    html: '<b>Anda Berhasil Absen Masuk</b>',
                                    showConfirmButton: false,
                                    timer: 3500
                                })
                                setTimeout(function() {
                                    window.location =
                                        "<?php echo base_url(); ?>Employee/Absence";
                                }, 500);

                            }

                        },
                        failure: function(response) {
                            Swal.fire(
                                'Gagal!',
                                'Anda Gagal Absen',
                                'error'
                            )
                        }
                    });

                }
            })
        }

    });
    $("#absenDONE").click(function() {

        Swal.fire({
            icon: 'success',
            html: '<b>Anda Sudah Absen Hari Ini</b>',
            showConfirmButton: false,
            timer: 3500
        })
        setTimeout(function() {
            window.location = "<?php echo base_url(); ?>Employee/Absence";
        }, 500);
    })
    $("#absenOUT").click(function() {
        if (!latitude || !longitude) {
            Swal.fire(
                'Gagal!',
                'Data Koordinat tidak dapat ditemukan, Harap aktifkan Permission Location',
                'error'
            )
        } else {
            Swal.fire({
                title: 'Notifikasi',
                text: "Apakah anda yakin untuk Absen?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<i class="fa fa-check"></i> Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>Employee/Absence/submit_absence",
                        data: {
                            'latitude': latitude,
                            'longitude': longitude
                        },
                        cache: false,
                        success: function(response) {
                            res = JSON.parse(response);
                            if (res['status'] == 'false') {
                                Swal.fire(
                                    'Gagal!',
                                    'Anda Hanya Bisa Absen Datang/Pulang 1x',
                                    'error'
                                ).then((result) => {
                                    window.location =
                                        "<?php echo base_url(); ?>Employee/Absence";
                                });
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    html: '<b>Anda Berhasil Absen Keluar</b>',
                                    showConfirmButton: false,
                                    timer: 3500
                                })
                                setTimeout(function() {
                                    window.location =
                                        "<?php echo base_url(); ?>Employee/Absence";
                                }, 500);
                            }

                        },
                        failure: function(response) {
                            Swal.fire(
                                'Gagal!',
                                'Anda Gagal Absen',
                                'error'
                            )
                        }
                    });

                }
            })
        }
    });
</script>

</body>
<!-- END: Body-->

</html>