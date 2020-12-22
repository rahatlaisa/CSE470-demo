<?php

if(isset($_POST['doclogin']))
{
	session_start();
    $conn = mysqli_connect("localhost", "root", "","doctormanagement");

    $doctorusername=mysqli_real_escape_string($conn, $_POST['doctorusername']);
    $doctorpassword=mysqli_real_escape_string($conn, $_POST['doctorpassword']);
    $chkdoctorusername="select username from doctor where username='".$doctorusername."'";
        $sel=mysqli_query($conn,$chkdoctorusername) or exit(mysqli_error($conn));
         if(mysqli_num_rows($sel))
    {
    	$_SESSION['docusername']=$doctorusername;
        $chkdoctorpassword="select password from doctor where password='".$doctorpassword."'";
        $selpass=mysqli_query($conn,$chkdoctorpassword) or exit(mysqli_error($conn));
         if(mysqli_num_rows($selpass))
    {
    		
        	header('Location:dochomepage.php');
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


if(isset($_POST['doclogout']))
{
			session_start();
        	header('Location:login.php');
        	session_destroy();
}