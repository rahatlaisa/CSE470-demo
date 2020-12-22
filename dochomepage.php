<?php
session_start();
if(isset($_SESSION['docusername']))
{
	Echo"<!DOCTYPE html>
	<html>
	<head>
	<link rel='stylesheet' href='main.css'>
	<title>Doctor's Homepage</title>
	</head>
	<body>
	<div class='container'>
	<h1>Hello ".$_SESSION['docusername']."</h1>
	<form class='doctor'  method='post' action='doclogin.php' >
		<input type='submit' value='Logout' name='doclogout' />
	</form>
	</div>
	</body>
	</html>
	";
}
else{
	echo"<h1 style='text-align:center'>Please Login as A Doctor</h1>";
}

?>