<?php
session_start();
$UserName = $_SESSION['id'];
 
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	

	$hedu=mysqli_real_escape_string($db,$_POST['hedu']);
	$edufd=mysqli_real_escape_string($db,$_POST['edufd']);
	
	$uni=mysqli_real_escape_string($db,$_POST['uni']);

    $clg=mysqli_real_escape_string($db,$_POST['clg']);
	 
    $wk=mysqli_real_escape_string($db,$_POST['wk']);

    $as=mysqli_real_escape_string($db,$_POST['as']);

    $ic=mysqli_real_escape_string($db,$_POST['ic']);
	$url="signUp_life1.php";
	
		
	mysqli_query($db,"UPDATE approved_user
    SET edu_level ='$hedu', edu_field='$edufd', univ = '$uni', colg= '$clg', work ='$wk', work_as ='$as', incom='$ic' WHERE u_id = '$UserName'");

	

	if(mysqli_affected_rows($db)>=0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>