<?php
session_start();
$email = $_SESSION['id'];
 
 $db =mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");

	

	$bt=mysqli_real_escape_string($db,$_POST['bt']);
	$ht=mysqli_real_escape_string($db,$_POST['ht']);
	
	$st=mysqli_real_escape_string($db,$_POST['st']);
	


	$url="signUp_community1.php";
	
		
	mysqli_query($db,"UPDATE approved_user
    SET body_type ='$bt',height='$ht',skin_tone = '$st' 
		 WHERE u_id = '$email'");

	

	if(mysqli_affected_rows($db)>=0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>