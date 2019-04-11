<?php
session_start();
session_unset();
$db=mysqli_connect("localhost","root","root","wedding");
	
	
$email=mysqli_real_escape_string($db,$_POST['email']);
$_SESSION['user'] = $email;
$uid=mysqli_real_escape_string($db,$_POST['name']);
$pswd=mysqli_real_escape_string($db,$_POST['password']);



	$url="signUp_personal.html";
	
		
	mysqli_query($db,"INSERT INTO user_profile(email,u_id,psd)
		VALUES('$email','$uid','$pswd')");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);


?>