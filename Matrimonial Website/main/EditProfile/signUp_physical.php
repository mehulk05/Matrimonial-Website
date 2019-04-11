<?php
session_start();
$UserName = $_SESSION['id'];
 
$db=mysqli_connect("localhost","root","root","wedding");
	

	$bt=mysqli_real_escape_string($db,$_POST['bt']);
	$ht=mysqli_real_escape_string($db,$_POST['ht']);
	
	$st=mysqli_real_escape_string($db,$_POST['st']);
	


	$url="signUp_community1.php";
	
		
	mysqli_query($db,"UPDATE approved_user
    SET body_type ='$bt',height='$ht',skin_tone = '$st' 
		WHERE id = '$UserName'");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>