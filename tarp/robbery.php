  <?php

include 'topbar.php';

?>

   <div class="container-fluid">




    <script src="js/clickmap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84&libraries=places&callback=initAutocomplete"
         async defer></script>
    
  <input id="pac-input" class="controls" type="text" placeholder="Search Box">
  <div id="map" style="max-height: 80%;"></div>
  <div class="btn-class">
    <br>
  <a name="kidnap" class="btn" onclick="submit_form('robbery')">Submit</a>
</div>
    </div>


<form action="request.php" method="POST">
      <input type="text" name="lat" id="robberylat" hidden>
      <input type="text" name="lon" id="robberylon" hidden>
      <input type="text" name="area" id="robberyarea" hidden>
	  <input type="text" name="check" value="4" hidden>
      <button hidden name="button" id="robbery_button"></button>
    </form>


    <?php

include 'bottombar.php';

?>
