<?php

include 'topbar.php';

?>

    <div class="container-fluid">


    <script type="text/javascript" src="js/latlon.js"></script>


    <script src="js/basicmap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84&libraries=places&callback=initAutocomplete"
         async defer></script>
    
  <input id="pac-input" class="controls" type="text" placeholder="Search Box">
  <div id="map"></div>

    </div>


<?php

include 'bottombar.php';

?>


    