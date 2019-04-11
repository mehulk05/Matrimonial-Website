<?php
session_start();
$email = $_SESSION['user'];
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	

	
	$bms=mysqli_real_escape_string($db,$_POST['BMS']);
	
	$sms=mysqli_real_escape_string($db,$_POST['SMS']);
	
	$act=mysqli_real_escape_string($db,$_POST['act']);
	
	$smok=mysqli_real_escape_string($db,$_POST['smok']);

    $mt=mysqli_real_escape_string($db,$_POST['mt']);
	 
    $ft=mysqli_real_escape_string($db,$_POST['ft']);

    $brs=mysqli_real_escape_string($db,$_POST['brs']);

    $sis=mysqli_real_escape_string($db,$_POST['sis']);
    /*
    $f_n = mysqli_real_escape_string($ds,$_POST['f_n']);
    $f_p = mysqli_real_escape_string($db,$_POST['f_p']);
    $m_n = mysqli_real_escape_string($db,$_POST['m_n']);
    $m_p = mysqli_real_escape_string($db,$_POST['m_p']);
    /
    echo $f_n;
    echo
    
    f_n='$f_n',f_p='$f_p',m_n='$m_n',m_p='$m_p' */
    
	$url="../sig6.php";
	
		
	mysqli_query($db,"UPDATE user_profile
    SET activities='$act',
    lang= '$mt', family = '$ft', bro ='$brs' ,Brother_Status='$bms', sis ='$sis' , Sister_Status='$sms'  WHERE email= '$email'");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>