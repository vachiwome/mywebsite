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
function insertUser() {
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    document.getElementById("signUpDetails").innerHTML=xmlhttp.responseText;
	   }
	}

	queryString = "firstname=" +  document.getElementById("firstname").value;
	queryString += "&lastname=" +  document.getElementById("lastname").value;
	queryString += "&email_address=" +  document.getElementById("email_address").value;
	queryString += "&phone_number=" +  document.getElementById("phone_number").value;
	queryString += "&password=" +  document.getElementById("password").value;
	
	xmlhttp.open("GET","../backend/SignUpBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>

</head>

<div align=center class="main">
<?php include("menu.php"); ?>
<body>
<div id ="signUpDetails">
<form>
	First name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="firstname"/> <br/> <br/>
	Last name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="lastname"/> <br/> <br/>
	Email address: <input type="text" id="email_address"/><br/> <br/>
	Phone number: <input type="text" id="phone_number"/> <br/> <br/>
	Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="password"/> <br/> <br/>
	<button type="button" onclick="insertUser()"> Join Busstop</button>
</form> <br/>
</div>
<?php include("BottomRow.php"); ?>
</body>
</div>
</html> 
