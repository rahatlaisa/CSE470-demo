<?php

if(isset($_POST['patientlogin']))
{
	session_start();
    $conn = mysqli_connect("localhost", "root", "","doctormanagement");

    $patientusername=mysqli_real_escape_string($conn, $_POST['patientusername']);
    $patientpassword=mysqli_real_escape_string($conn, $_POST['patientpassword']);
    $chkpatientusername="select username from patient where username='".$patientusername."'";
        $sel=mysqli_query($conn,$chkpatientusername) or exit(mysqli_error($conn));
         if(mysqli_num_rows($sel))
    {
    	$_SESSION['patientusername']=$patientusername;
        $chkpatientpassword="select password from patient where password='".$patientpassword."'";
        $selpass=mysqli_query($conn,$chkpatientpassword) or exit(mysqli_error($conn));
         if(mysqli_num_rows($selpass))
    {
       	header('Location:patienthomepage.php');
    }
    
    else
        {
        	session_destroy();
        	$exit=("Password doesn't Match");
        	echo "<script type='text/javascript'>alert('$exit');</script>";
        	header('Refresh: 1; URL=login.php');
        }
    }
    
    else
        {
        	$exit=("This Username doesn't Exist");
        	echo "<script type='text/javascript'>alert('$exit');</script>";
        	header('Refresh: 1; URL=login.php');
        }

}


if(isset($_POST['patientlogout']))
{
			session_start();
        	header('Location:login.php');
        	session_destroy();
}