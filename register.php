<?php

echo"<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='main.css'>
<title>Registration Page</title>
</head>
<body>
<div class='container'>
<h1>Register</h1>
<div class='content'>
<form class='doctor' method='post' action='doctordb.php' name='doctor'>
<h2>If you are a Doctor</h2>
  FullName:<br>
  <input type='text' name='doctorfullname' >
  <br>
  Hospital:<br>
  <input type='text' name='doctorhospital' >
  <br>
  Specialization:<br>
  <input type='text' name='doctorspecialization' >
  <br>
  Visiting Hour:<br>
  <input type='text' name='doctorvisitinghour' >
  <br>
  Username:<br>
  <input type='text' name='doctorusername' >
  <br>
  Password:<br>
  <input type='password' name='doctorpassword'>
  <br><br>
  <input type='submit' name='submitdocinfo' value='Submit'>
</form>
<form class='patient' method='post' action='patientdb.php'>
<h2>If you are a Patient</h2>
  FullName:<br>
  <input type='text' name='patientfullname' >
  <br>
  Address:<br>
  <input type='text' name='patientaddress' >
  <br>
  Contact:<br>
  <input type='text' name='patientcontact' >
  <br>
  Username:<br>
  <input type='text' name='patientusername' >
  <br>
  Password:<br>
  <input type='password' name='patientpassword'>
  <br><br>
  <input type='submit' name='submitpatientinfo' value='Submit'>
</form>
</div>
<h2>Already have an Account?</h2>
<button><a href='login.php'>Login</a></button>
<button><a href='docinfo.php'>Doctor's Information</a></button>   
</div>
</body>
</html>";
?>