<?php
session_start();

if(isset($_POST['submitdocinfo']))
{
    $conn = mysqli_connect("localhost", "root", "","doctormanagement");

    $doctorfullname=mysqli_real_escape_string($conn, $_POST['doctorfullname']);
    $doctorhospital=mysqli_real_escape_string($conn, $_POST['doctorhospital']);
    $doctorspecialization=mysqli_real_escape_string($conn, $_POST['doctorspecialization']);
    $doctorvisitinghour=mysqli_real_escape_string($conn, $_POST['doctorvisitinghour']);
    $doctorusername=mysqli_real_escape_string($conn, $_POST['doctorusername']);
    $doctorpassword=mysqli_real_escape_string($conn, $_POST['doctorpassword']);


    if( strlen ($doctorfullname) <5 && !preg_match("/^[a-zA-Z ]*$/",$doctorfullname))
        
    {
        echo"Please Put Minimum 5 Characters inputs & Only letters and white space allowed";
    }
    else
    {
        $chkdoctorfullname="select fullname from doctor where fullname='".$doctorfullname."'";
        $sel=mysqli_query($conn,$chkdoctorfullname) or exit(mysqli_error($conn));
         if(mysqli_num_rows($sel))
    {
       $exit=("This Doctor already Exist");
        echo "<script type='text/javascript'>alert('$exit');</script>";
        header('Refresh: 1; URL=register.php');
    }
    
    else
        {
        	if( strlen ($doctorusername) <5 && !preg_match("/^[a-zA-Z ]*$/",$doctorusername))
        
    {
        echo"Please Put Minimum 5 Characters inputs & Only letters and white space allowed";
    }
    else
    {
        $chkdoctorusername="select username from doctor where username='".$doctorusername."'";
        $sell=mysqli_query($conn,$chkdoctorusername) or exit(mysqli_error($conn));
         if(mysqli_num_rows($sell))
    {
       $exit=("This Username already exist");
        echo "<script type='text/javascript'>alert('$exit');</script>";
        header('Refresh: 1; URL=register.php');
    }
    
    else
        {
        	$query  = "INSERT INTO doctor(fullname,hospital,specialization,visitinghour,username,password) VALUES('$doctorfullname','$doctorhospital','$doctorspecialization','$doctorvisitinghour','$doctorusername','$doctorpassword') ";
         if(mysqli_query($conn, $query))
                            {
                            echo'Every Data creation successful.';
                            header('Location: login.php');  }  
             else
        {
            echo'Data Creation of a Doctor is Unsuccessful.' ;
        } 
        }
        }
    }
}
}
?>