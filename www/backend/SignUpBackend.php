<?php

$firstname = $_GET[firstname];
$lastname = $_GET[lastname];
$email_address = $_GET[email_address];
$phone_num = $_GET[phone_number];
$password = $_GET[password];

$con = mysqli_connect('localhost','root','mark11vs22','transport_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"transport_db");

$user_sql = "INSERT INTO user (firstname, lastname, email_address, phone_number)";
$user_sql = $user_sql . " " . "VALUES ('$firstname', '$lastname','$email_address','$phone_number')";

$user_ret = mysqli_query($con, $user_sql);

if (!$user_ret)
	die("Error : " . mysql_error());

$pass_sql = "INSERT INTO user_password (email_address, password)";
$pass_sql = $pass_sql . " " . "VALUES ('$email_address','$password')";

$pass_ret = mysqli_query($con, $pass_sql);

if (!$pass_ret)
	die("Error : " . mysql_error());

echo "Congratulations, " . $firstname . ", you have been successfully joined bustop! <br/>";
echo "Go ahead and find or offer transport!";
mysqli_close($con);
?>
