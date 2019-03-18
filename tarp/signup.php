<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secureus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_POST['name'];$email=$_POST['email'];$aadhar=$_POST['aadhar'];$pass=$_POST['passwd'];$rating=1;

$sql = "insert into user(Name,Email,Password,Aadhar,Rating) values ('$name','$email','$pass','$aadhar','$rating')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>