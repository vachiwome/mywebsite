<html>
<head>
<style>
html {
	background-image:url('../images/road-to-success.jpg');
}

body {
	background-image:url('../images/img02.png');
	margin-top:-15px;
	margin-bottom:0px;
	margin-right:150px;
	margin-left:150px;
}
</style>

<link rel="stylesheet" type="text/css" href="../css/GlobalPageTemplate.css">
<script>
function connectToServer() {
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlhttp;
}
</script>

<script>
function searchOffers() {
	xmlhttp = connectToServer();
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    document.getElementById("dynamicContent").innerHTML=xmlhttp.responseText;
	   }
	}
	queryString = "departure_city=" +  document.getElementById("departure_city").value;
	queryString += "&destination_city=" +  document.getElementById("destination_city").value;
	queryString += "&departure_time=" +  document.getElementById("departure_time").value;
	queryString += "&arrival_time=" +  document.getElementById("arrival_time").value;
	queryString += "&car_type=" +  document.getElementById("car_type").value;
	queryString += "&seats_number=" +  document.getElementById("seats_number").value;
	queryString += "&price=" +  document.getElementById("price").value;
	
	xmlhttp.open("GET","../backend/SearchTransportBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>

<script>
function expandOffer(offer_id) {
	xmlhttp = connectToServer();
	xmlhttp.onreadystatechange=function() {
	 if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    document.getElementById("dynamicContent").innerHTML=xmlhttp.responseText;
	   }
	}
	queryString = "offer_id=" + offer_id;
	xmlhttp.open("GET","../backend/ExpandOfferBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>

<script>
function contactDriver() {
	xmlhttp = connectToServer();
	xmlhttp.onreadystatechange=function() {
	 if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    document.getElementById("dynamicContent").innerHTML=xmlhttp.responseText;
	   }
	}
	queryString = "email_address=" + "v.chiwome@jacobs-university.de";
	xmlhttp.open("GET","../backend/ContactDriverBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>
</head>

<div align=center class="main">
<?php include("menu.php"); ?>
<body>
<div id="menu">
</div>
<div id ="dynamicContent">
<form>
	We are glad that you would like to share a ride.To make an offer, please enter your details here! <br> <br>
	Departure city:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="departure_city"> <br> <br>
	Destination city: &nbsp;<input type="text" id="destination_city"> <br> <br>
	Departure time: &nbsp;<input type="text" id="departure_time"><br> <br>
	Arrival time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="arrival_time"> <br> <br>
	Type of car: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="car_type"> <br> <br>
	Number of seats:<input type="text" id="seats_number"> <br> <br>
	Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="price"><br> <br>
	<button type="button" onclick="searchOffers()"> Search cars</button>
</form> <br/>
</div>
</body>
</div>
<div align=center>
<?php include("BottomRow.php"); ?>
</div>
</html> 

