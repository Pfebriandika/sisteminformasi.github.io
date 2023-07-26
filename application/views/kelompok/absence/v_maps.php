<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Tutorial Google Map - Petani Kode</title>

    <script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>
    <script>
    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-6.2187755, 106.8468995),
            zoom: 18,
            mapTypeId: 'hybrid'
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // membuat Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-6.2187755, 106.8468995),
            map: peta
        });

    }
    // event jendela di-load
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>

<body>

    <!-- <div id="googleMap" style="width:100%;height:380px;"></div> -->
    <iframe src="http://maps.google.com/maps?q=-6.2187755,106.8468995&z=18&output=embed" height="450"
        width="600"></iframe>

</body>

</html>