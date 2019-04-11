<?php

session_start();
    $id=  $_SESSION['id'];
  
$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");
	
$url="index.php";
	
mysqli_query($db, " INSERT INTO approved_user SELECT * FROM user_profile WHERE id = '$id' ");

mysqli_query($db,"DELETE FROM user_profile WHERE id='$id'");

if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db); 

?>
