<script>
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.2), zoom: 10
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
</script>

<h1>Results Verification Page Tony Chen</h1>

<p>Your name is "fname" "lname"</p>
<div class="row">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSatbgSXdcjSKksxTnlUxSc86pW1T2Vz8&callback=myMap"></script>
    <div id="map" style="width:400px;height:400px">
    </div>