<?php
session_start();
if(isset($_SESSION['patientusername']))
{
	Echo"<!DOCTYPE html>
	<html>
	<head>
	<link rel='stylesheet' href='main.css'>
	<title>Patient's Homepage</title>
	</head>
	<body>
	<div class='container'>
	<h1>Hello ".$_SESSION['patientusername']."</h1>
	<button><a href='docinfo.php'>Doctor's Information</a></button>
	<form class='patient'  method='post' action='patientlogin.php' >
		<input type='submit' value='Logout' name='patientlogout' />
	</form>
	</div>
	</body>
	</html>
	";
}
else{
	echo"<h1 style='text-align:center'>Please Login as A Patient</h1>";
}

?>