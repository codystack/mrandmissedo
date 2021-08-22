<?php
include "./components/header.php";
include "./components/navbardark.php";
?>

  <section class="py-15 py-xl-20">
    <div class="container mt-5 mt-lg-10">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1>Interested in working together? Contact!</h1>
          <hr class="my-4 fw-25 ml-0">
          <ul class="list-group list-group-minimal">
            <li class="list-group-item d-flex align-items-center">
              <span class="w-25 text-muted">Email</span>
              info@mrandmrsedo.org
            </li>
            <li class="list-group-item d-flex align-items-center">
              <span class="w-25 text-muted">Phone</span>
              08163171634 | 08188570816
            </li>
          </ul>
        </div>
        <div class="col-lg-5">
          <div class="media equal-1-1">
            <div id="map1" class="map"></div>
          </div>
          <div class="card bg-black text-white">
            <div class="card-body">
              <h5>Edo State <span class="font-weight-bold d-block">Benin City</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- footer -->
  <footer class="pt-7 pb-7 bg-black inverted">
    <div class="container">
      <div class="row g-0 g-lg-6 text-secondary">
        <div class="col-lg-6 text-lg-end order-lg-2">
            <p>Built by <a href="https://instagram.com/phatboitee">@TeeGee</a></p>
        </div>
        <div class="col-lg-6 order-lg-1">
          <p>© <script>document.write(new Date().getFullYear());</script> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    function initMap() {
      var latlng = new google.maps.LatLng(6.339185, 5.617447);

      var myOptions = {
        zoom: 12,
        center: latlng,
        disableDefaultUI: true,
        styles: [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#c9c9c9"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ]
      };

      var map = new google.maps.Map(document.getElementById("map1"), myOptions);

      map.panBy(-100, -40);

      var myMarker = new google.maps.Marker(
        {
          position: latlng,
          map: map,
          icon: 'assets/images/svg/pin.svg'
        });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew&callback=initMap"
    async defer></script>

  <!-- javascript -->
  <script src="assets/js/vendor.bundle.js"></script>
  <script src="assets/js/index.bundle.js"></script></body>

</html>