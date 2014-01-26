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
function insertEmailAlert() {
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
	
	xmlhttp.open("GET","../backend/CreateEmailAlertBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>
</head>

<div align=center class="main">
<?php include("menu.php"); ?>
<body>
<div id ="offerDetails">
<form>
	Just specify your trip details here and we take care of everything! <br> <br>
	Departure city: &nbsp;&nbsp;<input type="text" id="departure_city"> <br> <br>
	Destination city: <input type="text" id="destination_city"> <br> <br>
	Departure time: &nbsp;<input type="text" id="departure_time"><br> <br>
	<button type="button" onclick="insertEmailAlert()"> Notify me</button>
</form> <br/>
</div>
</body>
<?php include("BottomRow.php"); ?>
</html> 

