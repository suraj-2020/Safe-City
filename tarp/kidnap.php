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
  <a name="kidnap" class="btn" onclick="
alert('THANKS FOR THE CONTRIBUTION YOUR DATA HAS BEEN REGISTERED ');
submit_form('kidnap')">Submit</a>
  </div>
</div>
    <!-- Hidden Form -->

    <form action="request.php" method="POST">
      <input type="text" name="lat" id="kidnaplat" hidden>
      <input type="text" name="lon" id="kidnaplon" hidden>
      <input type="text" name="area" id="kidnaparea" hidden>
	  <input type="text" name="check" value="2" hidden>
      <button hidden name="button" id="kidnap_button">button</button>
    </form>




    <?php

include 'bottombar.php';

?>
