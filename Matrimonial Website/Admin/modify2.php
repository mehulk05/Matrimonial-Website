<?php

    $id = $_GET['btn1'];
  
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	
$url="index4.php";
	

mysqli_query($db,"DELETE FROM events WHERE id='$id'");

if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db); 

?>
