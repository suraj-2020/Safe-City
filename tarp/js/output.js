var map, heatmap;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: {
      lat: 37.775,
      lng: -122.434
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            //var myCenter = new google.maps.LatLng(13.111580118251648,80.2606201171875);
            //alert(myCenter);
            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            //infoWindow.open(map);
            map.setCenter(pos);
            placeMarker(map,pos,0);
            //placeMarker(map,pos);
          }, function() {
            //handleLocationError(true, infoWindow, map.getCenter());
          });
        } 

  heatmap = new google.maps.visualization.HeatmapLayer({
    data: getPoints(),
    map: map
  });


function toggleHeatmap() {
  heatmap.setMap(heatmap.getMap() ? null : map);
}

function changeGradient() {
  var gradient = [
    'rgba(0, 255, 255, 0)',
    'rgba(0, 255, 255, 1)',
    'rgba(0, 191, 255, 1)',
    'rgba(0, 127, 255, 1)',
    'rgba(0, 63, 255, 1)',
    'rgba(0, 0, 255, 1)',
    'rgba(0, 0, 223, 1)',
    'rgba(0, 0, 191, 1)',
    'rgba(0, 0, 159, 1)',
    'rgba(0, 0, 127, 1)',
    'rgba(63, 0, 91, 1)',
    'rgba(127, 0, 63, 1)',
    'rgba(191, 0, 31, 1)',
    'rgba(255, 0, 0, 1)'
  ]
  heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
}

function changeRadius() {
  heatmap.set('radius', heatmap.get('radius') ? null : 20);
}

function changeOpacity() {
  heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
}

function placeMarker(map, location,tag) {
 lat=location.lat;
 lon=location.lng;
 lat_new = lat;
 lon_new = lon;
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  
  markerArray.push(marker);
  markerArray[i++].setMap(null);
  marker.setMap(map);

  if(tag==0){
    var infowindow = new google.maps.InfoWindow({
    content: 'You are here'
  });
  }
  else{
    //var infowindow = new google.maps.InfoWindow({
      //content: ''
    //});
  }
  infowindow.open(map,marker);
  google.maps.event.addListener(marker,'click',function() {
  });



}
function getPoints() {
    var abc = [];
    for (var i=0;i<+lat.length;i++){
      abc.push(new google.maps.LatLng(lat[i], lon[i]));
    }
    
    return abc;
  }

  changeRadius();
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
