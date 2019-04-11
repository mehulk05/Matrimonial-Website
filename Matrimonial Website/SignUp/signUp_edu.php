<?php
session_start();
$email = $_SESSION['user'];
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	

	$hedu=mysqli_real_escape_string($db,$_POST['hedu']);
	$edufd=mysqli_real_escape_string($db,$_POST['edufd']);
	
	$uni=mysqli_real_escape_string($db,$_POST['uni']);

    $clg=mysqli_real_escape_string($db,$_POST['clg']);
	 
    $wk=mysqli_real_escape_string($db,$_POST['wk']);

    $as=mysqli_real_escape_string($db,$_POST['as']);

    $ic=mysqli_real_escape_string($db,$_POST['ic']);
	$url="../sig5.php";
	print($email);
	
	mysqli_query($db,"UPDATE `user_profile`
    SET edu_level ='$hedu', edu_field='$edufd', univ = '$uni', colg= '$clg', work ='$wk', work_as ='$as', incom='$ic' WHERE email= '$email'");

	

	if(mysqli_affected_rows($db)>=0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>