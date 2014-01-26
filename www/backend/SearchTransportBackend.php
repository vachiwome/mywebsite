<?php

$departure_city = $_GET[departure_city];
$destination_city = $_GET[destination_city];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"transport_db");

$sql = "SELECT * FROM offer WHERE departure_city='$departure_city' AND destination_city='$destination_city'";
$offers = mysqli_query($con, $sql);

if (!$offers)
	die("Error : " . mysqli_error($con));

echo "<table id=\"offerList\" border=\"1\" cellspacing=\"20\">";

while($offer = mysqli_fetch_array($offers)) {
	if (!$offer)
		die("Error : " . mysqli_error($con));
	$email_address = $offer['email_address'];

	$driver_query = "SELECT * FROM user WHERE email_address='$email_address'";
	$drivers = mysqli_query($con, $driver_query);

	if (!$drivers)
		die("Error : " . mysqli_error($con));
	
	$driver = mysqli_fetch_array($drivers);
	for ($i=0; $i < 10; $i++) {
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

	$offer_id= $offer['offer_id'];
	//$begin_button = "<button type=\"button\" onclick=\"expandOffer(" . $offer_id . ")\">";
	//echo "<td>" . $begin_button . " read more </button>" . "</td>";
	echo "<td> <img src=\"../images/arrow.jpeg\" width=\"20\" border=\"0\" onclick=\"javascript:expandOffer(" . $offer_id . ");\" />";
	echo "</tr></table></td> </tr>";
	}
}


echo "</table>";
mysqli_close($con);
?>
