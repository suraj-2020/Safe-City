  <?php

include 'topbar.php';

?>

<?php


include 'database_file.php';

$sql = "select * from robbery";

//echo $sql;

echo "<script>var lat = [];</script>";

echo "<script>var lon = [];</script>";
$result = $conn->query($sql) or die("Error connecting to the Login table of the database.");

foreach ($conn->query($sql) as $row) {
          $lat = $row['lat'];
          $lon = $row['lon'];
          echo "<script>lon.push($lon);</script>";
          echo "<script>lat.push($lat);</script>";
        }



// echo "<script>alert(lat[0]);</script>";
// echo "<script>alert(lon[0]);</script>";
?>




<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84&libraries=geometry,places,visualization&callback=initMap">
</script>
<script src="js/output.js"></script>

<div class="container-fluid">


    
    <input id="pac-input" class="controls" type="text" placeholder="Search Box" style="width: 30%; margin-left: 35%;">
    <div id="map" style="height: 80%;"></div>


</div>





    <?php

include 'bottombar.php';

?>
