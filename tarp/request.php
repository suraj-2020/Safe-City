<?php

session_start();

include 'database_file.php';

echo $_POST['lat'];
echo $_POST['lon'];
echo $_POST['area'];

$area = $_POST['area'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];

$sql = "insert into $area VALUES('$lat','$lon')";

//echo $sql;

$result = $conn->query($sql) or die("Error connecting to the Login table of the database.");
echo "<script>window.open('garb.html','_self')</script>";




?>