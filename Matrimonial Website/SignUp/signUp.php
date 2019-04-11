<?php
session_start();
session_unset();
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	
	
$email=mysqli_real_escape_string($db,$_POST['email']);
$_SESSION['user'] = $email;
$pswd=mysqli_real_escape_string($db,$_POST['u_pswd']);


	$url="../tac.php";
	
		
	mysqli_query($db,"INSERT INTO user_profile(email,psd)
		VALUES('$email','$pswd')");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);


?>