<?php

$offer_id = $_GET[offer_id];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');
if (!$con) 
  die('Could not connect: ' . mysqli_error($con));


mysqli_select_db($con,"transport_db");

// get the offer in question
$sql = "SELECT * FROM offer WHERE offer_id='$offer_id'";
$offers = mysqli_query($con, $sql);
$offer = mysqli_fetch_array($offers);

if (!$offer)
	die("Error : " . mysqli_error($con));

echo "<table id=\"offerDetails\" border=\"1\"> ";

// get the driver associated with this offer
$email_address = $offer['email_address'];
$driver_query = "SELECT * FROM user WHERE email_address='$email_address'";
$drivers = mysqli_query($con, $driver_query);
$driver = mysqli_fetch_array($drivers);

if (!$driver)
	die("Error : " . mysqli_error($con));
	
	echo "<tr> <td> <table border=\"0\" cellspacing=\"10\"> <tr>";
	echo  "<td>" . $driver['firstname'] . "</td>"; 
	echo  "<td>" . $driver['lastname'] . "</td>";
	/*echo "<td>" . $driver['phone_number'] "</td>";
	*/
	echo "<td>" . $offer['type_of_car'] . "</td>";
	echo "<td>" . $offer['departure_city'] . "</td>";
	echo "<td>" . $offer['destination_city'] . "</td>";
	echo "<td>" . $offer['departure_time'] . "</td>";

	echo "<td> <img src=\"../images/arrow.jpeg\" width=\"20\" border=\"0\" onclick=\"javascript:contactDriver();\" />";
	echo "</tr></table></td> </tr>";

echo "</table> <br/>";
echo $email_address;
// echo "<textarea id=\"message\" cols=\"100\" rows=\"5\" ></textarea>";
mysqli_close($con);
?>
