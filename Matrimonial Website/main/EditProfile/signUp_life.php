<?php
session_start();
$UserName = $_SESSION['id'];
 
$db=mysqli_connect("localhost","root","root","wedding");
	

	$dt=mysqli_real_escape_string($db,$_POST['dt']);
	$act=mysqli_real_escape_string($db,$_POST['act']);
	
	$smok=mysqli_real_escape_string($db,$_POST['smok']);

    $mt=mysqli_real_escape_string($db,$_POST['mt']);
	 
    $ft=mysqli_real_escape_string($db,$_POST['ft']);

    $brs=mysqli_real_escape_string($db,$_POST['brs']);

    $sis=mysqli_real_escape_string($db,$_POST['sis']);


	
	$url="signUp_profile.php";
		


mysqli_query($db,"UPDATE approved_user
    SET diet ='$dt',activities='$act', smoke = '$smok',
    lang= '$mt', family = '$ft', bro ='$brs', sis ='$sis' WHERE id = '$UserName'");

    

    if(mysqli_affected_rows($db)>0)
    {
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



    }
    else
    {
        echo "wrong";
    }
    


mysqli_close($db);

?>