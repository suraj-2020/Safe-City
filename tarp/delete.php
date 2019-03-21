<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secureus";
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

unset($_SESSION["u1@gmail.com"]);
unset($_SESSION["u1@gmail.comcount"]);
unset($_SESSION["uid"]);
unset($_SESSION["u2@gmail.comcount"]);
unset($_SESSION["u2@gmail.com"]);
echo "session variables deleted";
?>