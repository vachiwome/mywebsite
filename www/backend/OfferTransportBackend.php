<?php

$departure_city = $_GET[departure_city];
$destination_city = $_GET[destination_city];
$departure_time = $_GET[departure_time];
$arrival_time = $_GET[arrival_time];
$type_of_car = $_GET[car_type];
$number_of_seats = $_GET[seats_number];
$price = $_GET[price];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"transport_db");

$sql = "INSERT INTO offer (departure_city, destination_city, departure_time, arrival_time, type_of_car, number_of_seats, price, email_address)";
$sql = $sql . " " . "VALUES ('$departure_city', '$destination_city','$departure_time','$arrival_time','$type_of_car','$number_of_seats','$price', 'v.chiwome@jacobs-university.de')";

$result = mysqli_query($con, $sql);

if (!$result)
	die("Error : " . mysqli_error($con));

echo "We have successfully added your offer to our database. <br/ >";
echo "We will send you an email once someone shows interest in your offer!";

mysqli_close($con);
?>
