<?php
session_start( );

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"transport_db");

$query = "UPDATE user SET is_logged_in = 0 WHERE email_address = '" . $_SESSION['email_address']. "'";
$result = mysqli_query($con, $query);
if(!$result)
	echo "We encountered a problem with your session. Please refresh the page";
session_destroy();

echo "Successfully destroyed session";

mysqli_close($con);
?> 
