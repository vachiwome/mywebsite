<?php
$images = array("../images/bags.jpeg","../images/front-car.jpg","../images/road.jpeg");

$time = $_GET[time];


echo "<p align=center>";
for ($i = 0; $i < 3; $i++) 
	echo "<img src=" . $images[($i % 3)] . " height=\"200px\">";

echo "</p>";
?>
