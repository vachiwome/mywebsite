<?php
session_start( );
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/GlobalPageTemplate.css" />
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

	queryString = "email_address=" +  document.getElementById("email_address").value;
	queryString += "&password=" +  document.getElementById("password").value;
	
	xmlhttp.open("GET","../backend/LogInBackend.php?" + queryString,true);
	xmlhttp.send();
}
</script>

<style>
	html {
		/*background-image:url('../images/road-to-success.jpg');*/
		background-image:url('../images/background.png');
	}

	body {
		background-image:url('../images/img02.png');
		margin-top:0px;
		margin-bottom:-1000px;
		margin-right:150px;
		margin-left:150px;
	}
</style>

</style>
</head>

<div align=center class="main">
	<?php include("menu.php"); ?>
		<body>
			<br/> <br/>
			<div id ="signUpDetails">
				<form>
					Email address: <input type="text" id="email_address"/><br/> <br/>
					Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="password"/> <br/> <br/>
					<button type="button" onclick="insertUser()"> Login</button>
				</form> <br/>
			</div>
		</body>
<br/> <br/>
<?php include("BottomRow.php"); ?>
<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
</html> 
