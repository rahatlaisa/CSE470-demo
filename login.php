<?php

echo"<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='main.css'>
<title>Login Page</title>
</head>
<body>
<div class='container'>
<h1>Login</h1>
<div class='content'>
<form class='doctor'  method='post' action='doclogin.php'>
<h2>If you are a Doctor</h2>
  Username:<br>
  <input type='text' name='doctorusername' >
  <br>
  Password:<br>
  <input type='password' name='doctorpassword'>
  <br><br>
  <input type='submit' name='doclogin' value='Submit'>
</form>
<form class='patient' method='post' action='patientlogin.php'>
<h2>If you are a Patient</h2>
  Username:<br>
  <input type='text' name='patientusername' >
  <br>
  Password:<br>
  <input type='password' name='patientpassword'>
  <br><br>
  <input type='submit' name='patientlogin' value='Submit'>
</form>
</div>
<h2>New Here?</h2>
<button><a href='register.php'>Register</a></button>
<button><a href='docinfo.php'>Doctor's Information</a></button>  
</div>
</body>
</html>";
?>