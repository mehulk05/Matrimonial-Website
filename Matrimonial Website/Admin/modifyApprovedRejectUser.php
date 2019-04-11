<?php

session_start();
    $id=  $_SESSION['id'];
  
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	
$url="index1.php";
	
mysqli_query($db, " INSERT INTO rejected_users SELECT * FROM approved_user WHERE id = '$id' ");

mysqli_query($db,"DELETE FROM approved_user WHERE id='$id'");

if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db); 

?>
