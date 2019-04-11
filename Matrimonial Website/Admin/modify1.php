<?php

    $id = $_GET['btn1'];
  
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	
$url="index3.php";
	
mysqli_query($db, " INSERT INTO advertisement SELECT * FROM request_add WHERE id = '$id' ");

mysqli_query($db,"DELETE FROM request_add WHERE id='$id'");

if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db); 

?>
