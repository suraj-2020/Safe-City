<?php

$htm= "<!DOCTYPE html>
<html>
<head>
<style>
div {
  border: 1px solid gray;
  padding: 8px;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: red;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}
</style>
</head>
<body>

<div>
  <h1>Daily Limit Exceeded!!.</h1>
  <p>Come Back Tommorow for further complaints
</div>

</body>
</html>
";

session_start();

include 'database_file.php';

//echo $_POST['lat'];
//echo $_POST['lon'];
//echo $_POST['area'];

$date_array = getdate();
   $formated_date = $date_array['mday'] . "/";
   $formated_date .= $date_array['mon'] . "/";
   $formated_date .= $date_array['year'];


$lat = $_POST['lat'];
$lon = $_POST['lon'];
$area = $_POST['area'];

$crimeid = $lat.$lon.$area.$formated_date; 
$userid = $_SESSION["uid"];

//$sql = "insert into $area VALUES('$lat','$lon')";

$attempts = array(1=>2, 2=>2, 3=>2 , 4=>2 ,5=>2, 6=>2);  //change the attempts of 1 and 2. 

//number of complaints for each user of each day is checked.
//if the user has made any complaints.
if (isset($_SESSION[$userid."count"])) 
{
	$inc=$_SESSION[$userid."count"];
	$inc=$inc+1;
	$_SESSION[$userid."count"]= $inc;
	//if he has exceeded his days 	limit of complaint.
	if($_SESSION[$userid."count"]>$attempts[$_SESSION["rat"]])
	{
		//echo "buton count".$_SESSION[$userid."count"]."<br>";
		$date_array = getdate();
   		$today_date = $date_array['mday'] . "/";
   		$today_date .= $date_array['mon'] . "/";
   		$today_date .= $date_array['year'];
		$temp= $userid."date";
		//when to evaluate the entries. Day Ends.
		if(isset($_SESSION[$temp]))
		{
			echo $htm;
			//Shift this logic to else as this would be calculated after the day is over not after 4/2 entries of a user for aa day is finished.
			for($i=0;$i<sizeof($_SESSION[$userid]);$i++)
			{
				$pos=0;$neg=0;
				$mil=$_SESSION[$userid][$i];
				$sql3 = "select * from user where Email in (select uid from crime where cid='$mil')";

				//echo $mil;
				$result3 =$conn->query($sql3);
			
				$score=0;
			
				$usernames =array();
				if ($result3->num_rows > 0) {
    	
    				while($rowx = $result3->fetch_assoc()) {
        				$score=$score+$rowx["Rating"];
        				array_push($usernames,$rowx['Email']);
    					}
				} 
				else{echo "100 results";}
				print_r($usernames);
				echo "user".$_SESSION['uid'];

				if($score >= 2)  //  score decreaed to 2 increase it to 4
				{
					$pos=$pos+1;
					for($j=0;$j<sizeof($usernames);$j++)
					{
						$tempo=$usernames[$j];
						$u_sql="update user set Rating = Rating + 1 where Email = '$tempo'";
						$u_result = $conn->query($u_sql) or die("Error connecting to the crime table of the database.");
					}
				}
				else
				{
					$neg=$neg+1;
					for($j=0;$j<sizeof($usernames);$j++)
					{
						$tempo=$usernames[$j];
						$u_sql="update user set Rating = Rating - 1 where Email = '$tempo'";
						$u_result = $conn->query($u_sql) or die("Error connecting to the crime table of the database.");
					}
				}
				for($k=0;$k<sizeof($usernames);$k++)
				{
					if(isset($_SESSION[$usernames[$k]]))
					{
						array_splice($_SESSION[$usernames[$k]], array_search($mil, $_SESSION[$usernames[$k]] ), 1);
					}
				}
				$pos_val= $pos-$neg;
				$neg_val= $neg-$pos;
				if($pos>$neg)
					echo "Your Rating increased by".$pos_val;
				else
					echo "Your Rating decreaed by". $neg_val;
			}

			/*$sql3 = "select * from user where Email in (select uid from crime where cid='$crimeid')";
			$result3 =$conn->query($sql3);
			
			$score=0;
			
			if ($result3->num_rows > 0) {
    	
    			while($rowx = $result3->fetch_assoc()) {
        			$score=$score+$rowx["Rating"];
    				}
			} 
			else{echo "100 results";}

			if($score>4) // 4 is the threshold score here
			{
				$sql = "insert into $area VALUES('$lat','$lon')";
				$result = $conn->query($sql) or die("Error connecting to the Login table of the database.");
				echo "<script>window.open('garb.html','_self')</script>";
			}
			else
			{
				echo "You will be PENALISED FOR WRONG ENTRIES";
			}*/
		}
		else //if number of tries > and the day changed on next request, we resest the count to 1 and enter that value so that next insets could go to outer else.
		{
		$date_array1 = getdate();
   		$today_date1 = $date_array['mday'] . "/";
   		$today_date1 .= $date_array['mon'] . "/";
   		$today_date1 .= $date_array['year'];
		$temp= $userid."date";
		$_SESSION[$temp] = $today_date1; 
		//insert the if code here for deployment.
		$_SESSION[$userid."count"]=1;
		array_push($_SESSION[$_SESSION['uid']],$crimeid);
		$sqlx ="insert into crime(cid,uid) values('$crimeid','$userid')";
		$resultx = $conn->query($sqlx) or die("Error connecting to the crime table of the database.");	
		}

	}
	else
	{
		$sql2 ="insert into crime(cid,uid) values('$crimeid','$userid')";
		$result2 = $conn->query($sql2) or die("Error connecting to the crime table of the database.");
		array_push($_SESSION[$_SESSION['uid']],$crimeid);
		echo "<script>window.open('garb.html','_self')</script>";
	}
}
else
{
	//echo "anadar";
	$dte = $userid."date";
	$_SESSION[$userid."count"]=1;
	$_SESSION[$dte]=$formated_date;
	if(!isset($_SESSION[$userid]))
	{
		$_SESSION[$userid]= array($crimeid);	
	}
	echo "<script>window.open('garb.html','_self')</script>";
	//echo $_SESSION[$userid]."<br>";
	//echo $_SESSION[$dte];
	//echo "<script>window.open('main.php','_self')</script>";
}
//echo "<script>window.open('garb.html','_self')</script>";




?>