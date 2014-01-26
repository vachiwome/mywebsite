<?php
session_start( );
?>

<html>
	<head>
		<style> 

			.topbar {
			    background-image:url('../images/img05.png');
			    text-align:center;
		            padding:0;
			}

			.topbar ul {
				list-style-type:none;
			}

			.menu {
			    list-style:none;
			    margin:0;
			    padding:0;
			}
			.menu {
			    display:inline;
			}
			.menu a {
			    display:inline-block;
			    padding:0cm 1cm 0.5cm 0.5cm;
			    color:white;
			}
		
			.logo {
				text-align:left;
			}

			.logo a {
				color:white;
			}
		</style>

		<link rel="stylesheet" type="text/css" href="../css/GlobalPageTemplate.css">

		<script>
			var myVar=setInterval(function(){slide()},500);

			var images = new Array();
			images[0] = "../images/road-to-success.jpg";
			images[1] = "../images/road-to-success.jpg";//"../images/img02.png";
			//images[2] = "../images/road-to-success.jpg";//"../images/img02.png";

			function slide() {
				var disp = "";
				for (var i = 0; i < images.length; i++) {
					disp = disp.concat("<img src=".concat(images[i].concat(" height=\"300px\">")));
				}

				var zero = images[0];
				var one = images[1];
				var two = images[2];
/*
				images[2] = one;
				images[1] = zero;
				images[0] = two;
*/
				document.getElementById("slideShow").innerHTML = disp;
			}
			
			function logout() {
				if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				}
				else {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange=function() {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				    window.location = "LogIn.php";
				   }
				}

				xmlhttp.open("GET","../backend/LogOutBackend.php?",true);
				xmlhttp.send();
			}
		</script>
	
	</head>

	<body>
		<div class="topbar">
			<ul>
				<li class="logo"> <a href="#" style="text-decoration:none;"> BUSSTOP.COM </a> </li>
				<?php
					if(isset($_SESSION['email_address'])) {
		   echo "<li class=\"menu\"> <a href=\"#\" style=\"text-decoration:none;\">" . $_SESSION['email_address'] . " </a> </li> ";
    	echo "<li class=\"menu\"> <a href=\"#\" style=\"text-decoration:none;\" onclick=\"javascript:logout()\" /> LOGOUT </li>";	 
					}
					else {
		   echo "<li class=\"menu\"> <a href=\"LogIn.php\" style=\"text-decoration:none;\"> LOGIN </a> </li> ";	
	           echo "<li class=\"menu\"> <a href=\"SignUp.php\" style=\"text-decoration:none;\"> SIGNUP </a> </li>";			
					}
				?> 

				<li class="menu"> <a href="SearchTransport.php" style="text-decoration:none;"> SEARCH CARS </a> </li>

				<li class="menu"> <a href="OfferTransport.php" style="text-decoration:none;"> OFFER A CAR </a> </li>

				<li class="menu"> <a href="CreateEmailAlert.php" style="text-decoration:none;"> ALERT ME </a> </li>
			</ul>
		</div>
		<h2 align=center>
			<font color="green">Travel&nbsp;&nbsp;&nbsp;&nbsp;<sub>made</sub>&nbsp;&nbsp;&nbsp;&nbsp;easy!!</font>
		</h2>

		<p id="slideShow" align="center"> </p>
		<p id="test" align="center"> </p>	
	</body>
<!--
<p align=center>
<img src="../images/bags.jpeg" height="200px">
<img src="../images/front-car.jpg" height="200px">
<img src="../images/road.jpeg" height="200px">
</p>
-->
</html>
