<?php
session_start();
$UserName = $_SESSION['id'];
 
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");

    $mt=mysqli_real_escape_string($db,$_POST['mt']);
	 
    $ft=mysqli_real_escape_string($db,$_POST['ft']);

    $brs=mysqli_real_escape_string($db,$_POST['brs']);
    $BMS=mysqli_real_escape_string($db,$_POST['BMS']);
    
    $sis=mysqli_real_escape_string($db,$_POST['sis']);
    $SMS=mysqli_real_escape_string($db,$_POST['SMS']);
    
   $f_n=mysqli_real_escape_string($db,$_POST['f_n']);
    $f_p=mysqli_real_escape_string($db,$_POST['f_p']);
    $m_n=mysqli_real_escape_string($db,$_POST['m_n']);
    $m_p=mysqli_real_escape_string($db,$_POST['m_p']);

	
	$url="signUp_profile.php";
		


mysqli_query($db,"UPDATE `approved_user` SET lang= '$mt', family = '$ft',bro ='$brs' ,Brother_Status='$BMS', sis='$sis' , Sister_Status='$SMS' ,father_Name='$f_n' ,father_profession= '$f_p', mother= '$m_n',mother_profession= '$m_p' WHERE `u_id` = '$UserName'");

    
    if(mysqli_affected_rows($db)>=0)
    {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();

    }
    
    else
    {
          echo("Error description: " . mysqli_error($db));
    }
    


mysqli_close($db);

?>