<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT
            &copy; 2023<a class="text-bold-800 grey darken-2">Prayoga Febriandika</a></span>
    </p>
</footer>
<!-- END: Footer-->
<!-- BEGIN: Vendor JS-->
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<!-- <script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"> -->
</script>
<!-- <script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"> -->
</script>
<!-- <script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/buttons.print.min.js"> -->
</script>
<!-- <script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"> -->
</script>
<!-- <script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"> -->
</script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/extensions/sweetalert2.all.min.js">
</script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/extensions/polyfill.min.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js">
</script>
<!-- SELETC2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- NEDSELEk2 -->


<!-- BEGIN: Theme JS-->
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/core/app-menu.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/core/app.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js">
</script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/scripts/datatables/datatable.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
<script src="<?= base_url() ?>template/template_admin8/app-assets/js/scripts/pages/app-user.js"></script>
<!-- END: Page JS-->


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
</script>

</body>
<!-- END: Body-->

</html>