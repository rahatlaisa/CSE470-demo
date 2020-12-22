<?php
session_start();

if(isset($_POST['submitpatientinfo']))
{
    $conn = mysqli_connect("localhost", "root", "","doctormanagement");

    $patientfullname=mysqli_real_escape_string($conn, $_POST['patientfullname']);
    $patientaddress=mysqli_real_escape_string($conn, $_POST['patientaddress']);
    $patientcontact=mysqli_real_escape_string($conn, $_POST['patientcontact']);
    $patientusername=mysqli_real_escape_string($conn, $_POST['patientusername']);
    $patientpassword=mysqli_real_escape_string($conn, $_POST['patientpassword']);


    if( strlen ($patientfullname) <5 && !preg_match("/^[a-zA-Z ]*$/",$patientfullname))
        
    {
        echo"Please Put Minimum 5 Characters inputs & Only letters and white space allowed";
    }
    else
    {
        $chkpatientfullname="select fullname from patient where fullname='".$patientfullname."'";
        $sel=mysqli_query($conn,$chkpatientfullname) or exit(mysqli_error($conn));
         if(mysqli_num_rows($sel))
    {
       $exit=("This Patient already Exist");
        echo "<script type='text/javascript'>alert('$exit');</script>";
        header('Refresh: 1; URL=register.php');
    }
    
    else
        {
        	if( strlen ($patientusername) <5 && !preg_match("/^[a-zA-Z ]*$/",$patientusername))
        
    {
        echo"Please Put Minimum 5 Characters inputs & Only letters and white space allowed";
    }
    else
    {
        $chkpatientusername="select username from patient where username='".$patientusername."'";
        $sell=mysqli_query($conn,$chkpatientusername) or exit(mysqli_error($conn));
         if(mysqli_num_rows($sell))
    {
       $exit=("This Username already exist");
        echo "<script type='text/javascript'>alert('$exit');</script>";
        header('Refresh: 1; URL=register.php');
    }
    
    else
        {
        	$query  = "INSERT INTO patient(fullname,address,contact,username,password) VALUES('$patientfullname','$patientaddress','$patientcontact','$patientusername','$patientpassword') ";
         if(mysqli_query($conn, $query))
                            {
                            echo'Every Data creation successful.';
                            header('Location: login.php');  }  
             else
        {
            echo'Data Creation of a Patient is Unsuccessful.' ;
        } 
        }
        }
    }
}
}
?>