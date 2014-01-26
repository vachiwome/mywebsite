<?php
session_start( );

$email_address = $_GET[email_address];
$password = $_GET[password];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"transport_db");

$sql="SELECT * FROM user_password WHERE email_address = '".$email_address."' AND password = '".$password."'";

$result = mysqli_query($con,$sql);

$user_info = mysqli_fetch_array($result);

if (!$user_info)
	echo "Sorry, we could not find any record of the specified username and password";
else {
	$query = "UPDATE user SET is_logged_in = 1 WHERE email_address = '" . $email_address. "'";
	$result = mysqli_query($con, $query);
	if(!$result)
		echo "We encountered a problem with your session. Please refresh the page";
	$_SESSION['email_address'] = $email_address;
	echo "<br/> You have successfully logged into busstop, go ahead and find or give transport";
}

mysqli_close($con);
?> 
