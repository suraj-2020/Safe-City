var lat=0;
      var lon=0;

      var markerArray=[];
      var i=0;
      var a=0;

      function initAutocomplete() {
                
        var mapCanvas = document.getElementById("map");
        var myCenter = new google.maps.LatLng(13.111580118251648,80.2606201171875);
        var mapOptions = {center: myCenter, zoom: 18};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        markerArray.push(marker);


        

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            c_lat = lat;
            c_lon = lon;
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


        google.maps.event.addListener(map, 'click', function(event) {
          placeMarker(map, event.latLng,1);
        });



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
  //   b = prompt("Enter the type of crime : Accidents, Theft, Harrasment")
  //   a = prompt("Enter 1 if you witnessed the crime, Else enter No");
  //   document.getElementById("icrime").value = b;
  //      document.getElementById("ilat").value = lat;
  // document.getElementById("ilon").value = lon;
  //  document.getElementById("ivalue").value = a;
  //  document.getElementById("ibutton").click();
  });

//    document.getElementById("ilat").value = lat;
//   document.getElementById("ilon").value = lon;
 //   document.getElementById("ivalue").value = a;
  //  document.getElementById("ibutton").click();


}



        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

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
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
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


function submit_form(variable){
  // alert(lat());
  // alert(lon());
  // alert(variable);
  // alert(document.getElementById('klat'));
  document.getElementById(variable+'lat').value = lat();
  document.getElementById(variable+'lon').value = lon();
  document.getElementById(variable+'area').value = variable;
  document.getElementById(variable+'_button').click();
}

