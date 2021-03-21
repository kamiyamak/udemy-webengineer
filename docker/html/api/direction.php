<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
        <link rel="stylesheet" href="./style.css">
            <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #map {
                height: 100%;
            }
            </style>
    </head>
    <body>
      <div id="map"></div>
      <script>
        function initMap() {
          var london = {lat: 51.50, lng: -0.11};
          var birmingham = {lat: 52.48, lng: -1.89};

          var map = new google.maps.Map(document.getElementById('map'), {
            center: london,
            scrollwheel: false,
            zoom: 7
          });

          var directionsDisplay = new google.maps.DirectionsRenderer({
            map: map
          });

          // Set destination, origin and travel mode.
          var request = {
            destination: birmingham,
            origin: london,
            travelMode: 'DRIVING'
          };

          // Pass the directions request to the directions service.
          var directionsService = new google.maps.DirectionsService();
          directionsService.route(request, function(response, status) {
            if (status == 'OK') {
              // Display the route on the map.
              directionsDisplay.setDirections(response);
            }
          });
        }
      </script>



    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_ID&callback=initMap"
      async
    ></script>
  </body>
</html>