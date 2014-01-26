<html>
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
	 $(function() {
	$( "#datepicker" ).datepicker();
	});
	$(function() {
	$('.departure_time').pickatime();
	});

</script>

<style>
html {
	background-image:url('../images/background.png');
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
function insertOffer() {
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    document.getElementById("offerDetails").innerHTML=xmlhttp.responseText;
	   }
	}
	queryString = "departure_city=" +  document.getElementById("departure_city").value;
	queryString += "&destination_city=" +  document.getElementById("destination_city").value;
	queryString += "&departure_time=" +  document.getElementById("departure_time").value;
	queryString += "&arrival_time=" +  document.getElementById("arrival_time").value;
	queryString += "&car_type=" +  document.getElementById("car_type").value;
	queryString += "&seats_number=" +  document.getElementById("seats_number").value;
	queryString += "&price=" +  document.getElementById("price").value;
	
	xmlhttp.open("GET","../backend/OfferTransportBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>
</head>

<div align=center class="main">
<?php include("menu.php"); ?>
<body>
<div id ="offerDetails">
<form>
	
	We are glad that you would like to share a ride. <br/>
	To make an offer, please enter your details here! <br/> <br/>
	<font color="red"> Please Use 24 hr notation for time eg 1302 </font> <br/> <br/ >
	Departure city: &nbsp;&nbsp;&nbsp;<input type="text" id="departure_city"> <br> <br>
	Destination city: &nbsp;<input type="text" id="destination_city"> <br> <br>
	Departure Date: &nbsp;<input type="text" id="datepicker"> <br/> <br/>
	Departure time: &nbsp;&nbsp;<input type="text" id="departure_time"> <br> <br/>
	Arrival time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" id="arrival_time"> <br><br>
	Type of car: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="car_type"> <br> <br>
	Number of seats:<input type="text" id="seats_number"> <br> <br>
Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="price"><br> <br>
	&nbsp;&nbsp;<button type="button" onclick="insertOffer()"> Offer car</button>
</form> <br/>
</div>
</body>
<?php include("BottomRow.php"); ?>
<div>
</html> 

