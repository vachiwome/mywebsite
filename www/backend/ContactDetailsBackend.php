<?php
/*
$email_address = $_GET[email_address];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');
if (!$con) 
  die('Could not connect: ' . mysqli_error($con));


mysqli_select_db($con,"transport_db");

// get the offer in question
$sql = "SELECT * FROM user WHERE email_address='$email_address'";
$drivers = mysqli_query($con, $sql);
$driver = mysqli_fetch_array($drivers);

if (!$driver)
	die("Error : " . mysqli_error($con));

$subject = "Someone wants to travel with you";
$message = "Hello " . $driver['firstname'] . "\n\n";
$message .= "Valentine wants to travel with you. His email address/phone number/ whatsapp is....."
$from = "noreply@busstop.com";
$headers = "From:" . $from;
// mail($email_address,$subject,$message,$headers);
*/echo "We have sent him an email.";

// mysqli_close($con);
?>
