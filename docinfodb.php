<?php
$conn = mysqli_connect("localhost", "root", "","doctormanagement");
$num_rec_per_page=9;

function getJSONDB($sql){ 
    $conn = mysqli_connect("localhost", "root", "","doctormanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
    while($row = mysqli_fetch_assoc($result))
    {
		$arr[]=$row;                    
    }
	return json_encode($arr);
}
   $sql="select * from doctor";
   $jsonrevData=getJSONDB($sql);

    if (isset($_GET["page"])) 
        { 
            $page  = $_GET["page"];                       
        } 
        else 
        { 
        $page=1;
        }; 
        $start_from = ($page-1) * $num_rec_per_page; 
        $sqll = "SELECT * FROM doctor  LIMIT $start_from, $num_rec_per_page ";
        $jsonDatalimit=getJSONDB($sqll);
        $data = json_decode($jsonrevData, true);
        $total_records = count($data);
        $total_pages = ceil($total_records / $num_rec_per_page); 
            echo "<h3><a  href='docinfo.php?page=1'>".'|<'."</a> "; // Goto 1st page  
            for ($i=1; $i<=$total_pages; $i++) 
            { 
                echo "<a href='docinfo.php?page=".$i."'>".$i." </a>"; 
            }; 
                echo "<a href='docinfo.php?page=".$total_pages."'>".'>|'."</a></h3>";


?>