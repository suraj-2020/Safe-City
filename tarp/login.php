<?php

$server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "secureus";


$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "select * from user";																								

$result =$conn->query($sql);

$m = $_POST['mx'];
$pass = $_POST['password']; 

$flag=0;
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	//echo $_POST['email'].$row['Email'].$_POST['password'].$row['Password']."<br>";
        if($m == $row['Email'] && $pass == $row['Password'])
        	$flag=1;
    }
}

if($flag==1)
{
	$link="<script>window.open('main.php','_self');</script>";
    echo $link;
}
else
{
	echo "Enter Correct Credentials ...";
}

?>