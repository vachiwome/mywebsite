<?php

$departure_city = $_GET[departure_city];
$destination_city = $_GET[destination_city];
$departure_time = $_GET[departure_time];
$price = $_GET[price];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"transport_db");

$sql = "INSERT INTO email_alert (departure_city, destination_city, departure_time)";
$sql = $sql . " " . "VALUES ('$departure_city', '$destination_city','$departure_time')";

$result = mysqli_query($con, $sql);

if (!$result)
	die("Error : " . mysqli_error($con));

echo "We have successfully stored your alert request. <br/ >";
echo "We will send you an email once someone indicates that they go in your way";

mysqli_close($con);
?>
