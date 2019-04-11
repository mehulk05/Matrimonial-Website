<?php
session_start();
$email = $_SESSION['user'];
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	

	$bt=mysqli_real_escape_string($db,$_POST['bt']);
	$ht=mysqli_real_escape_string($db,$_POST['ht']);
	
	$st=mysqli_real_escape_string($db,$_POST['st']);
	

	 $sql="SELECT * FROM `user_profile` WHERE email= '$email'";
  	$result = mysqli_query($db,$sql) or die(mysqli_error($db));

	while($row3 = mysqli_fetch_array($result))
{ 

	$uid=$row3['gender']."-".$row3['id'];
	
}

	$url="../sig3.php";
	
		
	mysqli_query($db,"UPDATE user_profile
    SET u_id='$uid',body_type ='$bt',height='$ht',skin_tone = '$st' 
		WHERE email= '$email'");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>