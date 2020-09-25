window.onload = function () {
  if (
    navigator.userAgent.indexOf("MSIE") !== -1 ||
    navigator.appVersion.indexOf("Trident/") > 0
  ) {
    /* Microsoft Internet Explorer detected in. */
    function initMap(feature) {
      var map;

      map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: new google.maps.LatLng(46.7948638, -71.3112717),
        styles: [
          {
            elementType: "geometry",
            stylers: [
              {
                color: "#212121",
              },
            ],
          },
          {
            elementType: "labels.icon",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            elementType: "labels.text.stroke",
            stylers: [
              {
                color: "#212121",
              },
            ],
          },
          {
            featureType: "administrative",
            elementType: "geometry",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            featureType: "administrative.country",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#9e9e9e",
              },
            ],
          },
          {
            featureType: "administrative.land_parcel",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {
            featureType: "administrative.locality",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#bdbdbd",
              },
            ],
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [
              {
                color: "#181818",
              },
            ],
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#616161",
              },
            ],
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.stroke",
            stylers: [
              {
                color: "#1b1b1b",
              },
            ],
          },
          {
            featureType: "road",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#2c2c2c",
              },
            ],
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#8a8a8a",
              },
            ],
          },
          {
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              {
                color: "#373737",
              },
            ],
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [
              {
                color: "#3c3c3c",
              },
            ],
          },
          {
            featureType: "road.highway.controlled_access",
            elementType: "geometry",
            stylers: [
              {
                color: "#4e4e4e",
              },
            ],
          },
          {
            featureType: "road.local",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#616161",
              },
            ],
          },
          {
            featureType: "transit",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            featureType: "water",
            elementType: "geometry",
            stylers: [
              {
                color: "#000000",
              },
            ],
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#3d3d3d",
              },
            ],
          },
        ],
      });

      function addMarker(feature) {
        var customMarker =
          "/wp-content/themes/e3m/assets/img/marker-location.svg";

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(46.7948638, -71.3112717),
          icon: customMarker,
          url:
            "https://www.google.ca/maps/place/319+Rue+Franquet,+Qu%C3%A9bec,+QC+G1P+4R4/@46.7948638,-71.3112717,17z/data=!3m1!4b1!4m5!3m4!1s0x4cb89715b980b9ef:0xd0dc5772f81b85ec!8m2!3d46.7948638!4d-71.309083",
          map: map,
          title: "101, rue Arago E, Québec",
        });
        google.maps.event.addListener(marker, "click", function () {
          window.open(marker.url, "_blank");
        });
      }

      addMarker();
    }

    initMap();
  } else {
    function initMap(feature) {
      var map, map2;

      var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(46.7948638, -71.3112717),
        styles: [
          {
            elementType: "geometry",
            stylers: [
              {
                color: "#212121",
              },
            ],
          },
          {
            elementType: "labels.icon",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            elementType: "labels.text.stroke",
            stylers: [
              {
                color: "#212121",
              },
            ],
          },
          {
            featureType: "administrative",
            elementType: "geometry",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            featureType: "administrative.country",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#9e9e9e",
              },
            ],
          },
          {
            featureType: "administrative.land_parcel",
            stylers: [
              {
                visibility: "off",
              },
            ],
          },
          {
            featureType: "administrative.locality",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#bdbdbd",
              },
            ],
          },
          {
            featureType: "poi",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [
              {
                color: "#181818",
              },
            ],
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#616161",
              },
            ],
          },
          {
            featureType: "poi.park",
            elementType: "labels.text.stroke",
            stylers: [
              {
                color: "#1b1b1b",
              },
            ],
          },
          {
            featureType: "road",
            elementType: "geometry.fill",
            stylers: [
              {
                color: "#2c2c2c",
              },
            ],
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#8a8a8a",
              },
            ],
          },
          {
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              {
                color: "#373737",
              },
            ],
          },
          {
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [
              {
                color: "#3c3c3c",
              },
            ],
          },
          {
            featureType: "road.highway.controlled_access",
            elementType: "geometry",
            stylers: [
              {
                color: "#4e4e4e",
              },
            ],
          },
          {
            featureType: "road.local",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#616161",
              },
            ],
          },
          {
            featureType: "transit",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#757575",
              },
            ],
          },
          {
            featureType: "water",
            elementType: "geometry",
            stylers: [
              {
                color: "#000000",
              },
            ],
          },
          {
            featureType: "water",
            elementType: "labels.text.fill",
            stylers: [
              {
                color: "#3d3d3d",
              },
            ],
          },
        ],
      };
      map = new google.maps.Map(document.getElementById("map"), myOptions);

      map2 = new google.maps.Map(
        document.getElementById("map_canvas2"),
        myOptions
      );

      function addMarker(feature) {
        var customMarker =
          "/wp-content/themes/e3m/assets/img/marker-location.svg";

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(46.7948638, -71.3112717),
          icon: customMarker,
          url:
            "https://www.google.ca/maps/place/319+Rue+Franquet,+Qu%C3%A9bec,+QC+G1P+4R4/@46.7948638,-71.3112717,17z/data=!3m1!4b1!4m5!3m4!1s0x4cb89715b980b9ef:0xd0dc5772f81b85ec!8m2!3d46.7948638!4d-71.309083",
          map: map,
          title: "101, rue Arago E, Québec",
        });
        google.maps.event.addListener(marker, "click", function () {
          window.open(marker.url, "_blank");
        });

        var customMarker2 =
          "/wp-content/themes/e3m/assets/img/marker-location.svg";

        var marker2 = new google.maps.Marker({
          position: new google.maps.LatLng(46.7948638, -71.3112717),
          icon: customMarker2,
          url:
            "https://www.google.ca/maps/place/319+Rue+Franquet,+Qu%C3%A9bec,+QC+G1P+4R4/@46.7948638,-71.3112717,17z/data=!3m1!4b1!4m5!3m4!1s0x4cb89715b980b9ef:0xd0dc5772f81b85ec!8m2!3d46.7948638!4d-71.309083",
          map: map2,
          title: "101, rue Arago E, Québec",
        });
        google.maps.event.addListener(marker2, "click", function () {
          window.open(marker2.url, "_blank");
        });
      }

      addMarker();
    }

    initMap();
  }
};
