<?php
	session_start();
	Echo"<!DOCTYPE html>
	<html>
	<head>
	<link rel='stylesheet' href='main.css'>
	<title>Doctor's Information</title>
	</head>
	<body>
	<div class='container'>
	<form method='post' action='searchresult.php'>
	<input type='text' name='search' />
	<input type='submit' value='Search' name='submitsearch' />
	</form>
	";
	require("docinfodb.php"); 
    $jsn=json_decode($jsonrevData);
    echo"
    <div class='docinfo'>
    ";
    for($i=0;$i<sizeof($jsn);$i++){
    	echo"<div class='card'>
    	<h2>Doctor's name:".$jsn[$i]->fullname."</h2>
    	<h3>Specialized In:".$jsn[$i]->specialization."</h3>
    	<h3>Visiting Hour:".$jsn[$i]->visitinghour." p.m</h3>
    	<h3>Hospital :".$jsn[$i]->hospital."</h3>
    	";
		if(isset($_SESSION['patientusername'])){
    	echo"<form><input type='submit' value='Take Appointment'/></form>";      
		}
		echo"</div>";
	}
		
	echo"
	</div>";
	if(isset($_SESSION['patientusername'])){
    	echo"<button><a href='patienthomepage.php'>Home</a></button>
    	<form class='patient'  method='post' action='patientlogin.php' >
		<input type='submit' value='Logout' name='patientlogout' />
		</form>";      
		}
		else{
			echo"<h2>New Here?</h2>
				<button><a href='register.php'>Register</a></button>
				<h2>Already have an Account?</h2>
				<button><a href='login.php'>Login</a></button>";
		}
	echo"</div>
	</body>
	</html>
	";

?>